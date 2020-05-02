            
<footer id="footer" class="dark" style="background: url('<?php echo base_url(); ?>assets/theme2/res/images/footer-bg.jpg')  repeat center center / cover; background-size: auto 100%;; padding: 50px 0 22px;    ">

    <div id="copyrights" class="nobg">
        <div class="container clearfix">
            <div class="col_half nobottommargin">
                <span class="font-primary">&copy; WOODLANDS. <?php echo date('Y'); ?>. All Rights Reserved.</span>
            </div>
            <div class="col_half col_last nobottommargin">
                <div class="copyrights-menu copyright-links fright clearfix">
                    <a href="#">Home</a>/<a href="">About Us</a>/<a href="">Menu</a>/<a href="">Wall</a>/<a href="">Contact</a>
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