<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <link href="https://fonts.googleapis.com/css?family=Cookie|Open+Sans:400,600,700,800,900|Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C700%2C700italic%7CPoppins%3A400%2C400italic%2C700%2C700italic%2C600%2C600italic%2C300%2C300italic%7COswald%3A400%2C700" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/one-page/css/et-line.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/res/restaurant.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/res/css/fonts.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/colors2e70.css?color=e7272d" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/customstyle.css?color=e7272d" type="text/css" />
        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/sweetalert2/sweetalert2.min.css">

        <script src="<?php echo base_url(); ?>assets/theme2/angular/angular.min.js"></script>

        <link href="<?php echo base_url(); ?>assets/theme2/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">


        <style>
            /* Page Loader CSS */
            .css3-spinner:before,.pizza .slice:after,.pizza .slice:before{content:''}.css3-spinner{height:100vh;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:#FFF}.css3-spinner:before{position:absolute;top:50%;left:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);width:15vmin;height:2vmin;background:#DDD;margin-top:17.5vmin;-webkit-filter:blur(10px);filter:blur(10px);border-radius:100%}.pizza{height:20vmin;width:20vmin;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background:0 0;position:relative;-webkit-animation:rotate 13s linear infinite;animation:rotate 13s linear infinite}@-webkit-keyframes rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.pizza .slice{z-index:-1;overflow:visible;position:absolute;width:0;height:0;border-style:solid;border-width:10vmin 2.75vmin 0;border-color:#ffdc73 transparent transparent;left:7.5vmin;top:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:rotate(0);transform:rotate(0);-webkit-animation:loading 1.8125s ease-in-out infinite;animation:loading 1.8125s ease-in-out infinite}@-webkit-keyframes loading{0%,100%,49%{opacity:1}50%,99%{opacity:0}}@keyframes loading{0%,100%,49%{opacity:1}50%,99%{opacity:0}}.pizza .slice:nth-of-type(2n):after{box-shadow:.5vmin 2.5vmin 0 #cc333f}.pizza .slice:nth-of-type(4n):after{box-shadow:.5vmin 2.5vmin 0 #cc333f,1.5vmin 5vmin 0 #cc333f}.pizza .slice:nth-of-type(1){-webkit-transform:rotate(-27.75deg);transform:rotate(-27.75deg);-webkit-animation-delay:-62.5ms;animation-delay:-62.5ms}.pizza .slice:nth-of-type(2){-webkit-transform:rotate(-55.5deg);transform:rotate(-55.5deg);-webkit-animation-delay:-125ms;animation-delay:-125ms}.pizza .slice:nth-of-type(3){-webkit-transform:rotate(-83.25deg);transform:rotate(-83.25deg);-webkit-animation-delay:-.1875s;animation-delay:-.1875s}.pizza .slice:nth-of-type(4){-webkit-transform:rotate(-111deg);transform:rotate(-111deg);-webkit-animation-delay:-.25s;animation-delay:-.25s}.pizza .slice:nth-of-type(5){-webkit-transform:rotate(-138.75deg);transform:rotate(-138.75deg);-webkit-animation-delay:-.3125s;animation-delay:-.3125s}.pizza .slice:nth-of-type(6){-webkit-transform:rotate(-166.5deg);transform:rotate(-166.5deg);-webkit-animation-delay:-375ms;animation-delay:-375ms}.pizza .slice:nth-of-type(7){-webkit-transform:rotate(-194.25deg);transform:rotate(-194.25deg);-webkit-animation-delay:-.4375s;animation-delay:-.4375s}.pizza .slice:nth-of-type(8){-webkit-transform:rotate(-222deg);transform:rotate(-222deg);-webkit-animation-delay:-.5s;animation-delay:-.5s}.pizza .slice:nth-of-type(9){-webkit-transform:rotate(-249.75deg);transform:rotate(-249.75deg);-webkit-animation-delay:-.5625s;animation-delay:-.5625s}.pizza .slice:nth-of-type(10){-webkit-transform:rotate(-277.5deg);transform:rotate(-277.5deg);-webkit-animation-delay:-625ms;animation-delay:-625ms}.pizza .slice:nth-of-type(11){-webkit-transform:rotate(-305.25deg);transform:rotate(-305.25deg);-webkit-animation-delay:-.6875s;animation-delay:-.6875s}.pizza .slice:nth-of-type(12){-webkit-transform:rotate(-333deg);transform:rotate(-333deg);-webkit-animation-delay:-.75s;animation-delay:-.75s}.pizza .slice:before{position:absolute;height:1.5vmin;width:6vmin;background:#bbb083;top:-10.5vmin;left:-3vmin;border-radius:100vmin 100vmin .5vmin .5vmin/50vmin}.pizza .slice:after{border-radius:100%;position:absolute;width:1.25vmin;height:1.25vmin;background:#cc333f;left:-1vmin;top:-7vmin;z-index:2}
        </style>
    </head>
    <body ng-app="App" class="stretched sticky-footer" data-loader-html="<span class='loadingimage'><img src='<?php echo base_url(); ?>assets/theme2/res/images/preloader@2x.gif'>'<h2 class='font-secondary'>Loading...</h2> </span>">

        <div id="wrapper" class="clearfix" ng-controller="ShopController" id="ShopController">
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
            <header id="header" class="static-sticky transparent-header split-menu clearfix">
                <div id="header-wrap" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header.png');">
                    <div class="container clearfix">
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <div id="logo">
                            <a href="<?php echo site_url("/"); ?>" class="standard-logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Woodlandshk Logo"></a>
                            <a href="#" class="retina-logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Woodlandshk Logo"></a>
                        </div>

                        <nav id="primary-menu" class="with-arrows clearfix">
                            <ul>
                                <li><a href="<?php echo site_url("about-us"); ?>"><div>INSIGHTS</div></a></li>
                                <!--<li><a href="<?php echo site_url("menu/0/0"); ?>"><div>Menu</div></a></li>-->

                                <li><a href="<?php echo site_url("gallery"); ?>"><div>Gallery</div></a></li>

                                <li><a href="<?php echo site_url("loyalty-program"); ?>"><div>Loyalty Program</div></a></li>

                                <li><a href="<?php echo site_url("review"); ?>"><div>Review</div></a></li>
                                <li><a href="<?php echo site_url("blog"); ?>"><div>Blog</div></a></li>
                            </ul>
                            <ul>
                                <li><a href="<?php echo site_url("annual-charity"); ?>"><div>  CHARITY</div></a></li>
                                <li><a href="<?php echo site_url("contact"); ?>"><div>Contact</div></a></li>
                                <li><a href="<?php echo site_url("menu/0/0"); ?>" class="reservation_buttons"><div>Order Now</div></a></li>
                                <li><a href="<?php echo site_url("book-now"); ?>" class="reservation_buttons"><div class="">Book </div></a></li>
                                <li>
                                    <a href="<?php echo site_url("cart") ?>" class="cartheadericon">
                                        <i class="icon-et-basket" style="    font-size: 20px;"></i><span>{{globleCartData.total_quantity}}</span>
                                    </a>
                                </li>
                                <li>
                                    <?php
                                    $session_data = $this->session->userdata('logged_in');
                                    if ($session_data) {
                                        ?>

                                        <a href="<?php echo site_url("Account/profile") ?>" class="cartheadericon" style="    padding-left: 24px;">
                                            <i class="icon-et-profile-male" style="    font-size: 20px;"></i> 
                                        </a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo site_url("Account/login") ?>" class="cartheadericon" style="    padding-left: 24px;">
                                            <i class="icon-et-lock" style="    font-size: 20px;"></i> 
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>



