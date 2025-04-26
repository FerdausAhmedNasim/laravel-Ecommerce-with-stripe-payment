<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
        // সব অর্ডার ফেচ এবং দেখানো
        public function index()
        {
            $orders = Order::all(); // সব ডেটা নিচ্ছি
            return view('backend.orders.index', compact('orders'));
        }
    
        // স্ট্যাটাস আপডেট করা
        public function updateStatus(Request $request, $id)
        {
            $order = Order::findOrFail($id);
            $order->status = $request->status;
            $order->save();
    
            return redirect()->back()->with('success', 'Status updated successfully!');
        }
}
