<?php
$this->load->view('layout/header');
?>
<!-- Slider Area Start Here -->
<!--<div class="main-slider2">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
<?php
foreach ($sliders as $key => $value) {
    ?>
                                                                                                    <img src="<?php echo imageserverslider . $value->file_name; ?>" alt="" title="#slider-direction-<?php echo $key; ?>" />
    <?php
}
?>        
        </div>


<?php
foreach ($sliders as $key => $value) {
    ?>
                                                                                                <div id="slider-direction-<?php echo $key; ?>" class="t-cn slider-direction">
                                                                                                    <div class="slider-content t-lfl s-tb slider-1">
                                                                                                        <div class="title-container s-tb-c">
                                                                                                            <h2 class="title<?php echo $key; ?>" style="color:<?php echo $value->title_color; ?>">
    <?php echo $value->title; ?>
                                                                                                            </h2>
                                                                                                            <p style="color:<?php echo $value->line1_color; ?>"><?php echo $value->line1; ?></p>
                                                                                                            <p style="color:<?php echo $value->line2_color; ?>"><?php echo $value->line2; ?></p>
                                                                                                            <a href="<?php echo $value->link; ?>" class="btn-shop-now-fill-slider"><?php echo $value->link_text; ?></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
    <?php
}
?>

    </div>
</div>-->
<!-- Slider Area End Here -->


<!-- Slider Area Start Here -->
<div class="main-slider2">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <img src="<?php echo base_url(); ?>assets/sliders/s1.jpg" alt="" title="#slider-direction-1" />
            <img src="<?php echo base_url(); ?>assets/sliders/s2.jpg" alt="" title="#slider-direction-3" />
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c">
                    <h2 class="title1">   <span>Custom Made</span> <br>Just For You</h2>
                    <p>With our unique suit customizer, you can easily create a suit </p>
                    <p>that perfectly matches your personality.</p>
                    <a href="#" class="btn-shop-now-fill-slider">Customize Now</a>
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="slider-direction">
            <div class="slider-content t-lfr s-tb slider-3">
                <div class="title-container s-tb-c">
                    <h2 class="title1" style="color: white"><span>New Collection</span> Is <br>Available Here</h2>
                    <p></p>
                    <a href="#" class="btn-shop-now-fill-slider">View Collections</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End Here -->


<div class="about-us-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="about-us-page-left">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/shop3.jpg" alt="about" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="about-us-page-right" style="    font-size: 17.6px;">
                    <h2>Who We Are</h2>
                    <p>
                        As one of Hong Kong's leading custom tailors, we are proud of our international reputation for making the highest quality tailored clothing. Since past three decades, we are known across the globe for professionally hand-crafted suits, shirts, leather jackets, sports jackets and ladies dresses from Hong Kong.
                    </p>

                    <p>
                        Our master tailors work with a group of over 250 professionally trained Shanghainese tailors to deliver each garment to utter satisfaction of clients. Our garments are hand-cut and hand-stitched to ensure the best quality outcome.                           
                    </p>

                    <p>
                        Our overseas sales team travels across the globe with wide range of fabrics and styles to provide door-to-door services, office tours, or hotel exhibitions as per clients' requests.                    </p>


                    <p>
                        We stock over 20,000 fabrics in our showroom in Hong Kong. Our fabrics include brands like Ermenegildo Zegna, Loro Piana, Vitale Barberis Canonico, Dormeuil, Hugo Collections and many other prestigious fabrics from Italy, United Kingdom and France.                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Blog3 Area Start Here -->
<div class="blog3-area about-us-page-area" style="padding-top: 0px;">
    <div class="section-title">
        <span class="title-bar-left"></span>
        <h2>Our Work Process</h2>
        <span class="title-bar-right"></span>
    </div>



    <div class="" >
        <div class=" col-md-4 blog-box">

            <div class="blog-content-holder">
                <h3><a href="#">CHOOSE FABRIC</a></h3>
                <ul>
                    <li>
                        <p style="color:white;">Choose any fabric and create own style. Vogue Tailors stock about 15000 fabrics ranging from affordable to exclusive.</p>
                    </li>

                </ul>
            </div>
            <a href="#"><img src="<?php echo base_url(); ?>assets/block/img1.jpg" alt="blog" class="img-responsive" ></a>
        </div>
        <div class="col-md-4 blog-box">

            <div class="blog-content-holder">
                <h3><a href="#">GET SIZE</a></h3>
                <ul>
                    <li>                    <p style="color:white;">Let Size and calculate your measurement. Insert you measurements by following easy steps.</p>
                    </li>



                </ul>
            </div>
            <a href="#"><img src="<?php echo base_url(); ?>assets/block/img2.jpeg" alt="blog" class="img-responsive"></a>
        </div>
        <div class="col-md-4 blog-box">

            <div class="blog-content-holder">
                <h3><a href="#">CUT TO CREATE</a></h3>
                <ul>
                    <li>                    <p style="color:white;">You can customize your clothes conveniently, And our experienced shanghainese tailor cut and make your new dress.</p>
                    </li>
                </ul>
            </div>
            <a href="#"><img src="<?php echo base_url(); ?>assets/block/img3.jpg" alt="blog" class="img-responsive"></a>
        </div>

    </div>
</div>
<!-- Blog3 Area End Here -->

<div style="clear: both"></div>
<div class="advantage2-area" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="advantage-area-box">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <i class="flaticon-truck"></i>
                        </a>
                        <div class="media-body">
                            <h3>FREE SHIPPING</h3>
                            <p>On Orders Over US$ 300</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="advantage-area-box">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <i class="flaticon-headphones"></i>
                        </a>
                        <div class="media-body">
                            <h3>24/7 SERVICE</h3>
                            <p>Get Help When You Need</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="advantage-area-box">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <i class="fa fa-sticky-note-o" style="    margin-left: 20px;"></i>
                        </a>
                        <div class="media-body">
                            <h3>TOP BRANDS</h3>
                            <p>5,000 luxurious fabrics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-area">
    <div class="container">
        <div class="section-title">
            <span class="title-bar-left"></span>
            <h2>our Best Brands</h2>
            <span class="title-bar-right"></span>
        </div>
        <div class="metro-carousel" data-loop="true" data-items="6" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="6" data-r-large-nav="true" data-r-large-dots="false">
            <?php
            $brandarray = ['loropiana.jpg', 'reda.jpg', 'zegna.jpg', 'hollandsherry.jpg', 'thomasmason.jpg', 'vbc.jpg'];
            foreach ($brandarray as $key => $value) {
                ?>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/brand/<?php echo $value; ?>" alt="brand"></a>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- Brand Area End Here -->


<?php
$this->load->view('layout/footer');
?>