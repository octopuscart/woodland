<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
    .selectlanguage {
        display: inline-block;
        width: 120px;
    }

    .selectlanguage select{
        border-radius: 17px;
    }

    .linkdonate{
        display: inline-block;
        padding: 0px 30px;
    }

    .selectlanguage span{
        color: #0a6132!important;
    }

    .donateh2{
        color: #0a6132!important;
        font-size: 19px;
        margin-top: -21px;
        text-align: center;
        width: 100%;
    }
    .table-donatelist td{
        text-align: left;
    }
</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 62px;">Get Your Coupon
            <br/>

        </h1>

    </div>
</section>
<!-- Inner Page Banner Area End Here -->




<section id="content" style="overflow: visible; margin-bottom: 192px!important;">
    <div class="content-wrap1 charity-block">
        <div class="section nomargin clearfix" style=" background:#fff; background-size: 100% auto;text-align: center">
            <div class="container clearfix">

                <div class="row clearfix">


                    <h2 class=" color nott donateh2" >
                        Enter your email address and get your coupon.

                    </h2>



                    <div class=" col-md-12" style="    text-align: center;
                         display: block;">
                        <form action="#" method="get">
                            <input type="email" required="" class="form-control" name="email" value="<?php echo $email; ?>" style="    margin-bottom: 20px;
                                   width: 300px;
                                   display: inline-block;" /><br/>
                            <div class="linkdonate">

                                <button type="submit" name="submitdata" value="data" class="button button-circle button-xlarge colordarkgreen bg-white button-light text-white nott ls0 font-primary ml-0 mt-3 mt-md-0 "  >
                                    Get Coupon
                                </button>
                            </div>
                    </div>
                    <div class="col-md-12">

                        <?php
                        if ($status == '2') {
                            echo "<div class='alert alert-danger'>$message </div> ";
                        }
                        ?>


                    </div>
                    <div class="row">
                        <?php
                        if ($status == '1') {
                            ?>
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <a href="<?php echo "https://www.woodlandshk.com/Shop/getCouponImage/$couponcode?client_email=$email" ?>" target="_blank" class="btn btn-default btn-sm btn-small pull-right"><i class="fa fa-download"></i> Download</a>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <?php
                                echo "<img src='https://www.woodlandshk.com/Shop/getCouponImage/$couponcode?client_email=$email' style='width: 100%'>";
                            }
                            ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

</div>

<!-- Content -->

<section style="overflow: visible;">


    <?php
    $this->load->view('layout/contactfooter');
    ?>
</section>




<?php
$this->load->view('layout/footer');
?>