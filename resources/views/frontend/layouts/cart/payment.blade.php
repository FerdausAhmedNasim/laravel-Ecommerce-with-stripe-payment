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
                <td><img src="{{ asset('uploads/products/' . $item['image']) }}" width="60"></td>
                <td>{{ $item['name'] }}</td>
                <td>${{ number_format($item['price'], 2) }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
            </tr>
            @php $total += $item['price'] * $item['quantity']; @endphp
        @endforeach
    </tbody>
</table>

<h4>Total: ${{ number_format($total, 2) }}</h4>

<form action="{{ route('checkout') }}" method="POST" id="checkout-form">
    @csrf
    <button type="submit" id="checkout-btn" class="btn btn-success btn-lg">
        Proceed to Payment
    </button>
</form>

<script>
document.getElementById('checkout-btn').addEventListener('click', function() {
    this.disabled = true;
    this.innerText = 'Processing...';
    document.getElementById('checkout-form').submit();
});
</script>

@endsection
