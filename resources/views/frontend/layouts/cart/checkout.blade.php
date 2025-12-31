@extends('frontend.layouts.cart.layout')
@section('content')

<h3>Checkout Summary</h3>

<table class="table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0; @endphp
        @foreach($cart as $item)
            <tr>
                <td>
                    <img src="{{ asset('uploads/products/' . $item['image']) }}" alt="{{ $item['name'] }}" width="60">
                </td>
                <td>{{ $item['name'] }}</td>
                <td>${{ number_format($item['price'], 2) }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
            </tr>
            @php $total += $item['price'] * $item['quantity']; @endphp
        @endforeach
    </tbody>
</table>

<h4 class="mb-4">Total: ${{ number_format($total, 2) }}</h4>

<form action="{{ route('checkout.session') }}" method="POST">
    @csrf
    <button type="submit" 
            class="btn btn-success btn-lg"
            onclick="this.disabled=true; this.innerHTML='<i class=\'fas fa-spinner fa-spin\'></i> Processing...'; this.form.submit();">
        <i class="fas fa-lock"></i> Proceed to Secure Payment
    </button>
    <p class="text-muted mt-2">
        <small>You will be redirected to Stripe's secure payment page</small>
    </p>
</form>

@endsection