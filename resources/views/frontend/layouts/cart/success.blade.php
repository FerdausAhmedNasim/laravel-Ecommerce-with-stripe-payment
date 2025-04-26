@extends('frontend.layouts.cart.layout')

@section('content')
    <div class="text-center mt-5">
        <h2 class="text-success">✅ Payment Successful!</h2>
        <p>Your order has been placed successfully. Thank you for shopping with us!</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">Go to Dashboard</a>
    </div>
@endsection