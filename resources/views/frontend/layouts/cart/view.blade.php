@extends('frontend.layouts.cart.layout')
@section('content')

<style>
.products-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.product {
    border: 1px solid #ddd;
    padding: 10px;
    width: 300px;
}
.product img {
    width: 100%;
    height: auto;
}
.description { text-align: left; }
#checkout-button {
    font-size: 18px;
    background-color: red;
    padding: 12px 24px;
    border: none;
    color: #fff;
    cursor: pointer;
}
</style>

<section>
    <div class="products-container">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->name }}">
                <div class="description">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <h5>${{ number_format($product->price, 2) }}</h5>
                </div>
            </div>
        @endforeach
    </div>

    <form action="{{ route('checkout') }}" method="POST">
        @csrf
        <button type="submit" id="checkout-button">Checkout</button>
    </form>
</section>

@endsection
