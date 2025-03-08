@php
$settings=App\Models\setting::first();
@endphp
<!-- ===============>> footer start here <<================= -->
<footer class="footer ">
    <div class="footer__top">
        <div class="container">
            <div class="footer__top-wrapper">
                <div class="row gy-5 gx-2">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="footer__about">
                            <a href="index.html" class="footer__about-logo"><img src="{{asset('uploads\setting/'.$settings->footerlogo)}}"
                                    alt="Logo" style="width: 90px; height: 90px; object-fit: contain;"></a>
                            <p class="footer__about-moto ">We are ensuring a delightful shopping experience for every customer.</p>
                            <div class="footer__social">
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style2"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="#" class="social__link social__link--style2"><i class="fa-brands fa-linkedin-in"></i></a>
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
                    <div class="col-xl-2 col-md-3 col-sm-6 col-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h4>Support</h4>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"> <a href="contact.html">Help</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="contact.html">Hotline</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="contact.html">Contact</a> </li>
                                    <li class="footer__linklist-item"> <a href="#">Chat now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-6 col-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h4>Account</h4>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"> <a href="login.html">Sign In</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="cart.html">View Cart</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="wishlist.html">My Wishlist</a></li>
                                    <li class="footer__linklist-item"> <a href="invoice.html">Shipping Details</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h4>Quick Links</h4>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"> <a href="#">Customer Support</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="#">Delivery Details</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="#">Terms & Conditions</a> </li>
                                    <li class="footer__linklist-item"> <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-md-6 col-sm-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h4>Company</h4>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"> <a href="flash-sale.html">Flash Sale</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="blogs.html">Blogs</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="shop.html">All Brands</a> </li>
                                    <li class="footer__linklist-item"> <a href="#">Coupons</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-wrapper">
                <div class="footer__bottom-payment">
                    <ul class="payment">
                        <li class="payment__item">
                            <img src="{{asset('assets/images/payment/1.png')}}" alt="payment method logo">
                        </li>
                        <li class="payment__item">
                            <img src="assets/images/payment/2.png" alt="payment method logo">
                        </li>
                        <li class="payment__item">
                            <img src="{{asset('assets/images/payment/3.png')}}" alt="payment method logo">
                        </li>
                        <li class="payment__item">
                            <img src="{{asset('assets/images/payment/4.png')}}" alt="payment method logo">
                        </li>
                        <li class="payment__item">
                            <img src="{{asset('assets/images/payment/5.png')}}" alt="payment method logo">
                        </li>
                    </ul>
                </div>
                <div class="footer__bottom-copyright">
                    <p class=" mb-0">Copyright© 2024 <a href="https://themeforest.net/user/thetork" target="_blank">thetork</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__shape">
        <span class="footer__shape-item footer__shape-item--1"><img src="{{asset('assets/images/banner/home1/leaf.png')}}"
                alt="shape icon"></span>

        <span class="footer__shape-item footer__shape-item--2"><img src="{{asset('assets/images/banner/home1/tomato.png')}}"
                alt="shape icon"></span>

        <span class="footer__shape-item footer__shape-item--3"><img src="{{asset('assets/images/banner/home1/chilli.png')}}"
                alt="shape icon"></span>
    </div>
</footer>
<!-- ===============>> footer end here <<================= -->



<!-- ===============>> scrollToTop start here <<================= -->
<a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->


<!-- vendor plugins -->

<script src="{{asset('assets/js/metismenujs.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/fslightbox.js')}}"></script>
<script src="{{asset('assets/js/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/js/trk-menu.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>