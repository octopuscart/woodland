<?php
$this->load->view('layout/header');
?>

<style>




    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;
        height: 150px;


    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;


    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }

</style>






<!-- Inner Page Banner Area Start Here -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/res/cart.css" type="text/css" />

<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/cart.jpg');   margin-top: -30px;    padding: 55px 0px;    background-position: -237px -135px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <span class="font-primary ls1 mb-2 color" style="font-size: 14px;">Top Services</span>
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;">Shopping Cart</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<!-- Content -->

<section id="content" style="overflow: visible;">
    <div class="content-wrap nobottompadding">
        <div class="container clearfix">
            <div class="row clearfix">

                <?php
                $this->load->view('Cart/commanmessage');
                ?>
                <div class="cart-page-area">
                    <div class="container" ng-if="globleCartData.total_quantity">
                        <div class="row">
                            <?php
                            $this->load->view('Cart/itemblock', array('vtype' => 'items'));
                            ?>

                            <?php
                            $this->load->view('Cart/itemblock', array('vtype' => 'shipping'));
                            ?>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card card-default">
                                    <div class="card-heading" role="tab" id="headingOne">
                                        <h4 class="card-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="fa-stack">
                                                    <i class="fa fa-money fa-stack-1x"></i>
                                                    <i class="ion-bag fa-stack-1x "></i>
                                                </span>   Payment Method
                                                <span style="float: right; line-height: 29px;font-size: 12px;" class="ng-binding">
                                                    <?php echo DEFAULT_PAYMENT_MODE; ?>
                                                </span> 
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Address Details -->
                                    <div class="card-body">
                                        <div class="order-sheet product-details2-area" style="margin-top: 5px;padding:0">
                                            <form action="#" method="post">
                                                <div class="product-details-tab-area" style="margin: 0;">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <?php
                                                                if (PAYMENT_MODE_COD == 'on') {
                                                                    ?>
                                                                    <li class="nav-item"><a href="#cash" class="nav-link <?php echo DEFAULT_PAYMENT_MODE == 'Cash On Delivery' ? 'active' : ''; ?> " data-toggle="tab" aria-expanded="false">Cash On Delivery</a></li>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <?php
                                                                if (PAYMENT_MODE_PAYPAL == 'on') {
                                                                    ?>
                                                                    <li class=" nav-item"><a href="#paypal" class="nav-link <?php echo DEFAULT_PAYMENT_MODE == 'PayPal' ? 'active' : ''; ?>" data-toggle="tab" aria-expanded="false">PayPal</a></li>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <?php
                                                                if (PAYMENT_MODE_BANK == 'on') {
                                                                    ?>
                                                                    <li class="nav-item"><a href="#bank" class="nav-link <?php echo DEFAULT_PAYMENT_MODE == 'Bank Transfer' ? 'active' : ''; ?> " data-toggle="tab" aria-expanded="true">Bank Transfer</a></li>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_CHEQUE == 'on') {
                                                                    ?>
                                                                    <li class="nav-item"><a href="#cheque" class="nav-link <?php echo DEFAULT_PAYMENT_MODE == 'Cheque On Delivery' ? 'active' : ''; ?> " data-toggle="tab" aria-expanded="false">Cheque On Delivery</a></li>
                                                                    <?php
                                                                }
                                                                ?>


                                                                <li class="nav-item"><a href="#alipay" class="nav-link " data-toggle="tab" aria-expanded="false">Alipay</a></li>
                                                                <li class="nav-item"><a href="#wechat" class="nav-link " data-toggle="tab" aria-expanded="false">WeChat</a></li>
                                                                <li class="nav-item"><a href="#payme" class="nav-link " data-toggle="tab" aria-expanded="false">PayMe</a></li>


                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="tab-content">
                                                                <?php
                                                                if (PAYMENT_MODE_PAYPAL == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'PayPal' ? 'show active' : ''; ?>"  id="paypal">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/paypal.png" style="height: 100px;">                
                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart" . $checkoutmode . "/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">

                                                                                                <a href=" <?php echo site_url("PayPalPayment" . $checkoutmode . "/process"); ?>" class="btn-apply-coupon checkout_button_next disabled"  onclick="confirmOrder()">Place Order <i class="fa fa-arrow-right"></i></a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_BANK == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'Bank Transfer' ? 'show active' : ''; ?>" id="bank">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/bank.png" style="height: 100px;">                
                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">
                                                                                                <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Bank Transfer" onclick="confirmOrder()">
                                                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_COD == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'Cash On Delivery' ? 'show active' : ''; ?>" id="cash">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/cod.png" style="height: 293px;">                

                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">
                                                                                                <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Cash On Delivery">
                                                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                                                </button>                                                                  
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <?php
                                                                if (PAYMENT_MODE_CHEQUE == 'on') {
                                                                    ?>
                                                                    <div class="tab-pane fade <?php echo DEFAULT_PAYMENT_MODE == 'Cheque On Delivery' ? 'show active' : ''; ?>" id="cheque">
                                                                        <p>
                                                                            <img src="<?php echo base_url(); ?>assets/paymentstatus/chod.png" style="height: 100px;">                

                                                                        </p>
                                                                        <div class="cart-page-top table-responsive">
                                                                            <table class="table table-hover">
                                                                                <tbody id="quantity-holder">
                                                                                    <tr>
                                                                                        <td colspan="4" class="text_right">
                                                                                            <div class="proceed-button pull-left " >
                                                                                                <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                            </div>
                                                                                            <div class="proceed-button pull-right ">
                                                                                                <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Cheque On Delivery">
                                                                                                    Place Order <i class="fa fa-arrow-right"></i>
                                                                                                </button>                                                                   
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>



                                                                <div class="tab-pane fade " id="payme">
                                                                    <div class='col-md-12'>

                                                                        <p style='font-size: 19px;
                                                                           font-weight: 600;
                                                                           color: red;'>Pay Using PayMe HKQR code and send us screenshot of payment, will proceed your order after confirmation.</p>
                                                                    </div>
                                                                    <div class='row' style='text-align: center;'>
                                                                        <div class='col-md-12'>
                                                                            <p>
                                                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/payme2.jpg" style="height: 400px;">                

                                                                            </p>
                                                                        </div>


                                                                        <div class='col-md-12' style="margin-bottom: 10px;">
                                                                            <div class="proceed-button" style="text-align: center;">
                                                                                <button type="button" class="btn-apply-coupon checkout_button_pre " onclick="myFunction()" style="background: #da0010;">Copy Payment Link</button>
                                                                            </div>
                                                                            <br/>

                                                                            <input type="text" class="form-control"  value="https://19981.paymebiz.hsbc.com.hk/payments/qr-codes/Evyc1DNL6brCDb3UaRPXF" id="myInput" style="border: none;
                                                                                   text-align: center;">

                                                                        </div>



                                                                    </div>
                                                                    <div class="cart-page-top table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tbody id="quantity-holder">
                                                                                <tr>
                                                                                    <td colspan="4" class="text_right">
                                                                                        <div class="proceed-button pull-left " >
                                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                        </div>
                                                                                        <div class="proceed-button pull-right ">
                                                                                            <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="PayMe">
                                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                                            </button>                                                                   
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade " id="alipay">

                                                                    <div class='row' style='text-align: center;'>
                                                                        <div class='col-md-12'>
                                                                            <p>
                                                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/alipay.jpg" style="height: 100px;">                

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="cart-page-top table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tbody id="quantity-holder">
                                                                                <tr>
                                                                                    <td colspan="4" class="text_right">
                                                                                        <div class="proceed-button pull-left " >
                                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                        </div>
                                                                                        <div class="proceed-button pull-right ">
                                                                                            <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="Alipay">
                                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                                            </button>                                                                   
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                </div>
                                                                
                                                                 <div class="tab-pane fade " id="wechat">

                                                                    <div class='row' style='text-align: center;'>
                                                                        <div class='col-md-12'>
                                                                            <p>
                                                                                <img src="<?php echo base_url(); ?>assets/paymentstatus/wechat.jpg" style="height: 100px;">                

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="cart-page-top table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tbody id="quantity-holder">
                                                                                <tr>
                                                                                    <td colspan="4" class="text_right">
                                                                                        <div class="proceed-button pull-left " >
                                                                                            <a href=" <?php echo site_url("Cart/checkoutShipping"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Shipping Address</a>
                                                                                        </div>
                                                                                        <div class="proceed-button pull-right ">
                                                                                            <button type="submit" name="place_order" class="btn-apply-coupon checkout_button_next disabled"  value="WeChat">
                                                                                                Place Order <i class="fa fa-arrow-right"></i>
                                                                                            </button>                                                                   
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>
                                                                </div>

                                                            

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
</section>

<?php
$this->load->view('Cart/noproduct');
?>







<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
                                                                                    var avaiblecredits = 0;
                                                                                    function confirmOrder() {
                                                                                        swal({
                                                                                            title: 'Processing Order',
                                                                                            onOpen: function () {
                                                                                                swal.showLoading()
                                                                                            }
                                                                                        });
                                                                                    }


                                                                                    function myFunction() {
                                                                                        /* Get the text field */
                                                                                        var copyText = document.getElementById("myInput");

                                                                                        /* Select the text field */
                                                                                        copyText.select();


                                                                                        /* Copy the text inside the text field */
                                                                                        document.execCommand("copy");

                                                                                        /* Alert the copied text */
                                                                                        alert("Copied the link: " + copyText.value);
                                                                                    }
</script>

<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>