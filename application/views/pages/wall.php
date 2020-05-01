<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
    <?php
    $reviewList = array(
        "ranikant" => array(
            "image" => "Rajini.jpg",
            "name" => "Rajani Kanth",
            "position" => "Indian Cine Super Star",
            "date" => "",
        ),
        "ilayaraja" => array(
            "image" => "Ilayaraja.jpg",
            "name" => "Iilayaraja",
            "position" => "Famous Indian Music Director",
            "date" => "",
        ),
        "SPB" => array(
            "image" => "SPB.jpg",
            "name" => "S. P. Balasubrahmanyam",
            "position" => "Indian playback singer",
            "date" => "",
        ),
        "Sunil-Gav" => array(
            "image" => "Sunil-Gav.jpg",
            "name" => "Sunil Gavaskar",
            "position" => "Indian cricketer",
            "date" => "",
        ),
        "Anil-Kumble" => array(
            "image" => "Anil-Kumble.jpg",
            "name" => "Anil Kumble",
            "position" => "Indian cricketer",
            "date" => "",
        ),
        "Amrish" => array(
            "image" => "Amrish.jpg",
            "name" => "Amrish Puri",
            "position" => "Indian bollywood actor ",
            "date" => "",
        ),
        "hariharan" => array(
            "image" => "Hari-haran.jpg",
            "name" => "Hari Haran",
            "position" => "Indian Cine Singar ",
            "date" => "",
        ),
        "shrikanth" => array(
            "image" => "Srikanth.jpg",
            "name" => "Shri Kanth",
            "position" => "Indian cricketer ",
            "date" => "",
        ),
        "Narasimha" => array(
            "image" => "Narasimrao.jpg",
            "name" => "P. V. Narasimha Rao",
            "position" => "Former Prime Minister of India",
            "date" => "",
        ),
    );
    $countrr = 1;
    foreach ($reviewList as $key => $value) {
        ?>

        .dessert-menu .item-thumb .owl-dot:nth-of-type(<?php echo $countrr; ?>) span {
            background-image: url(<?php echo base_url(); ?>assets/theme2/res/images/review/<?php echo $value['image']; ?>)!important;
            background-size: 100%!important;
        }
    <?php
    $countrr ++;
    
    } ?>

</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall.jpg');   margin-top: -30px;    padding: 100px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;">Wall Of Woodland</h1>

    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />
<!-- Content -->

<section style="overflow: visible;">

    <div class="section dessert-menu nomargin nopadding" style="    background: white;">
        <div class="container-fluid">
            <div class="row align-items-stretch clearfix">
                <div class="col-lg-5 colordarkgreen" style="background-color: #FFF; padding: 0; box-shadow: 0px 2px 38px 4px rgba(0, 0, 0, 0.61);
                 
                     margin: 39px 0px;">
                    <div id="dessert-menu-carousel" class="menu-carousel owl-carousel image-carousel custom-js">
                        <?php
                        foreach ($reviewList as $key => $value) {
                            ?>
                            <div class="oc-item">
                                <img class="topmargin-sm" src="<?php echo base_url(); ?>assets/theme2/res/images/review/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" style="margin: 26px;    width: 90%;">
                                <div class="food-content clearfix">
                                    <div class="heading-block nobottomborder nobottommargin">
                                        <h3 class="font-secondary nott txtcolorlightyellow"><?php echo $value['name']; ?></h3>
                                        <div class="food-info txtcolorlightgreen"><?php echo $value['position']; ?></div>
                                        <p class="nobottommargin"><?php echo $value['date']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-lg-7 clearfix" style="background:url()">
                    <span class="t400 font-secondary " style="font-size: 25px;
                          text-align: center!important;
                          width: 100%;
                          float: left;
                          padding: 10px 68px;">
                        Many iconic personalities from India and around the world
                        have dined at Woodlands and left their hand-written
                        testimonials about their experience with us.
                    </span>
                    <div class="vertical-middle">
                        <div class="col-padding clearfix">
                            <div><div id="item-thumb1" class="item-thumb"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container section-contact topmargin-lg clearfix" style="background: white;">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 bottommargin-sm center">
                <i class="i-plain i-xlarge divcenter nobottommargin icon-et-map"></i>
                <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
                <span class="font-primary">
                    UG Shop 16 & 17, Wing On Plaza,<br/>
                    62, Mody Road, Tsim Sha Tsui East,<br/>
                    Kowloon, Hong Kong
                </span>
            </div>
            <div class="col-lg-3 col-md-6 bottommargin-sm center">
                <i class="i-plain i-xlarge divcenter nobottommargin icon-et-clock"></i>
                <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
                <span class="font-primary">
                    <table style="    width: 100%;text-align: left;">
                        <tr>
                            <td colspan="2" style="text-align: center;"><strong>Monday To Sunday</strong></td>

                        </tr>
                        <tr>
                            <td>Lunch</td>
                            <td>: &nbsp; 11:30am – 03:30pm</td>
                        </tr>
                        <tr>
                            <td>Dinner</td>
                            <td>: &nbsp; 06:30pm – 10:30pm</td>
                        </tr>
                    </table>
                </span>
            </div>
            <div class="col-lg-3 col-md-6 bottommargin-sm center">
                <i class="i-plain i-xlarge divcenter nobottommargin icon-et-clipboard"></i>
                <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Reservation</h3>
                <span class="font-primary">
                    <table style="    width: 100%;">
                        <tr>
                            <td colspan="1" style="text-align: center;font-size: 20px;"><strong>+(852) 2369 3718</strong></td>

                        </tr>
                        <tr>

                            <td><i class="icon-et-phone"></i>&nbsp; +(852) 2366 1945</td>
                        </tr>
                        <tr>

                            <td><i class="icon-et-envelope"></i>&nbsp; reachus@vegconcepts.com</td>
                        </tr>
                    </table>
                </span>
            </div>
            <div class="col-lg-3 col-md-6 bottommargin-sm center">
                <i class="i-plain i-xlarge divcenter nobottommargin icon-et-heart"></i>
                <h3 class="uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Social Contact</h3>
                <div style="display: flex; justify-content: center">
                    <a href="#" class="social-icon si-borderless si-facebook">
                        <i class="icon-line2-social-facebook"></i>
                        <i class="icon-line2-social-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-borderless si-twitter">
                        <i class="icon-line2-social-twitter"></i>
                        <i class="icon-line2-social-twitter"></i>
                    </a>
                    <a href="#" class="social-icon si-borderless si-youtube">
                        <i class="icon-line2-social-youtube"></i>
                        <i class="icon-line2-social-youtube"></i>
                    </a>
                    <a href="#" class="social-icon si-borderless si-instagram">
                        <i class="icon-line2-envelope"></i>
                        <i class="icon-line2-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>

</section>




<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>