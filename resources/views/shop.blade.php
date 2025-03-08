@extends('layouts.app')
@section('content')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
        <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Shop</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">shop</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->





<!-- ===============>>Flash Product section start here <<================= -->
<section class="product padding-top padding-bottom ">
    <div class="container">
        <div class="product__wrapper">
            <div class="row justify-content-center flex-lg-row-reverse g-5">


                <div class="col-lg-9">
                    <div class="row row-cols-xl-4  row-cols-md-3 row-cols-2 row-cols-1 justify-content-center g-3">
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
                    </div>
                    <div class="product-btn text-center mt-5">
                        <a href="#" class="about__btn trk-btn trk-btn--primary">View More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-8 col-md-6">
                    <div class="product__sidebar">
                        <div class="sidebar-filter sidebar-filter--brand sidebar-filter--collapsible mb-40">
                            <div class="sidebar-filter__header">
                                <h3 class="sidebar-filter__title">Brand</h3>
                                <button class="sidebar-filter__toggle btn btn-link p-0" aria-expanded="true" aria-controls="brand-filter-content">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </button>
                            </div>
                            <div id="brand-filter-content" class="sidebar-filter__content">
                                <div class="sidebar-filter__search">
                                    <div class="input-group">
                                        <input type="text" class="form-control sidebar-filter__search-input" placeholder="Search">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="sidebar-filter__list list-unstyled">
                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" checked id="fruits-check">
                                                <label class="form-check-label d-block" for="fruits-check">Fruits</label>
                                            </div>
                                            <span class="sidebar-filter__count">(34)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="fish-check">
                                                <label class="form-check-label d-block" for="fish-check">Fish</label>
                                            </div>
                                            <span class="sidebar-filter__count">(24)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="vegetables-check">
                                                <label class="form-check-label d-block" for="vegetables-check">Vegetables</label>
                                            </div>
                                            <span class="sidebar-filter__count">(80)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="meats-check">
                                                <label class="form-check-label d-block" for="meats-check">Meats</label>
                                            </div>
                                            <span class="sidebar-filter__count">(05)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="oil-check">
                                                <label class="form-check-label d-block" for="oil-check">Oil</label>
                                            </div>
                                            <span class="sidebar-filter__count">(12)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="milk-check">
                                                <label class="form-check-label d-block" for="milk-check">Milk</label>
                                            </div>
                                            <span class="sidebar-filter__count">(12)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="frozen-check">
                                                <label class="form-check-label d-block" for="frozen-check">Frozen</label>
                                            </div>
                                            <span class="sidebar-filter__count">(64)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-filter sidebar-filter--color sidebar-filter--collapsible mb-40">
                            <div class="sidebar-filter__header">
                                <h3 class="sidebar-filter__title">Color</h3>
                                <button class="sidebar-filter__toggle btn btn-link p-0" aria-expanded="true" aria-controls="brand-filter-content">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </button>
                            </div>
                            <div id="brand-filter-content1" class="sidebar-filter__content">
                                <ul class="sidebar-filter__list list-unstyled">
                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" checked id="red-check">
                                                <label class="form-check-label d-block" for="red-check">Red</label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="green-check">
                                                <label class="form-check-label d-block" for="green-check">Green</label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="yellow-check">
                                                <label class="form-check-label d-block" for="yellow-check">Yellow</label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="blue-check">
                                                <label class="form-check-label d-block" for="blue-check">Blue</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="sidebar-filter sidebar-filter--brand sidebar-filter--collapsible">
                            <div class="sidebar-filter__header">
                                <h3 class="sidebar-filter__title">Discount</h3>
                                <button class="sidebar-filter__toggle btn btn-link p-0" aria-expanded="true" aria-controls="brand-filter-content">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </button>
                            </div>
                            <div id="brand-filter-content2" class="sidebar-filter__content">
                                <ul class="sidebar-filter__list list-unstyled">
                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" checked id="d1-check">
                                                <label class="form-check-label d-block" for="d1-check">Up to 5%</label>
                                            </div>
                                            <span class="sidebar-filter__count">(34)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="d2-check">
                                                <label class="form-check-label d-block" for="d3-check">05% - 20%</label>
                                            </div>
                                            <span class="sidebar-filter__count">(24)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="d3-check">
                                                <label class="form-check-label d-block" for="d3-check">20% - 30%</label>
                                            </div>
                                            <span class="sidebar-filter__count">(8)</span>
                                        </div>
                                    </li>

                                    <li class="sidebar-filter__item">
                                        <div class="form-check">
                                            <div class="check-group flex-grow-1">
                                                <input class="form-check-input" type="checkbox" id="d4-check">
                                                <label class="form-check-label d-block" for="d4-check">30% - 50%</label>
                                            </div>
                                            <span class="sidebar-filter__count">(05)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===============>>Flash Product section end here <<================= -->




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