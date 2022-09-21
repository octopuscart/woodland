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
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px 0px;   background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h3 class=" capitalize ls0 text-white" style="font-size: 40px;"><span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x" style="    color: green;"></i>
                <i class="fa fa-check fa-stack-1x fa-inverse"></i>
            </span>Make A Donation</h3>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->


<section id="content" style="overflow: visible; margin-bottom: 192px!important;">
    <div class="content-wrap1 charity-block">
        <div class="section nomargin clearfix" style="padding: 10px 0; background: #fff;border-top:none;">
            <div class="container clearfix">

                <div class="row clearfix">
                    <div  style="    width: 100%;text-align: center;">

                        <?php
                        if ($payment_type == "PAYME") {
                            ?>
<!--                            <a href="https://qr.payme.hsbc.com.hk/2/Evyc1DNL6brCDb3UaRPXF" class="button button-circle button-large text-white ml-0 mt-3 " type="button" disabled="" >Click Here To Pay (PayMe)</a>

                            <br/>

                            <hr/>-->
                            <?php
                        }
                        ?>
                        <img src="<?php echo base_url("assets/donation/") . $paymentqr; ?>" style="width:400px" />

                        <h3 class="text-white text-center    " style="font-size: 30px">

                        </h3> 
                        <div class="row">
                            <?php
                            $donationattr = array("Name" => "name",
                                "Email" => "email",
                                "Contact No." => "contact_no",
                                "Message" => "message",
                                "Payment Type" => "payment_type",
                                "Donation Amount" => "amount",
                            );
                            foreach ($donationattr as $key => $value) {
                                ?>
                                <div class="col-md-6 text-right">
                                    <?php echo $key; ?>
                                </div>
                                <div class="col-md-6 text-left"><?php
                                    if ($value != "amount") {
                                        echo $donation[$value];
                                    } else {
                                        echo "{{" . $donation[$value] . "|currency:'" . globle_currency . "'}}";
                                    }
                                    ?></div>

                                <?php
                            }
                            ?>
                        </div>

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