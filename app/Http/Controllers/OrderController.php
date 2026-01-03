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
        $request->validate([
            'service_name' => 'required|string',
            'price' => 'required|numeric',
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20' // Phone is now required
        ]);

        // SECURITY: Validate price from database (not frontend) to prevent manipulation
        $service = \App\Models\Service::where('name', $request->service_name)->first();

        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        // Use the database price, NOT the frontend price
        $price = $service->price;

        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        Config::$isSanitized = config('midtrans.is_sanitized');
        // Set 3DS transaction for credit card to true
        Config::$is3ds = config('midtrans.is_3ds');

        $orderId = 'DYANAF-' . Str::upper(Str::random(6)) . '-' . time();

        // Split name for Midtrans
        $names = explode(' ', $request->customer_name, 2);
        $firstName = $names[0];
        $lastName = isset($names[1]) ? $names[1] : '';

        // Create initial transaction record
        $transaction = \App\Models\Transaction::create([
            'order_id' => $orderId,
            'customer_name' => $request->customer_name,
            'service_name' => $request->service_name,
            'amount' => $price,
            'status' => 'pending',
            'phone' => $request->phone,
        ]);

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
                    'name' => substr($request->service_name, 0, 50), // Midtrans limit
                ]
            ],
            'customer_details' => [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => 'customer@dyanaf-store.com', // Placeholder email as per request to remove email input
                'phone' => $request->phone,
            ],
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

        // "Rollback" - delete the transaction or mark as cancelled/failed
        // Requirement says "role back data tidak jadi masuk" so we delete it.
        // Or we can soft delete, but detailed instruction says "role back data tidak jadi masuk".
        // Deleting seems to fit the user's "backtrack" mental model best.

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
