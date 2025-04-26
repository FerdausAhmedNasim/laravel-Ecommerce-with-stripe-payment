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
                <td>${{ $item['price'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ $item['price'] * $item['quantity'] }}</td>
            </tr>
            @php $total += $item['price'] * $item['quantity']; @endphp
        @endforeach
    </tbody>
</table>

<h4>Total: ${{ $total }}</h4>

<form action="{{ route('checkout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Proceed to Payment</button>
</form>

@endsection
