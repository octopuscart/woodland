<?php
$this->load->view('layout/header');
?>




<div>

    <!-- Inner Page Banner Area Start Here -->
    <section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px 18px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
        <div class="container clearfix">
            <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 40px;"> 
                Refund Policy
            </h1>

        </div>
    </section>
    <!-- Inner Page Banner Area End Here -->

    <section id="content" style="overflow: visible; margin-bottom: 192px!important;">
        <div class="content-wrap1 charity-block">
            <div class="section nomargin clearfix" style="padding: 10px 20px; background:#fff; background-size: 100% auto">
                <div class="container clearfix">

                    <div class="row">
                        <div class="heading-block nobottomborder bottommargin-sm mb-1" style="margin: 19px 0 0px!important;">
<!--                            <h2 class="font-secondary color nott" style="    color: #ca0922!important;">
                                Refund Policy
                            </h2>-->
                        </div>
                        <div class="feature-box media-box" style="">
                            <b>Online Payment Orders</b>
                            <p>
                                You have the right to a refund for a cancelled Order only the restaurant has not yet accepted your Order. 
                                Should you still decide to cancel your Order after it has been accepted by the restaurant, 
                                you understand that no refunds (whether in whole or in part) will be issued to you and you forfeit the delivery of your cancelled Order.                             
                            </p>   
                            <p>
                                We may require you to provide additional information or supporting documents prior to processing any refund,
                                including picture proof of physical receipts for Pick-Up Orders. We may, 
                                in our sole discretion, refuse to process any refund if you fail to provide such additional information or supporting documents.                             </p>   
                            <p>
We reserves the right to cancel any Order and/or suspend, deactivate or terminate your account in its sole discretion if it reasonably suspects or detects fraudulent behavior or activity associated with your account and/or with your Order.                            </p>      
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </section>



    <div class="">
        <?php
        $this->load->view('layout/contactfooter');
        ?>
    </div>

</div>

<script src="<?php echo base_url(); ?>assets/theme2/angular/ng-donation.js"></script>

<?php
$this->load->view('layout/footer');
?>
