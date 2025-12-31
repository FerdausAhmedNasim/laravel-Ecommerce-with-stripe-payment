<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Helpers\OrderHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class StripeController extends Controller
{
    public function payment()
    {
        $cart = session()->get('cart', []);
        return view('frontend.layouts.cart.payment', compact('cart'));
    }

    public function checkout(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Login first');
        }

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return back()->with('error','Cart is empty');
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $userId = Auth::id();
        $lineItems = [];

        DB::beginTransaction();

        try {
            $orderCode = OrderHelper::generateUniqueOrderCode();

            foreach ($cart as $item) {
                Order::create([
                    'user_id'    => $userId,
                    'order_code' => $orderCode,
                    'image'      => $item['image'],
                    'name'       => $item['name'],
                    'price'      => $item['price'],
                    'quantity'   => $item['quantity'],
                    'total'      => $item['price'] * $item['quantity'],
                    'status'     => 'Pending',
                ]);

                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => ['name' => $item['name']],
                        'unit_amount' => $item['price'] * 100,
                    ],
                    'quantity' => $item['quantity'],
                ];
            }

            $checkoutSession = StripeSession::create([
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('payment.success'),
                'cancel_url'  => route('payment.cancel'),
            ]);

            DB::commit();

            return redirect($checkoutSession->url);

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Stripe Error: '.$e->getMessage());
        }
    }

    public function success()
    {
        session()->forget('cart');
        return view('frontend.layouts.cart.success');
    }

    public function cancel()
    {
        return 'Payment Cancelled';
    }
}
