<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/font-awesome.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/css//font/flaticon.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/owl.theme.default.min.css">
        <!-- Main Menu CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/meanmenu.min.css">
        <!-- Nivo Slider CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/select2.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/style.css">

        <!-- no slider CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/js/vendor/nouislider.min.css">

        <!--custom css style-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/custom_style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/style2.css">


        <!-- Modernizr Js -->
        <script src="<?php echo base_url(); ?>assets/theme2/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>assets/theme/js/vendors/modernizr.js"></script>

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.css">

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme2/angular/angular.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <style>
        .preloadimage{
            background: black;
            top: 28%;
            position: absolute;
            height:100px; 

            margin-left: -90px;
        }
    </style>

    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    <!--    <div id="preloader">
            <center>
                <img class="preloadimage  " src="<?php echo base_url() . 'assets/theme2/img/preloader.gif' ?>" alt="logo" >
            </center>
        </div>-->
    <!-- Preloader End Here -->
    <body ng-app="App">
        <div class="wrapper-area" ng-controller="ShopController">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <!-- Add your site or application content here -->
            <!-- Header Area Start Here -->



            <script>


                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo site_url(); ?>";
                var imageurlg = "<?php echo imageserver; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;</script>

            <style>
                .ownmenu .dropdown.megamenu .dropdown-menu li:last-child{
                    margin-bottom: 20px;
                }

                .ownmenu .dropdown.megamenu .dropdown-menu li a{
                    line-height: 25px;
                }
                .account-wishlist ul li a {
                    font-size: 12px;
                }
            </style>



            <!-- Header Area Start Here -->
            <header>
                <div class="header-area-style3" id="sticker">
                    <div class="header-top">
                        <div class="header-top-inner-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <div class="header-contact">
                                            <ul>
                                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+(852) 2756 5611">+(852) 2756 5611</a></li>
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> mahamarthk@gmail.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="account-wishlist">
                                            <ul>
                                                <li><a href="login-registration.html"><i class="fa fa-lock" aria-hidden="true"></i> Account</a></li>
                                                <li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> USD</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-top-inner-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="logo-area">
                                            <a href="index.html"><img class="img-responsive mainsitelogo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" ></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="search-area">
                                            <div class="input-group" id="adv-search">
                                                <input type="text" class="form-control" placeholder="Search Product" />
                                                <div class="input-group-btn">
                                                    <div class="btn-group" role="group">

                                                        <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <ul class="header-cart-area">
                                            <li>
                                                <div class="cart-area maincartarea">
                                                    <a href="#" class="cartheadericon">
                                                        <font>My Cart</font>
                                                        <i class="fa fa-shopping-cart"></i><span>2</span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <div class="cart-single-product">
                                                                <div class="media">
                                                                    <div class="pull-left cart-product-img">
                                                                        <a href="#">
                                                                            <img class="img-responsive" alt="product" src="img/best-seller/4.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body cart-content">
                                                                        <ul>
                                                                            <li>
                                                                                <h2><a href="#">Product Title Here</a></h2>
                                                                                <h3><span>Code:</span> STPT600</h3>
                                                                            </li>
                                                                            <li>
                                                                                <p>X 1</p>
                                                                            </li>
                                                                            <li>
                                                                                <p>$49</p>
                                                                            </li>
                                                                            <li>
                                                                                <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="cart-single-product">
                                                                <div class="media">
                                                                    <div class="pull-left cart-product-img">
                                                                        <a href="#">
                                                                            <img class="img-responsive" alt="product" src="img/best-seller/5.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body cart-content">
                                                                        <ul>
                                                                            <li>
                                                                                <h2><a href="#">Product Title Here</a></h2>
                                                                                <h3><span>Code:</span> STPT460</h3>
                                                                            </li>
                                                                            <li>
                                                                                <p>X 1</p>
                                                                            </li>
                                                                            <li>
                                                                                <p>$75</p>
                                                                            </li>
                                                                            <li>
                                                                                <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span><span>Sub Total</span></span><span>$124</span>
                                                            <span><span>Discount</span></span><span>$30</span>
                                                            <span><span>Vat(20%)</span></span><span>$18.8</span>
                                                            <span><span>Sub Total</span></span><span>$112.8</span>
                                                        </li>
                                                        <li>
                                                            <ul class="checkout">
                                                                <li><a href="cart.html" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                                <li><a href="check-out.html" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <div class="logo-area">
                                        <a href="index.html"><img class="img-responsive stickheadersitelogo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a>
                                    </div>
                                    <div class="category-menu-area" id="category-menu-area">
                                        <h2 class="category-menu-title"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>Categories</h2>
                                        <ul class="category-menu-area-inner">
                                            <li><a href="shop1.html"><i class="flaticon-dress-1"></i>Women<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Women Sub Title 1</a></li>
                                                    <li><a href="#">Women Sub Title 2</a></li>
                                                    <li><a href="#">Women Sub Title 3</a></li>
                                                    <li><a href="#">Women Sub Title 4</a></li>
                                                    <li><a href="#">Women Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop2.html"><i class="flaticon-polo"></i>Men<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Men Sub Title 1</a></li>
                                                    <li><a href="#">Men Sub Title 2</a></li>
                                                    <li><a href="#">Men Sub Title 3</a></li>
                                                    <li><a href="#">Men Sub Title 4</a></li>
                                                    <li><a href="#">Men Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop3.html"><i class="flaticon-plug"></i>Electornics<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Electornics Sub Title 1</a></li>
                                                    <li><a href="#">Electornics Sub Title 2</a></li>
                                                    <li><a href="#">Electornics Sub Title 3</a></li>
                                                    <li><a href="#">Electornics Sub Title 4</a></li>
                                                    <li><a href="#">Electornics Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop4.html"><i class="flaticon-necklace"></i>Jewellery<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Jewellery Sub Title 1</a></li>
                                                    <li><a href="#">Jewellery Sub Title 2</a></li>
                                                    <li><a href="#">Jewellery Sub Title 3</a></li>
                                                    <li><a href="#">Jewellery Sub Title 4</a></li>
                                                    <li><a href="#">Jewellery Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop5.html"><i class="flaticon-screen"></i>Computer<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Computer Sub Title 1</a></li>
                                                    <li><a href="#">Computer Sub Title 2</a></li>
                                                    <li><a href="#">Computer Sub Title 3</a></li>
                                                    <li><a href="#">Computer Sub Title 4</a></li>
                                                    <li><a href="#">Computer Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop6.html"><i class="flaticon-headphones"></i>Head Phone<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Head Phone Sub Title 1</a></li>
                                                    <li><a href="#">Head Phone Sub Title 2</a></li>
                                                    <li><a href="#">Head Phone Sub Title 3</a></li>
                                                    <li><a href="#">Head Phone Sub Title 4</a></li>
                                                    <li><a href="#">Head Phone Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop1.html"><i class="flaticon-transport"></i>Toys<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Toys Sub Title 1</a></li>
                                                    <li><a href="#">Toys Sub Title 2</a></li>
                                                    <li><a href="#">Toys Sub Title 3</a></li>
                                                    <li><a href="#">Toys Sub Title 4</a></li>
                                                    <li><a href="#">Toys Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop1.html"><i class="flaticon-fashion"></i>Shoes<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Shoes Sub Title 1</a></li>
                                                    <li><a href="#">Shoes Sub Title 2</a></li>
                                                    <li><a href="#">Shoes Sub Title 3</a></li>
                                                    <li><a href="#">Shoes Sub Title 4</a></li>
                                                    <li><a href="#">Shoes Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop1.html"><i class="flaticon-dress"></i>Kid’s Wear<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Kid’s Wear Sub Title 1</a></li>
                                                    <li><a href="#">Kid’s Wear Sub Title 2</a></li>
                                                    <li><a href="#">Kid’s Wear Sub Title 3</a></li>
                                                    <li><a href="#">Kid’s Wear Sub Title 4</a></li>
                                                    <li><a href="#">Kid’s Wear Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop1.html"><i class="flaticon-technology"></i>Mobile<span><i class="flaticon-next"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Mobile Sub Title 1</a></li>
                                                    <li><a href="#">Mobile Sub Title 2</a></li>
                                                    <li><a href="#">Mobile Sub Title 3</a></li>
                                                    <li><a href="#">Mobile Sub Title 4</a></li>
                                                    <li><a href="#">Mobile Sub Title 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <div class="main-menu-area hideonstickheader">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="#">Home22</a>
                                                    <ul>
                                                        <li><a href="index.html">Home 1</a></li>
                                                        <li><a href="index2.html">Home 2</a></li>
                                                        <li><a class="active" href="index3.html">Home 3</a></li>
                                                        <li><a href="index4.html">Home 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="single-blog.html">Single Blog</a></li>
                                                        <li class="has-child-menu"><a href="#">Demo</a>
                                                            <ul class="thired-level">
                                                                <li><a href="#">Demo 1</a></li>
                                                                <li><a href="#">Demo 2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a>
                                                    <ul class="mega-menu-area">
                                                        <li>
                                                            <a href="index.html">Home 1</a>
                                                            <a href="index2.html">Home 2</a>
                                                            <a href="index3.html">Home 3</a>
                                                            <a href="index4.html">Home 4</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-blog.html">Single Blog 2</a>
                                                            <a href="portfolio1.html">Portfolio 1</a>
                                                            <a href="portfolio2.html">Portfolio 2</a>
                                                            <a href="shop1.html">Shop 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop2.html">Shop 2</a>
                                                            <a href="shop3.html">Shop 3</a>
                                                            <a href="shop4.html">Shop 4</a>
                                                            <a href="shop5.html">Shop 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop6.html">Shop 6</a>
                                                            <a href="shop7.html">Shop 7</a>
                                                            <a href="product-details1.html">Product Details 1</a>
                                                            <a href="product-details2.html">Product Details 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="login-registration.html">Login Registration</a>
                                                            <a href="my-account.html">My Account</a>
                                                            <a href="wishlist.html">Wishlist</a>
                                                            <a href="cart.html">Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="check-out.html">Check Out</a>
                                                            <a href="order-history.html">Order History</a>
                                                            <a href="order-details.html">Order Details</a>
                                                            <a href="404.html">404</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="showonstickheader">
                                        <div class="col-lg-10 col-md-7 col-sm-7 col-xs-12">
                                            <div class="search-area">
                                                <div class="input-group" id="adv-search">
                                                    <input type="text" class="form-control" placeholder="Search Product" />
                                                    <div class="input-group-btn">
                                                        <div class="btn-group" role="group">

                                                            <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <ul class="header-cart-area">
                                                <li>
                                                    <div class="cart-area">
                                                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                                        <ul>
                                                            <li>
                                                                <div class="cart-single-product">
                                                                    <div class="media">
                                                                        <div class="pull-left cart-product-img">
                                                                            <a href="#">
                                                                                <img class="img-responsive" alt="product" src="img/best-seller/4.jpg">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body cart-content">
                                                                            <ul>
                                                                                <li>
                                                                                    <h2><a href="#">Product Title Here</a></h2>
                                                                                    <h3><span>Code:</span> STPT600</h3>
                                                                                </li>
                                                                                <li>
                                                                                    <p>X 1</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>$49</p>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cart-single-product">
                                                                    <div class="media">
                                                                        <div class="pull-left cart-product-img">
                                                                            <a href="#">
                                                                                <img class="img-responsive" alt="product" src="img/best-seller/5.jpg">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body cart-content">
                                                                            <ul>
                                                                                <li>
                                                                                    <h2><a href="#">Product Title Here</a></h2>
                                                                                    <h3><span>Code:</span> STPT460</h3>
                                                                                </li>
                                                                                <li>
                                                                                    <p>X 1</p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>$75</p>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <span><span>Sub Total</span></span><span>$124</span>
                                                                <span><span>Discount</span></span><span>$30</span>
                                                                <span><span>Vat(20%)</span></span><span>$18.8</span>
                                                                <span><span>Sub Total</span></span><span>$112.8</span>
                                                            </li>
                                                            <li>
                                                                <ul class="checkout">
                                                                    <li><a href="cart.html" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                                    <li><a href="check-out.html" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area Start Here -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mobile-menu">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li class="active"><a href="#">Home</a>
                                                        <ul>
                                                            <li><a href="index.html">Home 1</a></li>
                                                            <li><a href="index2.html">Home 2</a></li>
                                                            <li><a href="index3.html">Home 3</a></li>
                                                            <li><a href="index4.html">Home 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="#">Blog</a>
                                                        <ul>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="single-blog.html">Single Blog</a></li>
                                                            <li class="has-child-menu"><a href="#">Demo</a>
                                                                <ul class="thired-level">
                                                                    <li><a href="#">Demo 1</a></li>
                                                                    <li><a href="#">Demo 2</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Portfolio</a>
                                                        <ul>
                                                            <li><a href="portfolio1.html">Portfolio 1</a></li>
                                                            <li><a href="portfolio2.html">Portfolio 2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="shop1.html">Shop 1</a></li>
                                                            <li><a href="shop2.html">Shop 2</a></li>
                                                            <li><a href="shop3.html">Shop 3</a></li>
                                                            <li><a href="shop4.html">Shop 4</a></li>
                                                            <li><a href="shop5.html">Shop 5</a></li>
                                                            <li><a href="shop6.html">Shop 6</a></li>
                                                            <li><a href="shop7.html">Shop 7</a></li>
                                                            <li><a href="product-details1.html">Shop Details 1</a></li>
                                                            <li><a href="product-details2.html">Shop Details 2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="login-registration.html">Login Registration</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="check-out.html">Check Out</a></li>
                                                            <li><a href="order-history.html">Order History</a></li>
                                                            <li><a href="order-details.html">Order Details</a></li>
                                                            <li><a href="404.html">404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area End Here -->
                    </div>
                </div>
            </header>




            <!--mobile model-->


            <!--search_open-->
            <div class="modal fade model_search" id="searchModel" tabindex="-1" role="dialog" aria-labelledby="searchModelLabel">
                <div class="modal-dialog" role="document" style="margin-top: 60px;">
                    <div class="modal-content mobile_model_search">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        </div>
                        <div class="modal-body">

                            <form id="top-search-form1" action="<?php echo site_url('Product/ProductSearch'); ?>">                           
                                <input type="text" name="keyword" class="search-input1 typeahead" placeholder="Search...." required="" style="width: 100%">
                                <button type="submit" style="height: 0px;width: 0px;opacity: 0;"></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="mobileModel" tabindex="-1" role="dialog" aria-labelledby="mobileModelLabel">
                <div class="modal-dialog" role="document" style="margin-top: 60px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mobileModelLabel">Total: {{globleCartData.total_price|currency:" "}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="cart-area cart-area1">

                                <ul ng-if="globleCartData.total_quantity">
                                    <li  ng-repeat="product in globleCartData.products">

                                        <div class="cart-single-product">
                                            <div class="media">
                                                <div class="pull-left cart-product-img">
                                                    <a href="#">
                                                        <div class="product_image_back" style="background: url({{product.file_name}});height: 80px;width: 80px;    background-size: cover;"></div>

                                                                    <!--<img class="img-responsive" alt="product" src="{{product.file_name}}">-->
                                                    </a>
                                                </div>
                                                <div class="media-body cart-content">
                                                    <ul>
                                                        <li>
                                                            <h2 style="    white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                width: 250px;"><a href="#" style="">{{product.title}}-{{product.item_name}}</a></h2>
                                                            <h3>                                                                 
                                                                <p>
                                                                    {{product.price|currency:" "}} X {{product.quantity}} 
                                                                </p>
                                                            </h3>
                                                        </li>


                                                        <li>
                                                            <a class="trash" href="#." ng-click="removeCart(product.product_id)"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <ul class="checkout">
                                            <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout1"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                            <li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout1"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>




                            </div>
                        </div>
                        <!--                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>-->
                    </div>
                </div>
            </div>

