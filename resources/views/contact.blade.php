@extends('layouts.app')
@section('content')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover" style="background-image:url(assets/images/header/1.png)">
    <div class="container">
        <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
            <h1>Contact Us</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->
<!-- ===============>> Contact section start here <<================= -->
<div class="contact padding-top padding-bottom">
    <div class="container">
        <div class="contact__wrapper">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="contact__info">
                        <h3>Contact Details</h3>

                        <div class="contact__details">
                            <div class="contact__item">
                                <div class="contact__item-inner">
                                    <div class="contact__item-thumb">
                                        <span><img src="assets/images/contact/1.png" alt="contact-icon" class="dark"></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <span>
                                            Emergency call
                                        </span>
                                        <p>
                                            (603) 555-0123
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__item">
                                <div class="contact__item-inner">
                                    <div class="contact__item-thumb">
                                        <span><img src="assets/images/contact/2.png" alt="contact-icon" class="dark"></span>
                                    </div>
                                    <div class="contact__item-content">
                                        <span>
                                            General communication
                                        </span>
                                        <p>
                                            info@tork.com
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__address">
                                <div class="contact__address-item">
                                    <h4>Store Address</h4>
                                    <p>3517 W. Gray St. Utica, Pennsylvania 57867</p>
                                </div>

                                <div class="contact__address-item">
                                    <h4>Social links</h4>
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form">
                        <div class="contact__form-title">
                            <h2>Feel free to contact us</h2>
                        </div>
                        <form action="/" data-aos="fade-left" data-aos-duration="1000">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input class="form-control form-control--style2" type="text" id="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control form-control--style2" type="email" id="email" placeholder="Email here">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="textarea" class="form-label">Message</label>
                                        <textarea cols="30" rows="5" class="form-control form-control--style2" id="textarea" placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4">Submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact__shape">
        <span class="contact__shape-item contact__shape-item--1"><img src="assets/images/contact/3.png"
                alt="shape-icon"></span>
    </div>
</div>
<!-- ===============>> Contact section start here <<================= -->
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