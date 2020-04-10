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

        <!-- jquery-->
        <script src="<?php echo base_url(); ?>assets/theme2/js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/theme2/js/jquery-ui.js"></script>
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

    <?php
    $this->load->view('layout/menu');
    $this->db->where('parent_id', 0);
    $querymenu = $this->db->get('category');
    $parentmenu = $querymenu->result_array();
    $menucontainer = array();
    foreach ($parentmenu as $key => $value) {
        $this->db->where('parent_id', $value['id']);
        $querymenu2 = $this->db->get('category');
        $parentmenu2 = $querymenu2->result_array();
        $value['children'] = $parentmenu2;
        array_push($menucontainer, $value);
    }
    ?>
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
        <div class="wrapper-area" ng-controller="ShopController" id="ShopController">
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
                        var imageurlg = "<?php echo PRODUCTIMAGELINK; ?>";
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
                                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> sales@maharajamart.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="account-wishlist">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Account</a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
                                                <li><a href="#"><?php echo globle_currency; ?></a></li>
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
                                            <a href="<?php echo site_url("/"); ?>"><img class="img-responsive mainsitelogo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" ></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="search-area">
                                            <div class="input-group" id="adv-search">
                                                <input type="text" class="form-control typeahead" placeholder="Search Product" />
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
                                                        <i class="fa fa-shopping-cart"></i><span>{{globleCartData.total_quantity}}</span>
                                                    </a>
                                                    <ul ng-if="globleCartData.total_quantity" class="">
                                                        <li  ng-repeat="product in globleCartData.products">

                                                            <div class="cart-single-product">
                                                                <div class="media">
                                                                    <div class="pull-left cart-product-img">
                                                                        <a href="#">

                                                                            <img class="img-responsive" alt="product" src="{{product.file_name}}" style="height: 80px;" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body cart-content">
                                                                        <ul>
                                                                            <li>
                                                                                <h2 ><a href="#" style="">{{product.title}}</a></h2>
                                                                                <h3>                                                                 
                                                                                    <p>
                                                                                        {{product.quantity}} X  {{product.price|currency}} 
                                                                                    </p>
                                                                                </h3>
                                                                                <div  class="input-group cart-area-inc input-group-sm searchinputgroup">
                                                                                    <span class="input-group-btn input-group-sm">
                                                                                        <button class="btn btn-default  type="button" ng-click="updateCart(product, 'sub')">-</button>
                                                                                    </span>

                                                                                    <span class="cartquantitysearch"> {{product.quantity}} </span>
                                                                                    <span class="input-group-btn input-group-sm" >
                                                                                        <button class="btn btn-default   incbutton" type="button" ng-click="updateCart(product, 'add')">+</button>
                                                                                    </span>
                                                                                </div>
                                                                            </li>
                                                                            <li>

                                                                            </li>
                                                                            <li>
                                                                                <p></p>
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
                                                            <span><span>Sub Total</span></span><span>{{globleCartData.sub_total_price|currency}}</span>

                                                        </li>
                                                        <li>
                                                            <ul class="checkout">
                                                                <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                                <!--<li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>-->
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
                                        <a href="<?php echo site_url("/"); ?>"><img class="img-responsive stickheadersitelogo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a>
                                    </div>
                                    <div class="category-menu-area" id="category-menu-area">
                                        <h2 class="category-menu-title"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>Categories</h2>
                                        <ul class="category-menu-area-inner">
                                            <?php
                                            foreach ($menucontainer as $key => $value) {
                                                $children = $value['children'];
                                                ?>
                                                <li><a href="<?php echo site_url('Product/productList/1/' . $value['id']); ?>">
                                                        <?php echo $value['category_name']; ?>
                                                        <?php if ($children) { ?>
                                                            <span><i class="flaticon-next"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            foreach ($children as $ckey => $cvalue) {
                                                                ?>
                                                                <li><a href="<?php echo site_url('Product/productList/1/' . $cvalue['id']); ?>"><?php echo $cvalue['category_name']; ?></a></li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        </a><?php
                                                    }
                                                    ?>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <div class="main-menu-area hideonstickheader">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="#">Offers</a></li>
                                                <li><a href="http://maharajatickets.com/" target="_blank">Movie Tickets</a></li>
                                                <li><a href="https://www.woodlandshk.com/"  target="_blank">Woodlands Indian Vegetarian Restaurant</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="showonstickheader">
                                        <div class="col-lg-10 col-md-7 col-sm-7 col-xs-12">
                                            <div class="search-area" style="    margin-top: -6px;">
                                                <div class="input-group" id="adv-search">
                                                    <input type="text" class="form-control typeahead" placeholder="Search Product" />
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

                                                            <i class="fa fa-shopping-cart"></i><span>{{globleCartData.total_quantity}}</span>
                                                        </a>
                                                        <ul ng-if="globleCartData.total_quantity">
                                                            <li  ng-repeat="product in globleCartData.products">

                                                                <div class="cart-single-product">
                                                                    <div class="media">
                                                                        <div class="pull-left cart-product-img">
                                                                            <a href="#">

                                                                                <img class="img-responsive" alt="product" src="{{product.file_name}}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body cart-content">
                                                                            <ul>
                                                                                <li>
                                                                                    <h2 style="    white-space: nowrap;
                                                                                        overflow: hidden;
                                                                                        text-overflow: ellipsis;
                                                                                        width: 250px;"><a href="#" style="">{{product.title}}</a></h2>
                                                                                    <h3>                                                                 
                                                                                        <p>
                                                                                            {{product.quantity}} X  {{product.price|currency}} 
                                                                                        </p>
                                                                                    </h3>

                                                                                </li>
                                                                                <li>

                                                                                </li>
                                                                                <li>
                                                                                    <p></p>
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
                                                                <span><span>Sub Total</span></span><span>{{globleCartData.total_price|currency}}</span>

                                                            </li>
                                                            <li>
                                                                <ul class="checkout">
                                                                    <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                                    <!--<li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>-->
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



            <style>
                .wh-widget-right{
                    z-index:40000000000000!important;
                }
            </style>


            <script type="text/javascript">
                (function () {
                    var options = {
                        whatsapp: "85262915892", // WhatsApp number
                        call_to_action: "Contact Us", // Call to action
                        position: "right", // Position may be 'right' or 'left'
                    };
                    var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = url + '/widget-send-button/js/init.js';
                    s.onload = function () {
                        WhWidgetSendButton.init(host, proto, options);
                    };
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                })();
            </script>