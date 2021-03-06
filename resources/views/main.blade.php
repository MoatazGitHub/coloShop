<!DOCTYPE html>
<html lang="en">
<head>
    <title>Colo Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/bootstrap4/bootstrap.min.css') !!}">
    <link href="{!! asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('plugins/OwlCarousel2-2.2.1/animate.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/main_styles.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/responsive.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/custom_styles.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/categories_styles.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/categories_responsive.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/single_styles.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('styles/single_responsive.css') !!}">





</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_300">

        <!-- Top Navigation -->

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top_nav_left">free shipping on all u.s orders over $50</div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="logo_container">
                            <a href={!! url('/'); !!}>colo<span>shop</span></a>
                        </div>
                        <nav class="navbar">
                            <ul class="navbar_menu">

                                <li><a href="{!! url('/products'); !!}">Products</a></li>
                                <li><a href="{!! url('/products/create'); !!}">New</a></li>
                                <li><a href="{!! url('/products_manage'); !!}">Manage</a></li>
                                {{--<li><a href="{!! url('/orders'); !!}">Orders</a></li>--}}


                            </ul>
                            <ul class="navbar_user">
                                <li><a href={!! url('/'); !!}><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                <li><a href={!! url('/'); !!}><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                <li class="checkout">
                                    <a href={!! url('/orders'); !!}>
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                        @if (isset($orders_count))
                                            <span id="checkout_items" class="checkout_items">{{$orders_count}}</span>
                                        @endif

                                    </a>
                                </li>
                            </ul>
                            <div class="hamburger_container">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>


<div id="content">
@section('content')

@show
</div>

<!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Newsletter</h4>
                        <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="post">
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="email" placeholder="Your email" required="required"
                                   data-error="Valid email is required.">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                                    value="Submit">subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <ul class="footer_nav">
                            <li><a href={!! url('/'); !!}>Blog</a></li>
                            <li><a href={!! url('/'); !!}>FAQs</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                        <ul>
                            <li><a href={!! url('/'); !!}><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href={!! url('/'); !!}><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href={!! url('/'); !!}><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href={!! url('/'); !!}><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href={!! url('/'); !!}><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_nav_container">
                        <div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o"
                                                                                                  aria-hidden="true"></i>
                            by <a href={!! url('/'); !!}>Colorlib</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>
<script src="{!! asset('styles/bootstrap4/popper.js') !!}"></script>
<script src="{!! asset('styles/bootstrap4/bootstrap.min.js') !!}"></script>
<script src="{!! asset('plugins/Isotope/isotope.pkgd.min.js') !!}"></script>
<script src="{!! asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}"></script>
<script src="{!! asset('plugins/easing/easing.js') !!}"></script>
<script src="{!! asset('js/custom.js') !!}"></script>
<script src="{!! asset('plugins/easing/easing.js') !!}"></script>
<script src="{!! asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') !!}"></script>
<script src="{!! asset('js/categories_custom.js') !!}"></script>
<script src="{!! asset('js/single_custom.js') !!}"></script>
<script src="{!! asset('js/single_custom.js') !!}"></script>
<script src="{!! asset('node_modules/sweetalert/dist/sweetalert.min.js') !!}"></script>


</body>

</html>
