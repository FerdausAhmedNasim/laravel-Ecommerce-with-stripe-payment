@extends('frontend.app')
@section('title','Home Ecommerce')
@section('content')
        <!-- Banner -->

        <div class="banner">
            <div class="banner_background"
                style="background-image:url({{ asset('frontend/images/banner_background.jpg') }})"></div>
            <div class="container fill_height">
                <div class="row fill_height">
                    <div class="banner_product_image"><img src="{{ asset('frontend/images/banner_product.png') }}"
                            alt="">
                    </div>
                    <div class="col-lg-5 offset-lg-4 fill_height">
                        <div class="banner_content">
                            <h1 class="banner_text">new era of smartphones</h1>
                            <div class="banner_price"><span>$530</span>$460</div>
                            <div class="banner_product_name">Apple Iphone 6s</div>
                            {{-- <div class="button banner_button"><a href="#">Shop Now</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Characteristics -->

        <div class="characteristics">
            <div class="container">
                <div class="row">

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{ asset('frontend/images/char_1.png') }}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{ asset('frontend/images/char_2.png') }}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{ asset('frontend/images/char_3.png') }}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="{{ asset('frontend/images/char_4.png') }}" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- product list --}}
     


<style type="text/css">
    .dropdown {
        float: right;
        padding-right: 30px;
    }

    .dropdown .dropdown-menu {
        padding: 20px;
        top: 30px !important;
        width: 350px !important;
        left: 0px !important;
        box-shadow: 0px 5px 30px black;
    }

    .dropdown-menu:before {
        content: " ";
        position: absolute;
        top: -20px;
        right: 50px;
        border: 10px solid transparent;
        border-bottom-color: #fff;
    }

    .fs-8 {
        font-size: 13px;
    }

    table {
        width: 100%;
        margin-top: 20px;
    }
    
    /* Highlight animation for cart */
    @keyframes highlightCart {
        0% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(0, 123, 255, 0); }
        100% { box-shadow: 0 0 0 0 rgba(0, 123, 255, 0); }
    }
    
    .cart-highlight {
        animation: highlightCart 1.5s ease-in-out;
    }
</style>

<div class="container">
    {{-- Navbar --}}
    <div class="row navbar-light bg-light pt-2 pb-2">
        <div class="col-lg-10">
            <h3 class="mt-2">Add to Cart for shopping</h3>
        </div>
        <div class="col-md-2 text-right main-section" id="cartSection">
            <div class="dropdown">
                @php
                    $cart = session('cart');
                    $totalQuantity = 0;
                    $total = 0;
                    if ($cart) {
                        foreach($cart as $item){
                            $totalQuantity += $item['quantity'];
                            $total += $item['price'] * $item['quantity'];
                        }
                    }
                @endphp
            
                <button type="button" class="btn btn-info dropdown-toggle mt-1" data-bs-toggle="dropdown" id="cartDropdownButton">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Cart <span class="badge badge-pill badge-danger" id="cartBadge">{{ $totalQuantity }}</span>
                </button>
            
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-danger">{{ $totalQuantity }}</span>
                        </div>
            
                        <div class="col-md-6 text-end">
                            <p><strong>Total: <span class="text-info">${{ $total }}</span></strong></p>
                        </div>
                    </div>
            
                    @if($cart)
                        @foreach($cart as $id => $details)
                            <div class="row cart-detail pb-3 pt-2">
                                <div class="col-lg-4 col-sm-4 col-4">
                                    <img src="{{ asset('uploads/products/' . $details['image']) }}" class="img-fluid" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p class="mb-0">{{ $details['name'] }}</p>
                                    <span class="fs-8 text-info"> Price: ${{ $details['price'] }}</span><br/>
                                    <span class="fs-8 fw-lighter"> Quantity: {{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
            
                    <div class="text-center">
                        <a href="{{ route('cart') }}" class="btn btn-info">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Product List --}}
    <div class="row mt-4">
        <div class="col-md-12">
            <h4 class="mb-3">Product List</h4>

            @if(isset($products) && count($products) > 0)
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>   
                            <th>ID</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Add to cart</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->description }}</td>
                                <td>${{ $product->price }}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{ asset('uploads/products/' . $product->image) }}" width="100">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <p class="btn-holder">
                                        <a href="{{ route('add.to.cart', $product->id) }}" 
                                           class="btn btn-warning btn-block text-center add-to-cart-btn" 
                                           role="button"
                                           data-product-id="{{ $product->id }}">
                                           Add to cart
                                        </a>
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            @else
                <div class="alert alert-warning">No products found.</div>
            @endif
        </div>
    </div>
