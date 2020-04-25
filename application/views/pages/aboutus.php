<?php
$this->load->view('layout/header');
?>
<section id="slider" class="slider-element clearfix" style="height: 600px; background: #ffc162  url('<?php echo base_url(); ?>assets/theme2/res/images/sections/about-us.jpg') right center no-repeat; background-size: auto 100%;">
    <div class="vertical-middle">
        <div class="container">
            <div class="row clearfix parallax" data-0="opacity: 1;margin-top:15px" data-800="opacity: 0.1;margin-top:100px">
                <div class="col-md-6">
                    <div class="heading-block nobottomborder nobottommargin">
                        <h2 class="font-secondary color nott" style="font-size: 32px">Our Restaurant</h2>
                    </div>
                    <h2 class="t600 mb-2" style="font-size: 42px;color:#a83106;">
                        First and Best Indian Vegetarian Restaurant<br/> in Tsim Sha Tsui, <br/>Hong Kong</h2>
                </div>
            </div>
            <div class="clear"></div>
            <div class="d-flex align-items-center mt-3 clearfix">
                <a class="button button-circle button-large text-white mb-0 noleftmargin">Reserve Now</a>
                <a href="#" data-lightbox="iframe" class="d-flex fright more-link ml-3"><i class="icon-play-sign h3 m-0 align-self-center d-none d-sm-inline-block"></i><span class=" align-self-center ml-2"><u>See Our Story</u></span></a>
            </div>
        </div>
    </div>
    <div class="video-wrap d-block d-md-none" style="position: absolute; height: 100%; z-index: 1;">
        <div class="video-overlay" style="background: rgba(255,255,255,0.8);"></div>
    </div>
</section>

<section id="content" style="overflow: visible;">
    <div class="content-wrap nobottompadding" style="background:url(<?php echo base_url(); ?>assets/theme2/res/images/food-pattern.png)">
        <div class="container">
            <div class="heading-block nobottomborder bottommargin-sm">
                <h3 class="nott font-secondary ls0" style="font-size: 52px; line-height: 1.3;">Who we are
                </h3>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-sm-12 bottommargin-sm">
                    <div class="feature-box media-box">
                        <p>

                            Woodlands Welcomes you to a world of delicious vegetarian food. Signature dishes coming from our grand Indian heritage. We are a vegetarian multi-cuisine restaurant which believes in quality standards which are never compromised.
                        </p>

                        <p>In Woodlands you can experience the especially rich flavours of so many South Indian recipes that have evolved over the centuries. They have been perfected by our experienced Chefs over decades, experts in the art of mixing and blending spices. </p>

                        <p>Woodlands is the first Indian Vegetarian restaurant in Hong Kong - open since 1981. We were the first people to try out a new bold venture, sharing Indian vegetarianism as an 'alternative' in meat-loving Hong Kong.</p>

                        <p>Today, our client base continues to expand, from our local Indian community to our many Chinese friends and other International visitors, usually referred by the people who have tasted our authentic delicacies.</p>

                        <p>Whether you are dining for business or purely for pleasure, a meal at Woodlands is sure to make a lasting impression.</p>

                        <p>We are usually open 365/366 days a year.</p>

                        <p>We look forward very much to cooking for you and serving you. </p>


                    </div>
                </div>

            </div>
            <div class="line mt-5"></div>
        </div>

    </div>
    <div class="section nomargin dark bgcolor" style="">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-10">
                    <h3 class="mb-0 ls0">Do You want to Contact with us. Then Don't Hesitate!</h3>
                </div>
                <div class="col-md-2">
                    <a class="button button-circle button-xlarge text-dark bg-white button-light nott ls0 font-primary ml-0 mt-3 mt-md-0 ">Contact Us Here</a>
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header-bg.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>

</section>

<?php
$this->load->view('layout/footer');
?>