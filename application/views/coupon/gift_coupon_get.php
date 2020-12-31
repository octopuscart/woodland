<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
    .checkbox-coupon{
        height: 28px;
        float: left;
        width: 20px;
        margin-top: 10px

    }
    .coupon-imgage-payment{
        float: left;
        width: 120px;
    }
    .headerformblock{
        padding: 10px;
        border: 1px solid #fcb316;
        margin: 10px;
        width:-webkit-fill-available;
        display: inline-block;
    }

    .headerformblock h3 {
        font-size: 14px;
        margin-bottom: 0px;
        position: relative;
        top: -20px;
        background: #fff;
        width: fit-content;
        padding: 0px 10px;
        border: 1px solid #fcb316;
    }



</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 62px;">Thank you</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->


<section id="content" style="overflow: visible; margin-bottom: 192px!important;">
    <div class="content-wrap1 charity-block">
        <div class="section nomargin clearfix" style="padding: 10px 0; background: #fcb316;border-top:none;">
            <div class="container clearfix">

                <div class="row clearfix">
                    <div  style="    width: 100%;text-align: center;">



                        <h3 class="font-secondary text-white text-center    " style="font-size: 30px">
                            Thanks you for purchasing coupon, your coupon code has been sent to your email.
                        </h3> 
                        <img src="https://manager2.woodlandshk.com/assets/images/coupon100.jpg" style="height: 300px;">



                    </div>
                </div>
            </div>
        </div>

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