</div>




            <!-- Banner -->

            <div class="banner_2">
                <div class="banner_2_background"
                    style="background-image:url({{ asset('frontend/images/banner_2_background.jpg') }})">
                </div>
                <div class="banner_2_container">
                    <div class="banner_2_dots"></div>
                    <!-- Banner 2 Slider -->

                    <div class="owl-carousel owl-theme banner_2_slider">

                        <!-- Banner 2 Slider Item -->
                        <div class="owl-item">
                            <div class="banner_2_item">
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col-lg-4 col-md-6 fill_height">
                                            <div class="banner_2_content">
                                                <div class="banner_2_category">Laptops</div>
                                                <div class="banner_2_title">MacBook Air 13</div>
                                                <div class="banner_2_text">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit. Maecenas fermentum laoreet.</div>
                                                <div class="rating_r rating_r_4 banner_2_rating">
                                                    <i></i><i></i><i></i><i></i><i></i>
                                                </div>
                                                <div class="button banner_2_button"><a href="#">Explore</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6 fill_height">
                                            <div class="banner_2_image_container">
                                                <div class="banner_2_image"><img
                                                        src="{{ asset('frontend/images/banner_2_product.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Banner 2 Slider Item -->
                        <div class="owl-item">
                            <div class="banner_2_item">
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col-lg-4 col-md-6 fill_height">
                                            <div class="banner_2_content">
                                                <div class="banner_2_category">Laptops</div>
                                                <div class="banner_2_title">MacBook Air 13</div>
                                                <div class="banner_2_text">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit. Maecenas fermentum laoreet.</div>
                                                <div class="rating_r rating_r_4 banner_2_rating">
                                                    <i></i><i></i><i></i><i></i><i></i>
                                                </div>
                                                <div class="button banner_2_button"><a href="#">Explore</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6 fill_height">
                                            <div class="banner_2_image_container">
                                                <div class="banner_2_image"><img
                                                        src="{{ asset('frontend/images/banner_2_product.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Banner 2 Slider Item -->
                        <div class="owl-item">
                            <div class="banner_2_item">
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col-lg-4 col-md-6 fill_height">
                                            <div class="banner_2_content">
                                                <div class="banner_2_category">Laptops</div>
                                                <div class="banner_2_title">MacBook Air 13</div>
                                                <div class="banner_2_text">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing elit. Maecenas fermentum laoreet.</div>
                                                <div class="rating_r rating_r_4 banner_2_rating">
                                                    <i></i><i></i><i></i><i></i><i></i>
                                                </div>
                                                <div class="button banner_2_button"><a href="#">Explore</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6 fill_height">
                                            <div class="banner_2_image_container">
                                                <div class="banner_2_image"><img
                                                        src="{{ asset('frontend/images/banner_2_product.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <!-- Brands -->

            <div class="brands">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="brands_slider_container">

                                <!-- Brands Slider -->

                                <div class="owl-carousel owl-theme brands_slider">

                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_1.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_2.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_3.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_4.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_5.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_6.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_7.jpg') }}" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="{{ asset('frontend/images/brands_8.jpg') }}" alt=""></div>
                                    </div>

                                </div>

                                <!-- Brands Slider Navigation -->
                                <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Newsletter -->

            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                                <div class="newsletter_title_container">
                                    <div class="newsletter_icon"><img src="{{ asset('frontend/images/send.png') }}"
                                            alt="">
                                    </div>
                                    <div class="newsletter_title">Sign up for Newsletter</div>
                                    <div class="newsletter_text">
                                        <p>...and receive %20 coupon for first shopping.</p>
                                    </div>
                                </div>
                                <div class="newsletter_content clearfix">
                                    <form action="#" class="newsletter_form">
                                        <input type="email" class="newsletter_input" required="required"
                                            placeholder="Enter your email address">
                                        <button class="newsletter_button">Subscribe</button>
                                    </form>
                                    <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check URL for cart scroll parameter
        const urlParams = new URLSearchParams(window.location.search);
        const scrollToCart = urlParams.get('scrollToCart');
        
        // Also check for session storage flag (set when Add to cart is clicked)
        const shouldScroll = sessionStorage.getItem('scrollToCart');
        
        if (scrollToCart === 'true' || shouldScroll === 'true') {
            // Remove the flag from session storage
            sessionStorage.removeItem('scrollToCart');
            
            // Delay to ensure cart is updated
            setTimeout(function() {
                const cartSection = document.getElementById('cartSection');
                if (cartSection) {
                    // Scroll to cart section smoothly
                    cartSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Add highlight animation
                    cartSection.classList.add('cart-highlight');
                    
                    // Open the cart dropdown
                    const cartButton = document.getElementById('cartDropdownButton');
                    if (cartButton) {
                        const dropdown = new bootstrap.Dropdown(cartButton);
                        dropdown.show();
                        
                        // Auto-hide dropdown after 3 seconds
                        setTimeout(() => {
                            dropdown.hide();
                        }, 3000);
                    }
                    
                    // Remove highlight class after animation completes
                    setTimeout(() => {
                        cartSection.classList.remove('cart-highlight');
                    }, 1500);
                }
            }, 500);
        }
        
        // Add click event to all Add to Cart buttons
        const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Store flag in session storage to trigger scroll on page reload
                sessionStorage.setItem('scrollToCart', 'true');
                
                // Optionally, you can add a small delay before navigation
                // to ensure the flag is stored
                setTimeout(() => {
                    // Let the default link behavior continue
                    // The page will reload and check for the flag above
                }, 100);
            });
        });
        
        // Alternative approach: Use AJAX to avoid page reload
        // Uncomment below if you want AJAX functionality
        
        /*
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const productId = this.getAttribute('data-product-id');
                
                // Show loading state
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Adding...';
                this.disabled = true;
                
                // Make AJAX request
                fetch(`{{ url('add-to-cart') }}/${productId}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update cart badge
                        document.getElementById('cartBadge').textContent = data.totalQuantity;
                        
                        // Scroll to cart section
                        const cartSection = document.getElementById('cartSection');
                        cartSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        
                        // Add highlight animation
                        cartSection.classList.add('cart-highlight');
                        
                        // Open the cart dropdown
                        const cartButton = document.getElementById('cartDropdownButton');
                        if (cartButton) {
                            const dropdown = new bootstrap.Dropdown(cartButton);
                            dropdown.show();
                            
                            // Auto-hide dropdown after 3 seconds
                            setTimeout(() => {
                                dropdown.hide();
                            }, 3000);
                        }
                        
                        // Show success message
                        alert('Product added to cart successfully!');
                        
                        // Remove highlight after animation
                        setTimeout(() => {
                            cartSection.classList.remove('cart-highlight');
                        }, 1500);
                    } else {
                        alert('Error adding product to cart: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while adding the product to cart.');
                })
                .finally(() => {
                    // Restore button state
                    this.innerHTML = originalText;
                    this.disabled = false;
                });
            });
        });
        */
    });
</script>
@endsection