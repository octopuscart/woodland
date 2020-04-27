<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
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
                <div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: 0px 2px 38px 4px rgba(0, 0, 0, 0.61);
    background: #242424;
    margin: 39px 0px;">
                    <div id="dessert-menu-carousel" class="menu-carousel owl-carousel image-carousel custom-js">
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
                        );
                        foreach ($reviewList as $key => $value) {
                            ?>
                            <div class="oc-item">
                                <img class="topmargin-sm" src="<?php echo base_url(); ?>assets/theme2/res/images/review/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" style="margin: 26px;    width: 90%;">
                                <div class="food-content clearfix">
                                    <div class="heading-block nobottomborder nobottommargin">
                                        <h3 class="font-secondary nott" style="color:white;"><?php echo $value['name']; ?></h3>
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
                    <div class="vertical-middle">
                        <div class="col-padding clearfix">
                            <div><div id="item-thumb1" class="item-thumb"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>




<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>