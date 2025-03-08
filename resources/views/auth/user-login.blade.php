@php
$settings=App\Models\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="all">
    <title>{{$settings->title}}</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/bootstrap.min.css')}}">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/blue.css')}}">
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/rateit.css')}}">
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/bootstrap-select.min.css')}}">
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{asset('userlogin/assets/css/font-awesome.css')}}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <header class="header-style-1">
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-phone"></i> &nbsp; +91 {{$settings->phone}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> &nbsp; {{$settings->email}}</a></li>
                        </ul>
                    </div>
                    <div class="offer-text">Welcome to {{$settings->title}}</div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <div class="logo">
                            <a href="">
                                <img src="{{asset('uploads/setting/'.$settings->logo)}}" alt="logo" style="margin-top:-5px; width: 100px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6"> </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 text-right"></div>
                </div>
            </div>
        </div>

        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">About us
                                        </a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="#">About Company</a></li>
                                                                <li><a href="#">Vision &amp; Mission</a></li>
                                                                <li><a href="#">Director Message</a></li>
                                                                <li><a href="legal.html">Legals</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="products.html">Products</a> </li>
                                    <li> <a href="#">Business Opportunity</a> </li>
                                    <li> <a href="bankers.html">Bankers</a> </li>
                                    <li> <a href="login.html">Login</a> </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Gallery</a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="#">Photo Gallery</a></li>
                                                                <li><a href="video-gallery.html">Video Gallery</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="contact.html">Contact us</a> </li>
                                    <li class="dropdown  navbar-right special-menu">
                                        <a href="{{route('user.register')}}">Sign up Now </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ============================================== HEADER : END ============================================== -->

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4>User Login</h4>
                        <p>Please enter your user id &amp; password for login...</p>
                        <form class="register-form outer-top-xs" role="form" method="post" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">User Email</label>
                                <input type="email" name="email" class="form-control unicase-form-control text-input" id="memberid" name="memberid">
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                <input type="password" name="password" class="form-control unicase-form-control text-input" id="pwd" name="pwd">
                            </div>

                            <div class="radio outer-xs">
                                <button type="submit" class="btn-upper btn btn-primary btn2 checkout-page-button">Submit</button>
                                <!-- <a href="#" class="forgot-password pull-right">Forgot your Password?</a>  -->
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4>Franchise Login</h4>
                        <p>Please enter your franchise id &amp; password for login...</p>
                        <form name="loginform" id="loginform" class="register-form outer-top-xs" role="form" method="post" action="ShoppingPoint/Spvalidation.aspx">
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Franchise ID</label>
                                <input type="text" class="form-control unicase-form-control text-input" id="spUserid" name="spUserid">
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                <input type="password" class="form-control unicase-form-control text-input" id="sppassword" name="sppassword">
                            </div>

                            <div class="radio outer-xs">
                                <button type="submit" class="btn-upper btn btn-primary btn2 checkout-page-button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="footer color-bg" style="margin-top:30px;">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="module-heading">
                            <h4 class="module-title">Contact Us</h4>
                        </div>

                        <div class="module-body">
                            <ul class="toggle-footer">
                                <li class="media">
                                    <div class="pull-left">
                                        <span class="icon fa-stack fa-lg">
                                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p><strong>SWARNAGOWRI FOODS AND BEVERAGES PVT. LTD.</strong><br><br>

                                            <strong>Head Office:-</strong><br>
                                            <strong>Flat/Door/Block No.:</strong> Site No 43, Sy No 7/2<br>

                                            <strong>Village/Town:</strong> Kachohalli Village Ground Floor, <br>
                                            <strong>Building:</strong> Homeneeds Cart Pvt Ltd<br>

                                            <strong>Village/Town:</strong> Dasanapura Hobli<br>

                                            <strong>City:</strong> Bangalore<br>

                                            <strong>Pin:</strong> 562130<br>

                                            <strong>State:</strong> Karnataka<br>

                                            <strong>District:</strong> Bangalore North (Urban)

                                        </p>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="pull-left">
                                        <span class="icon fa-stack fa-lg">
                                            <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p>+91 {{$settings->phone}}</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="pull-left">
                                        <span class="icon fa-stack fa-lg">
                                            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body"> <span><a href="#">{{$settings->email}}</a></span> </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="module-heading">
                            <h4 class="module-title">Navigations</h4>
                        </div>

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li><a href="#" title="">Home</a></li>
                                <li><a href="#" title="">Business Opportunity</a></li>
                                <li><a href="#" title="">Login</a></li>
                                <li><a href="#" title="">Registration</a></li>
                                <li><a href="#" title="">Media</a></li>
                                <li><a href="#" title="">Contact us </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Latest News</h4>
                        </div>

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <iframe src="" style="width:100%; height:240px; border-radius:6px;  border:none;"></iframe>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">About Company</h4>
                        </div>

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li><a href="#">Code of Conduct</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Promoter Policy</a></li>
                                <li><a href="refund-policy.html">Buyback Policy</a></li>
                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-padding social">
                    <ul class="link">
                        <li class="tw pull-left"><a href="https://x.com/i/flow/login?redirect_after_login=%2FSwarnagoriHNC" target="_blank" title="Twitter"></a></li>
                        <li class="linkedin pull-left"><a href="https://www.linkedin.com/in/swarnagowri-hnc-731880338/" target="_blank" title="Linkedin"></a></li>
                        <li class="youtube pull-left"><a href="https://www.youtube.com/channel/UC2h0D9ACAQ-q_RAbYu2TJAA" target="_blank" title="Youtube"></a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 no-padding"></div>
            </div>
        </div>
    </footer>

    <script src="{{asset('userlogin/assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/echo.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{asset('userlogin/userlogin/assets/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/jquery.rateit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('userlogin/assets/js/lightbox.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('userlogin/assets/js/scripts.js')}}"></script>
</body>

</html>