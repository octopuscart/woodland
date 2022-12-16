<!-- Modal -->
<div class="modal fade" id="selectLocations" tabindex="-1" role="dialog" aria-labelledby="selectLocations" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Select Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php
                    $locationarray = [
                        array("title" => "Tsim Sha Tsui", "image" => "tst.jpg", "link" => "tst"),
                        array("title" => "Wan Chai", "image" => "wanchai.jpg", "link" => "wanchai")
                    ];
                    foreach ($locationarray as $key => $value) {
                        $location = $value["link"];
                        ?>
                        <div class="col-md-6 text-center">
                            <img class="thumbnail" src="<?php echo base_url(); ?>assets/locations/<?php echo $value["image"]; ?>" style="display: inline-block;    border-radius: 20px;" /><hr/>
                            <a href="<?php echo site_url("menu/$location/0"); ?>" class="reservation_buttons"><div class="">Select </div></a>
                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>           
<footer id="footer" class="dark" style="background: url('<?php echo base_url(); ?>assets/theme2/res/images/footer-bg.jpg')  repeat center center / cover; background-size: auto 100%;; padding:0px 0 22px;    ">

    <div id="copyrights" class="nobg">
        <div class="container clearfix">
            <div class="section nobottommargin row tripadvisorblock" style="background:none;text-align: center;    margin-top: 0px;">
                <div class="col-md-3" style=" padding: 0;">
                    <img src="<?php echo base_url(); ?>assets/theme2/res/images/tripadvisor.svg" alt="tripadvisor logo" style="      height: auto;
                         width: 278px;

                         margin-top: 34px;"/>

                </div>
                <div class="col-md-6" style="    text-align: left;
                     font-size: 14px;">
                    <h4 style="margin-bottom: 0;"> Fantastic food!</h4>
                    <p>
                        Been coming here since childhood, it has always been one of the best Indian food to gos. Quality is fresh and unmatched, family style and great atmosphere
                        <br/>AShah- Tripadvisor member since 2020 (Date of visit: March 2020)
                    </p>
                </div>
                <div class="col-md-3">
                    <a href="https://www.tripadvisor.com/Restaurant_Review-g294217-d1216071-Reviews-Woodlands_Indian_Vegetarian_Restaurant-Hong_Kong.html" target="_blank" class="button button-circle button-xlarge colordarkgreen bg-white button-light text-white nott ls0 font-primary ml-0 mt-3 mt-md-0 " style="     margin-top: 31px!important; background: #8bc646!important;">Write Review</a>

                </div>
            </div>
            <hr/>
            <div class="col col-md-12 tglineblock">
                <ul>
                    <?php
                    $taglinearray = ["Authentically Indian. Awesomely Vegetarian",
                        "Vegetarian’s Favorite Since 1981",
                        "Four Decades of First Class Vegetarian Dining",
                        "Restaurant with 3 generations of customers.",
                        "Hong Kong’s First.. Still the Best",
                        "Introducer of Dosa in Hong Kong",
                        "Vegan Friendly Restaurant.",
                        "Exclusive Menu for Vegan",
                        "We serve Vegans",
                        "Strictly Vegetarian. Simply Vegetarian.",
                        "Delightful Vegetarian Food"];
                    foreach ($taglinearray as $key => $value) {
                        ?>
                        <li style="    display: inline;
                            text-align: center;"><?php echo $value . ($key == count($taglinearray) - 1 ? '' : ' |'); ?></li>
                            <?php
                        }
                        ?>
                </ul>

            </div>
            <hr/>
            <div class="col_one_third nobottommargin">
                <span class="font-primary text-white">&copy; WOODLANDS. <?php echo date('Y'); ?>. All Rights Reserved.</span>
            </div>
            <div class="col_two_third col_last nobottommargin">
                <div class="copyrights-menu copyright-links fright clearfix text-white">
                    <a href="<?php echo site_url("/"); ?>">Home</a>
                    /<a href="<?php echo site_url("about-us"); ?>">Insights</a>
                    /<a href="<?php echo site_url("menu/0/0"); ?>">Menu</a>
                    /<a href="<?php echo site_url("our-policies"); ?>"> Our Policies</a>
                    /<a href="<?php echo site_url("refund-policy"); ?>"> Refund Policy</a>
                    /<a href="<?php echo site_url("terms-of-use"); ?>"> Terms of Use</a>
                    /<a href="<?php echo site_url("contact"); ?>">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<div id="gotoTop" class="icon-line-arrow-up"></div>

<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/theme2/js/plugins.js"></script>

<script src="<?php echo base_url(); ?>assets/theme2/js/functions.js"></script>
<script src="<?php echo base_url(); ?>assets/theme2/angular/shopController.js"></script>
<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>assets/theme2/OwlCarousel2-2.3.4/owl.carousel.min.js" type="text/javascript"></script>

<script>

    jQuery(document).ready(function ($) {

        var carouselRTL = false;

        if ($('body').hasClass('rtl')) {
            carouselRTL = true;
        }

        $('#food-menu-carousel2').owlCarousel({
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            items: 1,
            mouseDrag: false,
            dotsContainer: '#item-thumb',
            rtl: carouselRTL
        });

        $('#dessert-menu-carousel').owlCarousel({
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            items: 1,
            mouseDrag: false,
            dotsContainer: '#item-thumb1',
            rtl: carouselRTL
        });
        $('#oc-clients').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
            autoplay: 1,
            autoplayTimeout: 3000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }

        });
    });



</script>


<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "85256818131", // WhatsApp number
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
</body>

</html>