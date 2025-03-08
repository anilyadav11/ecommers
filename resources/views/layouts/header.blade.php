<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@php
$settings=\App\Models\setting::first();
@endphp

<head>
    <title>{{$settings->title}} </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name" content="Torganic | Organic Food eCommerce HTML Template">
    <meta name="admin" content="thetork">
    <meta name="keywords" content="Torganic, Crypto, Forex, and Stocks Trading Business">
    <meta name="description" content="Torganic is a premium, fully responsive HTML template designed for organic food eCommerce sites. Featuring clean, modern design and powerful functionality, it’s perfect for creating a professional online store. Boost your sales with Torganic's user-friendly layout, SEO-optimized code, and seamless shopping experience.">

    <!-- OG meta data -->
    <meta property="og:title" content="Torganic | Organic Food eCommerce HTML Template">
    <meta property="og:site_name" content=Torganic>
    <meta property="og:url" content="https://thetork.com/demos/html/Torganic/">
    <meta property="og:description" content="Welcome to Torganic – Organic Food eCommerce HTML Template.

    Discover Torganic, a meticulously designed HTML template tailored for organic food and eco-friendly eCommerce websites. Whether you're building an online store for fresh produce, natural products, or sustainable goods, Torganic offers a clean, modern design with powerful functionality to make your site stand out.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og.png">



    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">


    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="{{asset('assets/images/logo/preloader.png')}}" alt="preloader icon" style="width: 150px; height: 150px; object-fit: contain;">
    </div>
    <!-- ===============>> Preloader end here <<================= -->




    <!-- ===============>> Header section start here <<================= -->
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__brand">
                    <a href="index.html"><img src="{{asset('uploads/setting/'.$settings->logo)}}" alt="logo" style="width: 90px; height: 90px; object-fit: contain;"></a>
                </div>

                <!-- section navbar Menu -->


                <div class="header__navbar">
                    <div class="header__overlay"></div>
                    <nav class="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i class="fa-solid fa-arrow-left"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <ul class="menu-section">
                            <li class="menu-item-has-children">
                                <a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                                <div class="submenu">
                                    <ul>
                                        <li>
                                            <a href="index.html">Home One</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Two</a>
                                        </li>

                                        <li>
                                            <a href="index-3.html">Home Three</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{url('flashsale')}}">Flash Sale</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages <i class="fa-solid fa-angle-down"></i></a>
                                <div class="submenu megamenu">
                                    <h6 class="megamenu__title mb-3">Megamenu</h6>
                                    <div class="row row-cols-1 row-cols-xl-3 g-3 g-xl-4">
                                        <div class="col">
                                            <div class="megamenu__card">
                                                <h6 class="megamenu__header">
                                                    Shop Layouts </h6>
                                                <ul class="megamenu__item-list">
                                                    <li>
                                                        <a href="flash-sale.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Flash
                                                            Sale</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Shop Left
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Shop
                                                            Right
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="chackout.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu__card">
                                                <h6 class="megamenu__header">
                                                    Other Pages
                                                </h6>
                                                <ul class="megamenu__item-list">
                                                    <li>
                                                        <a href="faq.html"><span><i class="fa-brands fa-cloudsmith"></i></span>FAQ
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="invoice.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Invoice</a>
                                                    </li>

                                                    <li>
                                                        <a href="login.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Login</a>
                                                    </li>

                                                    <li>
                                                        <a href="forgot-pass.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Reset
                                                            password</a>
                                                    </li>

                                                    <li>
                                                        <a href="order-tracking.html"><span><i class="fa-brands fa-cloudsmith"></i></span>Order
                                                            Tracking</a>
                                                    </li>

                                                    <li>
                                                        <a href="404.html"><span><i class="fa-brands fa-cloudsmith"></i></span>404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu__card">
                                                <h6 class="megamenu__header">
                                                    Blogs types</h6>
                                                <ul class="megamenu__item-list">
                                                    <li>
                                                        <a href="blogs.html"><span><i class="fa-brands fa-cloudsmith"></i></span> Blogs</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html"><span><i class="fa-brands fa-cloudsmith"></i></span>
                                                            Blog Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-left-sidebar.html"><span><i class="fa-brands fa-cloudsmith"></i></span>
                                                            Blog Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-details.html"><span><i class="fa-brands fa-cloudsmith"></i></span> Blog
                                                            Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{url('shop')}}">Shop</a>
                            </li>

                            <li><a href="{{url('contact')}}">Contact</a></li>

                        </ul>
                    </nav>
                </div>

                <div class="header__action">
                    <a class="header__action-btn d-none d-xl-grid" href="{{route('user.login')}}"><i class="fa-regular fa-user"></i></a>
                    <a class="header__action-btn d-none d-xl-grid" href="wishlist.html"><i class="fa-regular fa-heart"></i></a>

                    <a class="header__action-btn d-none d-xl-grid" href="{{route('cart.view')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="cart-icon">
                            <path
                                d="M4.92383 18.2228C4.92383 18.6943 5.11832 19.1464 5.46451 19.4798C5.81071 19.8132 6.28025 20.0005 6.76985 20.0005C7.25944 20.0005 7.72899 19.8132 8.07518 19.4798C8.42138 19.1464 8.61587 18.6943 8.61587 18.2228C8.61587 17.7513 8.42138 17.2991 8.07518 16.9658C7.72899 16.6324 7.25944 16.4451 6.76985 16.4451C6.28025 16.4451 5.81071 16.6324 5.46451 16.9658C5.11832 17.2991 4.92383 17.7513 4.92383 18.2228Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M15.0762 18.2228C15.0762 18.6943 15.2707 19.1464 15.6169 19.4798C15.9631 19.8132 16.4326 20.0005 16.9222 20.0005C17.4118 20.0005 17.8813 19.8132 18.2275 19.4798C18.5737 19.1464 18.7682 18.6943 18.7682 18.2228C18.7682 17.7513 18.5737 17.2991 18.2275 16.9658C17.8813 16.6324 17.4118 16.4451 16.9222 16.4451C16.4326 16.4451 15.9631 16.6324 15.6169 16.9658C15.2707 17.2991 15.0762 17.7513 15.0762 18.2228Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.923 16.4446H6.76985V4.00049H4.92383" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.76953 5.77881L19.6917 6.66767L18.7687 12.8897H6.76953" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="cart.html" class="header__action-btn menu-icon d-xl-none"><i
                            class="fa-solid fa-cart-shopping"></i></a>
                    <button id="trk-search-icon" class="menu-icon search-icon header__action-btn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="trk-search">
                        <div class="trk-search__inner">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here" aria-label="trk Search Bar" aria-describedby="trk-search">
                                <button type="submit" class="trk-search__btn" id="trk-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="trk-search__overlay"></div>
                </div>
            </div>

        </div>
    </header>
    <!-- ===============>> Header section end here <<================= -->