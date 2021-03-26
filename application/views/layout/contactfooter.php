<div class="container section-contact topmargin-lg clearfix footercontact" style="background:url(<?php echo base_url(); ?>assets/theme2/res/images/vegbackground.jpg);background-size: contain;">

    <div class="row clearfix" >
        <div class="col-lg-3 col-md-6 bottommargin-sm center">
            <i class="i-plain i-xlarge divcenter nobottommargin icon-et-map"></i>
            <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px;color:black">Contact</h3>
            <span class="font-primary" style="color:black">
                UG Shop 16 & 17, Wing On Plaza,<br/>
                62, Mody Road, Tsim Sha Tsui East,<br/>
                Kowloon, Hong Kong
            </span>
        </div>
        <div class="col-lg-3 col-md-6 bottommargin-sm center">
            <i class="i-plain i-xlarge divcenter nobottommargin icon-et-clock"></i>
            <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px;color:black">Opening Time</h3>
            <span class="font-primary">
                <table style="    width: 100%;text-align: left;color:black">
                    <tr>
                        <td colspan="2" style="text-align: center;"><strong>Monday To Sunday</strong></td>

                    </tr>
                    <tr>
                        <td>Lunch</td>
                        <td>: &nbsp; 11:30 am – 03:30 pm</td>
                    </tr>
                    <tr>
                        <td>Dinner</td>
                        <td>: &nbsp; 06:30 pm – 10:30 pm</td>
                    </tr>
                </table>
            </span>
        </div>
        <div class="col-lg-3 col-md-6 bottommargin-sm center">
            <i class="i-plain i-xlarge divcenter nobottommargin icon-et-clipboard"></i>
            <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px;color:black">Reservation</h3>
            <span class="font-primary">
                <table style="    width: 100%;color:black">
                    <tr>
                        <td colspan="1" style="text-align: center;font-size: 20px;color:black"><strong>+(852) 2369 3718</strong></td>

                    </tr>
                    <tr>

                        <td><i class="icon-et-phone"></i>&nbsp; +(852) 2366 1945</td>
                    </tr>
                    <tr>

                        <td>
                            <i class="icon-et-envelope" style="    float: left;   margin-left: 20px; padding-top: 13px"></i>
                            <span style="float: left;">&nbsp; order@woodlandshk.com<br/>info@woodlandshk.com
                            </span></td>
                    </tr>
                </table>
            </span>
        </div>
        <div class="col-lg-3 col-md-6 bottommargin-sm center">
            <i class="i-plain i-xlarge divcenter nobottommargin icon-et-heart"></i>
            <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px;color:black">Social Contact</h3>
            <div style="display: flex; justify-content: center">
                <a href="https://www.facebook.com/woodlandshk" class="socialicon ">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://twitter.com/woodlandshk" class="socialicon ">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/woodlands.hk/" class="socialicon ">
                    <i class="fa fa-instagram"></i>
                </a>

                <a href="https://www.youtube.com/channel/UCr6JHgxgWr57Zb4TyzTXJJw/videos" class="socialicon ">
                    <i class="fa fa-youtube"></i>
                </a>


                <a href="https://www.tripadvisor.in/Restaurant_Review-g294217-d1216071-Reviews-Woodlands_Indian_Vegetarian_Restaurant-Hong_Kong.html" class="socialicon ">
                    <i class="fa fa-tripadvisor"></i>
                </a>

            </div>
        </div>
    </div>




</div>

<!--media links-->
<div class="clearfix " style="background:url(<?php echo base_url(); ?>assets/theme2/res/images/vegbackground.jpg);background-size: contain;">


    <div class=" clearfix" >
        <div class="medialinkdesing">

            <div class="medialinkdesing-slider">
                <div id="oc-clients" class="owl-carousel " data-margin="0" data-loop="true" data-nav="true" data-autoplay="5000" data-pagi="false"  data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

                    <?php
                    $querymedialink = $this->db->get("media_link");
                    $querymedialinkresult = $querymedialink->result_array();


                    $medialink = $querymedialinkresult;

                    foreach ($medialink as $key => $value) {
                        ?>
                        <div class="oc-item ">
                            <div class="media-item-block">
                                <p><?php echo $value['text']; ?></p>
                                <h3 class="" >
                                    <?php echo $value['source']; ?>
                                </h3>
                                <a class="" href="<?php echo $value['link']; ?>" target="_blank">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>

<!--end of media link-->
<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="      margin-top: -66px;     z-index: 200000;
     position: relative;"/>

<div class="content-wrap1">
    <div class="section nomargin clearfix" style="padding: 10px 0;    background: #FFF;
         margin-top: -10px;">
        <div class="section nobottommargin" style="padding: 0px 0; background: #FFF;    margin-top: 0; ">
            <div class="container clearfix">
                <div class="heading-block center nobottomborder" style="margin-bottom: 10px;">
                    <h3 class="nott font-secondary ls0" style="font-size: 40px; line-height: 1.3;">Awards & Certifications</h3>
                </div>
                <div class="row clearfix" style="display: block;text-align: center;">

                    <img src="<?php echo base_url(); ?>assets/theme2/res/images/awards_v2.png" >
                    <hr/>

                </div>
            </div>
        </div>
    </div>
    <div class="section nobottommargin" style="background: #8cc646    url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header.png') no-repeat top left / cover;     padding: 105px 0;
         padding-top: 10px;
         text-align: center;
         margin-top: -18px;">

        <img src="<?php echo base_url(); ?>assets/theme2/res/images/Veg_Vegan_Jain_Bud_Logo.png" style="    height: 83px;
             "/>
    </div>

    <div class="section nomargin dark bgcolor" style="    padding-bottom: 0px!important;">
        <div class="container">
            <div class="row justify-content-between align-items-center" style="text-align: center;">
                <div class="col-md-12">
                    <h3 class="mb-0 ls0" style="margin-bottom:20px!important">Have questions? Please don't hesitate to contact us.</h3>
                    <a href="<?php echo site_url("contact"); ?>" class="button button-circle button-xlarge colordarkgreen bg-white button-light text-white nott ls0 font-primary ml-0 mt-3 mt-md-0 " >Contact Us Here</a>

                </div>

            </div>
        </div>
    </div>

</div>

