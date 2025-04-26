<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StripeController extends Controller
{
    public function payment(Request $request)
    {
        $cart = session()->get('cart', []);
        return view('frontend.layouts.cart.payment', compact('cart'));
    }

    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $cart = session()->get('cart', []);
        $lineItems = [];

        $userId = Auth::id();
        $orderCode = 'ORD-' . strtoupper(Str::random(8));

        foreach ($cart as $id => $item) {
            // ✅ Save order to DB
            Order::create([
                'user_id' => $userId,
                'order_code' => $orderCode,
                'image' => $item['image'],
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total' => $item['price'] * $item['quantity'],
                'status' => 'Pending',
            ]);

            // Stripe line items
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $item['name'],
                    ],
                    'unit_amount' => $item['price'] * 100,
                ],
                'quantity' => $item['quantity'],
            ];
        }

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        // 🧹 Clear cart after successful payment
        session()->forget('cart');
             // ✅ Show success view
             return view('frontend.layouts.cart.success');
    }

    public function cancel(Request $request)
    {
        return '❌ Payment Cancelled';
    }
}
