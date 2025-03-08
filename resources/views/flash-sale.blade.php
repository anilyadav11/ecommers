@extends('layouts.app')
@section('content')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
        <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Flash Sales</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Flash Sales</li>
                </ol>
            </nav>

            <div class="countdown countdown--style2">
                <div class="countdown__block">
                    <span id="days" class="countdown__number">00</span>
                    <span class="countdown__label">Days</span>
                </div>
                <div class="countdown__block">
                    <span id="hours" class="countdown__number">00</span>
                    <span class="countdown__label">Hours</span>
                </div>
                <div class="countdown__block">
                    <span id="minutes" class="countdown__number">00</span>
                    <span class="countdown__label">Mins</span>
                </div>
                <div class="countdown__block">
                    <span id="seconds" class="countdown__number">00</span>
                    <span class="countdown__label">Secs</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->





<!-- ===============>>Flash Product section start here <<================= -->
<section class="product padding-top padding-bottom ">
    <div class="container">
        <div class="product__wrapper">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center g-3">
                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -24%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/1.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Avocado Bliss</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 5.0 <span>(35 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$12.00 /</h4>
                                        <span><del>$50.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner active">
                            <div class="product__item-badge">
                                -20%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/2.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Pure Green Bliss</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.7 <span>(67 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$18.00 /</h4>
                                        <span><del>$50.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline active">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -25%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/3.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Berry Burst Pack</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 5.0 <span>(28 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$21.00 /</h4>
                                        <span><del>$32.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge product__item-badge--new">
                                New
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/4.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Spicy Green Chilli</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.5 <span>(34 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$8.00 /</h4>
                                        <span><del>$15.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -20%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/5.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Green Crunch</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.0 <span>(21 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$15.00 /</h4>
                                        <span><del>$20.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -15%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/6.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Bloom Delight</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.5 <span>(26 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$16.00 /</h4>
                                        <span><del>$20.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -22%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/7.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Vibrant Pepper</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.9 <span>(25 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$6.00 /</h4>
                                        <span><del>$10.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -25%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/8.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Crisp Refresher</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.6 <span>(22 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$21.00 /</h4>
                                        <span><del>$30.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -12%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/9.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Crisp Leaf Luxury</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 5.0 <span>(24 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$24.00 /</h4>
                                        <span><del>$50.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product__item product__item--style2">
                        <div class="product__item-inner">
                            <div class="product__item-badge">
                                -20%
                            </div>
                            <div class="product__item-thumb">
                                <img src="assets/images/product/popular/10.png" alt="Popular Product Images">
                            </div>
                            <div class="product__item-content">
                                <h5><a href="product-details.html">Fresh Pumpkin</a></h5>
                                <div class="product__item-rating">
                                    <i class="fa-solid fa-star"></i> 4.7 <span>(87 Reviews)</span>
                                </div>
                                <div class="product__item-footer">
                                    <div class="product__item-price">
                                        <h4>$31.00 /</h4>
                                        <span><del>$50.00</del></span>
                                    </div>
                                    <div class="product__item-action">
                                        <a class="trk-btn trk-btn--outline ">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-btn text-center mt-5">
                <a href="shop.html" class="about__btn trk-btn trk-btn--primary">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- ===============>>Flash Product section end here <<================= -->





<!-- ===============>>Product Listing section start here <<================= -->
<section class="product-listing padding-bottom padding-top section-bg">
    <div class="container">
        <div class="product-listing__wrapper" data-aos="fade-up" data-aos-duration="1000">
            <div class="row align-items-center justify-content-center g-5 g-lg-4">
                <div class="col-lg-4 col-md-6">
                    <div class="row g-3 ">
                        <h2>Top selling</h2>
                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/1.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Fresh Berries</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 5.0 <span>(14 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$28.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 ">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-badge">
                                        -24%
                                    </div>
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/2.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Grass-Feed Beef</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 4.5 <span>(123 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$36.00 /</h4>
                                                <span><del>$48.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/3.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Whole Grain Bread</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 4.5 <span>(34 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$22.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="row g-3">
                        <h2>Trending products</h2>
                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/4.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Organic Avocado</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 4.5 <span>(34 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$39.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-badge product__item-badge--new">
                                        New
                                    </div>
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/5.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Fresh Strawberries</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 4.5 <span>(34 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$30.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/6.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Free-Range Eggs</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 5.0 <span>(04 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$26.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-3">
                        <h2>New products</h2>
                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-badge">
                                        -24%
                                    </div>
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/7.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Greek Yogurt</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 4.5 <span>(143 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$31.00 /</h4>
                                                <span><del>$50.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/8.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Virgin Olive Oil</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 5.0 <span>(82 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$23.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="product__item product__item--style3">
                                <div class="product__item-inner">
                                    <div class="product__item-thumb">
                                        <img src="assets/images/product/listing/9.png" alt="Product Images">
                                    </div>
                                    <div class="product__item-content">
                                        <h5><a href="product-details.html">Artisanal Cheese</a></h5>
                                        <div class="product__item-rating">
                                            <i class="fa-solid fa-star"></i> 4.8 <span>(12 Reviews)</span>
                                        </div>
                                        <div class="product__item-footer">
                                            <div class="product__item-price">
                                                <h4>$38.00</h4>
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
    </div>
</section>
<!-- ===============>>Product Listing section end here <<================= -->





<!-- ===============>> cta section start here <<================= -->
<section class="newsletter padding-top padding-bottom  bg-color">
    <div class="container">
        <div class="newsletter__wrapper">
            <div class="newsletter__content">
                <h2 class="newsletter__title">Subscribe To The Newsletter</h2>
                <p class="newsletter__description">Join our subscribers list to get the latest news, updates and special offers delivered directly to your inbox.</p>
                <form class="newsletter__form">
                    <input type="email" class="newsletter__input" placeholder="Your Email Address" required>
                    <button type="submit" class="trk-btn trk-btn--primary">Subscribe</button>
                </form>
            </div>
            <div class="newsletter__image">
                <!-- image include in css -->
            </div>
        </div>
    </div>
</section>
<!-- ===============>> cta section start here <<================= -->



<!-- ===============>> Feature bar section start here <<================= -->
<div class="feature-bar border-top">
    <div class="container">
        <div class="row py-3 g-5 g-lg-4 justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
                <div class="feature-bar__item d-flex align-items-center">
                    <img src="assets/images/feature/bar/1.png" alt="delivery car">
                    <div class="feature-bar__text ms-4">
                        <h3 class="feature-bar__title fs-6 fw-bold mb-0">Fast Delivery</h3>
                        <p class="feature-bar__description fs-7 mb-0">Minimum order $40</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
                <div class="feature-bar__item d-flex align-items-center">
                    <img src="assets/images/feature/bar/2.png" alt="support image">
                    <div class="feature-bar__text ms-4">
                        <h3 class="feature-bar__title fs-6 fw-bold mb-0">24/7 Support</h3>
                        <p class="feature-bar__description fs-7 mb-0">Contact us 24 Hours</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
                <div class="feature-bar__item d-flex align-items-center">
                    <img src="assets/images/feature/bar/3.png" alt="pay security">
                    <div class="feature-bar__text ms-4">
                        <h3 class="feature-bar__title fs-6 fw-bold mb-0">Pay Security</h3>
                        <p class="feature-bar__description fs-7 mb-0">100% Secure Payment</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
                <div class="feature-bar__item d-flex align-items-center">
                    <img src="assets/images/feature/bar/4.png" alt="money returns">
                    <div class="feature-bar__text ms-4">
                        <h3 class="feature-bar__title fs-6 fw-bold mb-0">Easy Returns</h3>
                        <p class="feature-bar__description fs-7 mb-0">Within 30 Days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============>> Feature bar section end here <<================= -->

@endsection