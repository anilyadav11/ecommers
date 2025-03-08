@extends('layouts.app')
@section('content')
<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover" style="background-image:url(assets/images/header/product.png)">
    <div class="container">
        <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Product Details</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->

<!-- ===============>> Product Detail Section Start <<================= -->
<div class="product-detail padding-top padding-bottom">
    <div class="container">

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="product-detail__image">
                    <img src="{{asset('uploads/'.$product->image)}}" alt="Product Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-detail__content">
                    <h2>{{$product->name}}</h2>
                    <p class="product-detail__price">{{$product->price}}</p>
                    <p class="product-detail__description">{{$product->description}}</p>
                    <div class="product-detail__quantity">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" value="1" min="1" class="form-control w-25">
                    </div>
                    @auth
                    <button id="addToCart"
                        class="trk-btn trk-btn--primary mt-4"
                        data-id="{{ $product->id }}"
                        data-name="{{ $product->name }}"
                        data-price="{{ $product->price }}">
                        Add to Cart
                    </button>
                    @else
                    <a href="{{ route('user.login') }}" class="trk-btn trk-btn--primary mt-4">
                        Login to Add to Cart
                    </a>
                    @endauth


                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============>> Product Detail Section End <<================= -->

<!-- ===============>> Related Products Section Start <<================= -->
<div class="related-products padding-top padding-bottom">
    <div class="container">
        <h3 class="text-center">Related Products</h3>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <img src="assets/images/products/product2.png" alt="Product Image" class="img-fluid">
                    <h4>Product Name</h4>
                    <p>$39.99</p>
                    <button class="trk-btn trk-btn--primary">View Details</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <img src="assets/images/products/product3.png" alt="Product Image" class="img-fluid">
                    <h4>Product Name</h4>
                    <p>$29.99</p>
                    <button class="trk-btn trk-btn--primary">View Details</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============>> Related Products Section End <<================= -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        let addToCartButton = document.getElementById("addToCart");

        if (addToCartButton) {
            addToCartButton.addEventListener("click", function() {
                let productId = this.dataset.id;
                let quantity = parseInt(document.getElementById("quantity").value) || 1;

                fetch("{{ route('cart.add') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            product_id: productId,
                            quantity: quantity
                        }),
                    })
                    .then(response => {
                        if (response.redirected) {
                            window.location.href = response.url; // Redirect to login if not authenticated
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.message) {
                            alert(data.message);
                        }
                    })
                    .catch(error => console.error("Error:", error));
            });
        }
    });
</script>




@endsection