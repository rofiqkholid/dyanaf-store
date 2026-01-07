<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        \Illuminate\Support\Facades\Log::info('Checkout initiated', ['user_agent' => $request->header('User-Agent')]);

        $request->validate([
            'service_name' => 'required|string',
            'price' => 'required|numeric',
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20'
        ]);

        $service = \App\Models\Service::where('name', $request->service_name)->first();

        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        $price = $service->price;

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $orderId = 'DYANAF-' . Str::upper(Str::random(6)) . '-' . time();

        $names = explode(' ', $request->customer_name, 2);
        $firstName = $names[0];
        $lastName = isset($names[1]) ? $names[1] : '';

        $transaction = \App\Models\Transaction::create([
            'order_id' => $orderId,
            'customer_name' => $request->customer_name,
            'service_name' => $request->service_name,
            'amount' => $price,
            'status' => 'pending',
            'phone' => $request->phone,
        ]);

        $isMobile = preg_match('/(android|iphone|ipad|mobile)/i', $request->header('User-Agent'));

        $enabledPayments = [
            'qris',
            'credit_card',
            'bca_va',
            'bni_va',
            'bri_va',
            'permata_va',
            'cimb_va',
            'other_va',
            'shopeepay',
            'indomaret',
            'alfamart'
        ];

        if ($isMobile) {
            array_unshift($enabledPayments, 'gopay');
        } else {
            array_unshift($enabledPayments, 'qris');
            $enabledPayments = array_values(array_unique($enabledPayments));
        }

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $price,
            ],
            'item_details' => [
                [
                    'id' => Str::slug($request->service_name),
                    'price' => $price,
                    'quantity' => 1,
                    'name' => substr($request->service_name, 0, 50),
                ]
            ],
            'customer_details' => [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => 'customer@dyanaf-store.com',
                'phone' => $request->phone,
            ],
            'enabled_payments' => $enabledPayments,
        ];

        try {
            $snapToken = Snap::getSnapToken($params);

            // Update transaction with snap token
            $transaction->update(['snap_token' => $snapToken]);

            return response()->json([
                'snap_token' => $snapToken,
                'order_id' => $orderId
            ]);
        } catch (\Exception $e) {
            // Rollback if getting token fails
            $transaction->delete();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cancel(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:transactions,order_id'
        ]);


        \App\Models\Transaction::where('order_id', $request->order_id)->delete();

        return response()->json(['message' => 'Transaction cancelled and rolled back']);
    }

    public function success(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:transactions,order_id'
        ]);

        \App\Models\Transaction::where('order_id', $request->order_id)
            ->update(['status' => 'success']);

        return response()->json(['message' => 'Transaction success']);
    }

    public function checkoutCV(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string',
            'price' => 'required|numeric',
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'foto' => 'required|image|max:10240', // 10MB max
            'alamat' => 'required|string',
            'tentang_anda' => 'required|string',
            'pendidikan' => 'required|string',
            'skills' => 'required|string', // JSON array
        ]);

        // SECURITY: Validate price from database
        $service = \App\Models\Service::where('name', $request->service_name)->first();

        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        $price = $service->price;

        // Set Midtrans config
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $orderId = 'DYANAF-CV-' . Str::upper(Str::random(6)) . '-' . time();

        // Handle file uploads
        $fotoPath = null;
        $sertifikatPath = null;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('cv-photos', 'public');
        }

        if ($request->hasFile('sertifikat_file')) {
            $sertifikatPath = $request->file('sertifikat_file')->store('cv-sertifikat', 'public');
        }

        // Split name for Midtrans
        $names = explode(' ', $request->nama_lengkap, 2);
        $firstName = $names[0];
        $lastName = isset($names[1]) ? $names[1] : '';

        // Collect CV data
        $cvData = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'tentang_anda' => $request->tentang_anda,
            'pendidikan' => $request->pendidikan,
            'pengalaman_kerja' => $request->pengalaman_kerja,
            'sertifikat_text' => $request->sertifikat_text,
            'sertifikat_file' => $sertifikatPath,
            'foto' => $fotoPath,
            'skills' => $request->skills, // JSON string
            'hobby' => $request->hobby,
            'pertanyaan_lainnya' => $request->pertanyaan_lainnya,
        ];

        // Create initial transaction record
        $transaction = \App\Models\Transaction::create([
            'order_id' => $orderId,
            'customer_name' => $request->nama_lengkap,
            'service_name' => $request->service_name,
            'amount' => $price,
            'status' => 'pending',
            'phone' => $request->phone,
        ]);

        // Create CV order record with relation to transaction
        $cvData['transaction_id'] = $transaction->id;
        $cvOrder = \App\Models\CvOrder::create($cvData);

        // Dynamic payment methods based on Device
        $isMobile = preg_match('/(android|iphone|ipad|mobile)/i', $request->header('User-Agent'));

        $enabledPayments = [
            'qris',
            'credit_card',
            'bca_va',
            'bni_va',
            'bri_va',
            'permata_va',
            'cimb_va',
            'other_va',
            'shopeepay',
            'indomaret',
            'alfamart'
        ];

        // Add GoPay only for mobile
        if ($isMobile) {
            array_unshift($enabledPayments, 'gopay');
        } else {
            array_unshift($enabledPayments, 'qris');
            $enabledPayments = array_values(array_unique($enabledPayments));
        }

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $price,
            ],
            'item_details' => [
                [
                    'id' => Str::slug($request->service_name),
                    'price' => $price,
                    'quantity' => 1,
                    'name' => substr($request->service_name, 0, 50),
                ]
            ],
            'customer_details' => [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $request->email,
                'phone' => $request->phone,
            ],
            'enabled_payments' => $enabledPayments,
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            $transaction->update(['snap_token' => $snapToken]);

            return response()->json([
                'snap_token' => $snapToken,
                'order_id' => $orderId
            ]);
        } catch (\Exception $e) {
            // Delete uploaded files if transaction fails
            if ($fotoPath) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($fotoPath);
            }
            if ($sertifikatPath) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($sertifikatPath);
            }
            $transaction->delete();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
