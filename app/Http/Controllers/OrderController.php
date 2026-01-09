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

        // Only include payment channels that are activated in Production
        $enabledPayments = [
            'bca_va',
            'bni_va',
            'bri_va',
        ];

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

        // Find the transaction first
        $transaction = \App\Models\Transaction::where('order_id', $request->order_id)->first();

        if ($transaction) {
            // Find and delete related CvOrder if exists
            $cvOrder = \App\Models\CvOrder::where('transaction_id', $transaction->id)->first();
            if ($cvOrder) {
                // Delete uploaded files
                if ($cvOrder->foto) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($cvOrder->foto);
                }
                if ($cvOrder->sertifikat_file) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($cvOrder->sertifikat_file);
                }
                // Delete the CvOrder
                $cvOrder->delete();
            }

            // Delete the transaction
            $transaction->delete();
        }

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
        \Illuminate\Support\Facades\Log::info('checkoutCV initiated', $request->all());
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

        $names = explode(' ', $request->nama_lengkap, 2);
        $firstName = $names[0];
        $lastName = isset($names[1]) ? $names[1] : '';

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
            'skills' => $request->skills,
            'hobby' => $request->hobby,
            'pertanyaan_lainnya' => $request->pertanyaan_lainnya,
        ];

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

        // Only include payment channels that are activated in Production
        $enabledPayments = [
            'bca_va',
            'bni_va',
            'bri_va',
        ];

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
            // Even if Snap token fails, we still have the records
            // Return order_id so custom payment UI can be used
            \Illuminate\Support\Facades\Log::warning('Snap token failed for CV order, using custom payment', [
                'order_id' => $orderId,
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'order_id' => $orderId,
                'snap_token' => null,
                'message' => 'Menggunakan metode pembayaran alternatif'
            ]);
        }
    }

    public function coreCharge(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'service_name' => 'required|string',
            'price' => 'required|numeric',
            'customer_name' => 'required|string',
            'phone' => 'required|string',
        ]);

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderId = 'DYANAF-' . time() . '-' . rand(100, 999);
        $price = $request->price;
        $paymentMethod = $request->payment_method;

        // Create transaction record
        $transaction = \App\Models\Transaction::create([
            'order_id' => $orderId,
            'service_name' => $request->service_name,
            'amount' => $price, // Changed from 'price' to 'amount' to match schema
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'status' => 'pending',
            'payment_type' => $paymentMethod,
        ]);

        try {
            $params = [];

            // QRIS
            if ($paymentMethod === 'qris') {
                $params = [
                    'payment_type' => 'qris',
                    'transaction_details' => [
                        'order_id' => $orderId,
                        'gross_amount' => $price,
                    ],
                    'qris' => [
                        'acquirer' => 'gopay',
                    ],
                    'customer_details' => [
                        'first_name' => $request->customer_name,
                        'email' => 'customer@dyanaf-store.com',
                        'phone' => $request->phone,
                    ],
                ];

                $charge = \Midtrans\CoreApi::charge($params);

                $qrCodeUrl = null;
                if (isset($charge->actions) && is_array($charge->actions)) {
                    foreach ($charge->actions as $action) {
                        if ($action->name == 'generate-qr-code') {
                            $qrCodeUrl = $action->url;
                            break;
                        }
                    }
                }

                return response()->json([
                    'success' => true,
                    'order_id' => $orderId,
                    'payment_method' => 'qris',
                    'qr_code_url' => $qrCodeUrl,
                    'amount' => $price,
                    'expiry' => '15 menit',
                ]);
            }

            // Virtual Account - BCA
            if ($paymentMethod === 'bca_va') {
                $params = [
                    'payment_type' => 'bank_transfer',
                    'transaction_details' => ['order_id' => $orderId, 'gross_amount' => $price],
                    'bank_transfer' => ['bank' => 'bca'],
                    'customer_details' => ['first_name' => $request->customer_name, 'email' => 'customer@dyanaf-store.com', 'phone' => $request->phone],
                ];
                $charge = \Midtrans\CoreApi::charge($params);
                $vaNumber = $charge->va_numbers[0]->va_number ?? null;
                return response()->json(['success' => true, 'order_id' => $orderId, 'payment_method' => 'bca_va', 'bank' => 'BCA', 'va_number' => $vaNumber, 'amount' => $price]);
            }

            // Virtual Account - BNI
            if ($paymentMethod === 'bni_va') {
                $params = [
                    'payment_type' => 'bank_transfer',
                    'transaction_details' => ['order_id' => $orderId, 'gross_amount' => $price],
                    'bank_transfer' => ['bank' => 'bni'],
                    'customer_details' => ['first_name' => $request->customer_name, 'email' => 'customer@dyanaf-store.com', 'phone' => $request->phone],
                ];
                $charge = \Midtrans\CoreApi::charge($params);
                $vaNumber = $charge->va_numbers[0]->va_number ?? null;
                return response()->json(['success' => true, 'order_id' => $orderId, 'payment_method' => 'bni_va', 'bank' => 'BNI', 'va_number' => $vaNumber, 'amount' => $price]);
            }

            // Virtual Account - BRI
            if ($paymentMethod === 'bri_va') {
                $params = [
                    'payment_type' => 'bank_transfer',
                    'transaction_details' => ['order_id' => $orderId, 'gross_amount' => $price],
                    'bank_transfer' => ['bank' => 'bri'],
                    'customer_details' => ['first_name' => $request->customer_name, 'email' => 'customer@dyanaf-store.com', 'phone' => $request->phone],
                ];
                $charge = \Midtrans\CoreApi::charge($params);
                $vaNumber = $charge->va_numbers[0]->va_number ?? null;
                return response()->json(['success' => true, 'order_id' => $orderId, 'payment_method' => 'bri_va', 'bank' => 'BRI', 'va_number' => $vaNumber, 'amount' => $price]);
            }

            // Virtual Account - Mandiri (E-Channel)
            if ($paymentMethod === 'mandiri_va') {
                $params = [
                    'payment_type' => 'echannel',
                    'transaction_details' => ['order_id' => $orderId, 'gross_amount' => $price],
                    'echannel' => [
                        'bill_info1' => 'Payment For:',
                        'bill_info2' => 'Order ' . $orderId
                    ],
                    'customer_details' => ['first_name' => $request->customer_name, 'email' => 'customer@dyanaf-store.com', 'phone' => $request->phone],
                ];
                $charge = \Midtrans\CoreApi::charge($params);

                $billKey = $charge->bill_key ?? null;
                $billerCode = $charge->biller_code ?? null;
                $vaDisplay = $billerCode . ' ' . $billKey;

                return response()->json(['success' => true, 'order_id' => $orderId, 'payment_method' => 'mandiri_va', 'bank' => 'MANDIRI', 'va_number' => $vaDisplay, 'amount' => $price]);
            }

            return response()->json(['success' => false, 'error' => 'Method not implemented'], 400);
        } catch (\Exception $e) {
            $transaction->delete();
            return response()->json(['success' => false, 'error' => 'API Error: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Check Payment Status
     */
    public function checkStatus($orderId)
    {
        $transaction = \App\Models\Transaction::where('order_id', $orderId)->first();

        if (!$transaction) {
            return response()->json(['error' => 'Transaction not found'], 404);
        }

        // Check status from Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');

        try {
            $status = \Midtrans\Transaction::status($orderId);

            // Update local database
            $transactionStatus = is_object($status) && isset($status->transaction_status)
                ? $status->transaction_status
                : 'pending';

            if ($transactionStatus === 'settlement' || $transactionStatus === 'capture') {
                $transaction->update(['status' => 'success']);
            } elseif ($transactionStatus === 'pending') {
                $transaction->update(['status' => 'pending']);
            } elseif ($transactionStatus === 'deny' || $transactionStatus === 'expire' || $transactionStatus === 'cancel') {
                $transaction->update(['status' => 'failed']);
            }

            return response()->json([
                'order_id' => $orderId,
                'status' => $transactionStatus,
                'fraud_status' => $status->fraud_status ?? null,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'order_id' => $orderId,
                'status' => $transaction->status,
                'error' => $e->getMessage()
            ]);
        }
    }
}
