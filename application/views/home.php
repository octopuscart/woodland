<?php
$this->load->view('layout/header');
?>

<section id="slider" class="slider-element swiper_wrapper slider-parallax force-full-screen full-screen clearfix" data-effect="fade" data-loop="true" data-autoplay="6000" data-speed="1400">
    <div class="slider-parallax-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">


                <?php
                $sliderimages = [
                    "Woodlands-wan-chai.jpg",
                    "charity2022.jpg",
                    "Woodlands-01.jpg",
                    "Woodlands-02.jpg",
                    "Woodlands-03.jpg",
                    "Woodlands-04.jpg",
                    "Woodlands-05.jpg",
                    "Woodlands-06.jpg",
                    "Woodlands-07.jpg",
                    "Woodlands-08.jpg",
                ];
                foreach ($sliderimages as $key => $value) {
                    ?>
                    <div class="swiper-slide" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/slider/<?php echo $value;?>'); background-position: center center;">
                        <div class="container dark clearfix">
                            <div class="slider-caption">

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <div class="swiper-slide" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/slider/Woodlands-10.jpg'); background-position: center center;">
                    <div class="container dark clearfix">
                        <div class="slider-caption">
                            <h2 class="font-secondary ls0 t400 nott" style="font-size: 50px;" data-animate="fadeIn">Experience the rich taste of all south Indian recipes</h2>
                            <p class="d-none d-sm-block font-primary" style="    font-size: 18px;" data-animate="fadeIn" data-delay="400">Woodlands - Vegetarian Restaurant | Jain | Vegan Restaurant | Indian Restaurant in Hong Kong</p>
                            <div class="static-content" style="position: relative; display: flex; justify-content: flex-start; flex-direction: row; margin-top: 30px" data-animate="fadeIn" data-delay="800">
                                <img src="<?php echo base_url(); ?>assets/theme2/res/images/Veg_Vegan_Jain_Bud_Logo.png" height="100" alt="Woodlands Veg Vegan Logo">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/slider/Woodlands-9.jpg'); background-position: center center;">
                    <div class="container dark clearfix">
                        <div class="slider-caption slider-caption-center" style="margin-top: -30px;">
                            <img data-animate="fadeIn" src="<?php echo base_url(); ?>assets/theme2/res/images/vegconcept.png" alt="Veg Concept" style="width: 260px; margin-bottom: 10px;">
                            <h2 class="font-secondary ls0 t400 nott" data-animate="fadeIn" data-delay="400">Vegetarian Restaurant</h2>
                            <p class="d-none d-sm-block font-primary" data-animate="fadeIn" data-delay="800">First and Best Indian Vegetarian Restaurant <br/> in Tsim Sha Tsui, Hong Kong</p>
                            <div class="static-content" style="position: relative; display: flex; justify-content: center; flex-direction: row; margin-top: 30px" data-animate="fadeIn" data-delay="1000">
                                <img src="<?php echo base_url(); ?>assets/theme2/res/images/Veg_Vegan_Jain_Bud_Logo.png" height="100" alt="Veg Vegan Logo">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>
    </div>
</section>

<section id="content" style="overflow: visible; margin-bottom: 192px!important;">
    <div class="content-wrap1">
        <div class="section nomargin clearfix vegconceptblock" >
            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-lg-7 bottommargin-sm">
                        <div class="heading-block nobottomborder bottommargin-sm">
                            <img src="<?php echo base_url(); ?>assets/theme2/res/images/vegconcept2.png" style="height: 80px;" alt="Veg Concept">

                        </div>
                        <div class="feature-box media-box" style="">

                            <h3>First and Best Indian Vegetarian Restaurant in Hong Kong</h3>
                            <p> Vegetarianism is neither a fad not a passing fancy. It is a long and widely established way of life not only for whole communities in the far east And Asia but all over the world among individuals who are making an independent stand for a better healthier and more compassionate society.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 42px; margin-top: -40px;"></div>

    </div>


    <div class="section nomargin clearfix who_we_are_block" >
        <div class="container clearfix">

            <div class="row clearfix">
                <div class="col-lg-5 bottommargin-sm"></div>
                <div class="col-lg-7 bottommargin-sm">
                    <div class="heading-block nobottomborder bottommargin-sm">
                        <h2 class="font-secondary color nott" style="font-size: 52px;">
                            <div class="fbox-media" style="width: 70px; height: auto;float:left;margin-top: -13px;float: left;margin-right: 20px;">
                                <img src="<?php echo base_url(); ?>assets/theme2/res/images/icons/bowl.svg" alt="Woodlands Bowl">
                            </div>
                            Who We Are </h2>
                    </div>
                    <div class="feature-box media-box" style="">

                        <h3>First and Best Indian Vegetarian Restaurant in Hong Kong</h3>
                        <p> Vegetarianism is neither a fad not a passing fancy. It is a long and widely established way of life not only for whole communities in the far east And Asia but all over the world among individuals who are making an independent stand for a better healthier and more compassionate society.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="section nobottommargin" style="background: #8cc646    url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header.png') no-repeat top left / cover; padding: 60px 0; padding-top: 15px;margin-top: 10px;">
        <div class="container clearfix">
            <div class="heading-block center nobottommargin nobottomborder">
                <span class="font-primary" style="font-size: 16px; color: #888">Tasty &amp; Healthy</span>
                <h3 class="nott font-secondary ls0" style="font-size: 60px;">Our Food Menu</h3>
            </div>
        </div>
    </div>
    <div class="section food-menu notopmargin nopadding">
        <div class="container-fluid">
            <div class="row align-items-stretch clearfix">
                <div class="col-lg-7 clearfix">
                    <div class="vertical-middle1" style="">
                        <div class="col-padding1 clearfix">
                            <div>
                                <div id="item-thumb" class="item-thumb">

                                    <?php
                                    $menuitems = array(
                                        "SOUP" => "soup.jpg",
                                        "STARTERS" => "idly.jpg",
                                        "CHAT CORNER" => "chat.jpg",
                                        "DOSA" => "dosa.jpg",
                                        "RAVA DOSA" => "ravadosa.jpg",
                                        "UTTAPPAM" => "uttapam.jpg",
                                        "THALI" => "thali.jpg",
                                        "RICE" => "rice.jpg",
                                        "BREADS" => "roti.jpg",
                                    );
                                    foreach ($menuitems as $key => $value) {
                                        ?>
                                        <a href="<?php echo site_url("menu/0/0"); ?>" role = "button" class = "owl-dot " style="width:48%;">
                                            <span style="background: url(<?php echo base_url(); ?>assets/theme2/res/images/menu/menu/<?php echo $value; ?>)">
                                                <h3><?php echo $key; ?></h3>
                                            </span>

                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="center divcenter"><a class="button button-border button-small button-black button-dark button-circle noleftmargin" href="<?php echo site_url("menu/0/0"); ?>" style="margin-top: 0px;">See All Menu</a></div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);margin: 40px 0px;">
                    <div id="food-menu-carousel" class="menu-carousel owl-carousel image-carousel food-menu-carousel custom-js owl-loaded">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="padding:0">
                                <div class="owl-item active" >
                                    <div class="oc-item">
                                        <img class="topmargin-sm" src="<?php echo base_url(); ?>assets/theme2/res/images/menu/menu/featuremenu2.jpg" alt="Food Menu" style="    margin: 0px!important;">
                                        <div class="food-content clearfix">
                                            <div class="heading-block nobottomborder nobottommargin">
                                                <h3 class="font-secondary nott">Nothing brings people together <br/> like our dosa</h3>

                                                <p class="nobottommargin">
                                                    India is the home of innumerable delicious vegetarian dishes. There is so much more to Indian food than just curry. Indian food varies from region to region throughout the country. All of the Regional varieties share a common love of healthy fresh vegetables and fragrant spices.
                                                </p>
                                                <p class="nobottommargin"> We at Woodlands offer traditional lactovegetarian, Jain & Buddhist Food with no onion, garlic, root vegetables and 100% plant-based dishes commonly known as vegan.</p>

                                                <p class="nobottommargin">All are prepared separately by our expert chefs.</p>

                                                <p class="nobottommargin">We are best Indian Restaurant and Vegetarian Restaurant in Tsim Sha Tsui, Hong Kong</p>



                                            </div>
                                            <a href="<?php echo site_url("menu/0/0"); ?>" class="more-link">See More Details <i class="icon-line-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" alt="Woodlands Desing" style="   "/>

    </div>

    <div class="clear"></div>

    <div class="section nobottommargin" style="padding: 0px 0; background: #FFF;    margin-top: -30px;">
        <div class="container clearfix">
            <div class="heading-block center nobottomborder">
                <span class="font-primary ls1" style="font-size: 14px; color: #AAA">Expert &amp; Skillful</span>
                <h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3;">Our Chefs</h3>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2">

                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="team">
                        <div class="team-image imagescalein">
                            <a href="<?php echo base_url(); ?>assets/theme2/res/about-us.html"><img src="<?php echo base_url(); ?>assets/theme2/res/images/chefs/kitta.jpg" alt="KITTA Moolya"></a>
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4 class="font-primary t400 ls2">KITTA Moolya</h4>
                                <span>Executive Chef</span>
                            </div>
                            <p>    
                                Our chef, Kitta Moolya, was born and raised in Mangalore, close to Udupi, a famous city in South India known for its specialized and highly varied vegetarian cuisine.
                            </p>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-4 col-md-4">
                    <div class="team">
                        <div class="team-image imagescalein">
                            <a href="<?php echo base_url(); ?>assets/theme2/res/about-us.html"><img src="<?php echo base_url(); ?>assets/theme2/res/images/chefs/sures.jpg" alt="Suresh Pairaje Rai
                                                                                                    "></a>
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4 class="font-primary t400 ls2">Suresh Pairaje Rai</h4>
                                <span>Chef</span>
                            </div>
                            <p>I want my cooking to reflect the rugged nature and climate of the cold north. I want to create a progressive environment that has a emphasis on the outstanding produce of our region.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">

                </div>
            </div>
        </div>
    </div>

    <div class="section nobottommargin" style="background: #fee749 url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall.jpg') no-repeat center right; background-size: cover; padding: 60px 0;">
        <div class="heading-block center nobottommargin nobottomborder">

            <h3 class="nott font-secondary ls0 wall_of_woodland_heading" style="">Wall Of Woodland</h3>
        </div>
    </div>
    <style>

        <?php
        $reviewList = array(
            "ranikant" => array(
                "image" => "Rajini.jpg",
                "name" => "Rajinikanth",
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
                background-size: contain!important;;
                background-repeat: no-repeat;
            }
            <?php
            $countrr++;
        }
        ?>

    </style>
    <div class="section dessert-menu nomargin nopadding" style="    background: #FBB316;">
        <div class="container-fluid">
            <div class="row align-items-stretch clearfix">
                <div class="col-lg-5" style="background-color: #FFF; padding: 0; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);margin: 40px 0px;">
                    <div id="dessert-menu-carousel" class="menu-carousel owl-carousel image-carousel custom-js">
                        <?php
                        foreach ($reviewList as $key => $value) {
                            ?>
                            <div class="oc-item">
                                <img class="topmargin-sm" src="<?php echo base_url(); ?>assets/theme2/res/images/review/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" style="margin: 26px;    width: 90%;">
                                <div class="food-content clearfix">
                                    <div class="heading-block nobottomborder nobottommargin">
                                        <h3 class="font-secondary nott"><?php echo $value['name']; ?></h3>
                                        <div class="food-info"><?php echo $value['position']; ?></div>
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
                    <div class="vertical-middle1">
                        <div class="clearfix" style="padding-top:60px;">
                            <div><div id="item-thumb1" class="item-thumb"></div></div>
                            <div class="center divcenter"><a href="<?php echo site_url("review"); ?>" class="button button-border button-small button-black button-dark button-circle noleftmargin" style="margin-top: 0px;">See All</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" alt="woodlands desing">
    </div>

    <div class="clear"></div>

    <div class="section nobottommargin" style="padding: 0px 0; background: #FFF;    margin-top: 0px;">
        <div class="container clearfix">
            <div class="heading-block center nobottomborder">
                <span class="font-primary ls1" style="font-size: 14px; color: #AAA"></span>
                <h3 class="nott font-secondary ls0" style="font-size: 60px; line-height: 1.3;">Experience Woodlands</h3>
            </div>
            <div class="row clearfix">


                <div class="col-lg-4 col-md-4 videoblockbottom">
                    <div class="team">
                        <div class="team-image imagescalein">
                            <iframe width="1133" height="550" src="https://www.youtube.com/embed/ASkSgQxdiVM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4 class="font-primary t400 ls2">Welcome to Indian Vegetarian Restaurant - Woodlands
                                </h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 videoblockbottom">
                    <div class="team">
                        <div class="team-image imagescalein">
                            <iframe width="1133" height="550" src="https://www.youtube.com/embed/smRHSvResAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4 class="font-primary t400 ls2">Woodlands - 印度菜唔止得咖喱 | Indian Food isn't just curry 2 - Dosa
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 videoblockbottom">
                    <div class="team">
                        <div class="team-image imagescalein">
                            <iframe width="1133" height="550" src="https://www.youtube.com/embed/mL-w8MEkUMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4 class="font-primary t400 ls2">【美味推介】印度菜並不只是咖喱：活蘭印度素食 / Indian Food isn't all about Curry: Woodlands Indian Restaurant (Subtitled)
                                </h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
    $this->load->view('layout/contactfooter');
    ?>




</section>




<?php
$this->load->view('layout/footer');
?>
<div class="modal fade" id="adModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog " role="document">
        <div class="modal-content" style="border:none">

            <div class="modal-body" style="padding: 0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                        right: 6px;
                        "><span aria-hidden="true">&times;</span></button>

                <img src="<?php echo base_url(); ?>assets/adimages/ordernow.jpg" alt="Order Now" style="width: 100%; ">
                <div class="col-md-12" style="    background: #ff3859;
                     border: none;padding-bottom: 20px;
                     text-align: center;width:100%;">
                    <a  href="<?php echo site_url("menu/0/0"); ?>" class="btn btn-default " style="color: white!important;border-color:white;">Tsim Sha Tsui</a>
                    &nbsp;&nbsp; <a  href="https://woodlands.oddle.me/en_HK" target="_blank" class="btn btn-default  "  style="color: white!important;border-color:white;">Other Location</a>
                </div>
            </div>

        </div>

    </div>
</div>
<script>
//    $(function () {
//        $("#adModal2").modal("show");
//    })
</script>