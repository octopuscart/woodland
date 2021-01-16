<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/loyal.jpg');   margin-top: -30px;    padding: 100px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;color:white;">Loyalty Program</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />
<!-- Content -->

<section style="overflow: visible;" class="">

    <div class="section  nomargin nopadding" style="    background: white;">
        <div class="container-fluid">
            <div class="container " style="margin-top:30px;">
                <div class="row">
                    <div class="col-lg-5" style="background-color: #FFF; ">
                        <div class="p-5 rounded bg-white" style="background: url(http://localhost/woodlandshk/assets/theme2/res/images/food-pattern.png) center center repeat rgb(245, 245, 245)!important;">
                            <h3 class="font-secondary h1 color">Join Loyalty program</h3>

                            <div class=" mt-4 mt-lg-0" data-loader="button">
                                <?php
                                if ($join_status == '100') {

                                    echo " <div class='alert alert-danger'>$join_msg</div>";
                                }
                                ?>

                                <form class="mb-0 row"   action="#" method="post" >

                                    <div class="col-sm-12 mb-3">
                                        <input type="text"  name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                    </div>

                                    <div class="clear"></div>
                                    <div class="col-sm-12 mb-3">
                                        <input type="email"  name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                    </div>


                                    <div class="col-sm-12 mb-3">
                                        <input type="text"  name="contact_no" value="" class="form-control border-form-control required" placeholder="Contact No.">
                                    </div>

                                    <div class="clear"></div>
                                    <div class="col-12 nobottommargin">
                                        <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit"  name="submit" value="submit">Join Now</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 clearfix" style="background:url()">
                        <div id="food-menu-carousel" class="menu-carousel owl-carousel image-carousel food-menu-carousel custom-js owl-loaded">

                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="padding:0">
                                    <div class="owl-item active">
                                        <div class="oc-item">
                                            <div class="food-content clearfix">
                                                <div class="heading-block nobottomborder nobottommargin" style="    text-align: center;">
                                                    <h3 class="font-secondary nott">Welcome to the Woodlands Loyalty program </h3>
                                                    <p style="    font-size: 15px;
                                                       text-transform: uppercase;" >Join our customer loyalty program and earn cash vouchers based on numbers of visits to Woodlands !</p>
                                                    <div style="text-align: center"><img src="<?php echo base_url(); ?>assets/images/wlqr.png" style="height: 300px;width: 300px;display: inline;"/></div>
                                                    <hr/>



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
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
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>