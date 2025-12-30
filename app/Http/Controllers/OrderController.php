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
        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        Config::$isSanitized = config('midtrans.is_sanitized');
        // Set 3DS transaction for credit card to true
        Config::$is3ds = config('midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => 'DYANAF-' . Str::upper(Str::random(6)) . '-' . time(),
                'gross_amount' => (int) $request->price,
            ],
            'item_details' => [
                [
                    'id' => Str::slug($request->service_name),
                    'price' => (int) $request->price,
                    'quantity' => 1,
                    'name' => substr($request->service_name, 0, 50), // Midtrans limit
                ]
            ],
            'customer_details' => [
                'first_name' => 'Customer',
                'email' => 'customer@example.com', // Placeholder, idealnya dari input user
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
