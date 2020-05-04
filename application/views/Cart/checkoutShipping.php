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
        height: 200px;


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

    .freeshippingnote{
        color:red;
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
                <div class="cart-page-area">
                    <div class="container" ng-if="globleCartData.total_quantity">
                        <div class="row">
                            <?php
                            $this->load->view('Cart/itemblock', array('vtype' => 'items'));
                            ?>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card card-default">
                                    <div class="card-heading" role="tab" id="headingOne">
                                        <h4 class="card-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="fa-stack">
                                                    <i class="fa fa-map-marker fa-stack-1x"></i>
                                                    <i class="ion-bag fa-stack-1x "></i>
                                                </span>   Shopping Address
                                                <span style="float: right; line-height: 29px;" class="ng-binding">
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#changeAddress" style="margin-left: 20px;padding: 5px 11px;color:white;"><i class="fa fa-plus"></i> Add New</button>
                                                </span> 
                                            </a>
                                        </h4>
                                    </div>
                                    <!-- Address Details -->
                                    <div class="card-body">
                                        <div class="order-sheet" style="margin-top: 30px">


                                            <div class="row" >  
                                                <div class="col-md-12">

                                                    <?php
                                                    if (count($user_address_details)) {
                                                        ?>
                                                        <?php
                                                        foreach ($user_address_details as $key => $value) {
                                                            ?>
                                                            <div class="col-md-6">
                                                                <?php if ($value['status'] == 'default') { ?> 
                                                                    <div class="checkcart <?php echo $value['status']; ?> ">
                                                                        <i class="fa fa-check fa-2x"></i>
                                                                    </div>
                                                                <?php } ?> 
                                                                <div class=" address_block <?php echo $value['status']; ?> ">
                                                                    <p>
                                                                        <?php echo $value['address1']; ?>,<br/>
                                                                        <?php echo $value['address2']; ?>,<br/>
                                                                        <?php echo $value['city']; ?><br/>
                                                                        <?php echo $value['zipcode'] == 'on' ? '<span class="freeshippingnote">Free shipping at Tsim Sha Tsui<span>' : ''; ?>
                                                                        <br/>
                                                                        <?php if ($value['status'] != 'default') { ?> 
                                                                            <a href="<?php echo site_url("Cart/checkoutShipping/?setAddress=" . $value['id']); ?>" class="btn-send-message address_button btn-small " style="    padding: 0px 10px;
                                                                               color: white!important;">Select Address</a>
                                                                           <?php } ?> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <h4 class="text-center "  style="color: red"><i class="fa fa-warning"></i> Please Add Shipping Address</h4>

                                                        <?php
                                                    }
                                                    ?>
                                                </div>                            

                                            </div>
                                        </div>
                                        <div class="cart-page-top table-responsive">
                                            <table class="table table-hover">
                                                <tbody id="quantity-holder">
                                                    <tr>
                                                        <td colspan="4" class="text_right">
                                                            <div class="proceed-button pull-left " >
                                                                <a href=" <?php echo site_url("Cart/checkoutInit"); ?>" class="btn-apply-coupon checkout_button_pre disabled" ><i class="fa fa-arrow-left"></i> View Cart</a>
                                                            </div>
                                                            <div class="proceed-button pull-right ">
                                                                <a href=" <?php echo site_url("Cart/checkoutPayment"); ?>" class="btn-apply-coupon checkout_button_next disabled" >Choose Payment Method <i class="fa fa-arrow-right"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php
                            $this->load->view('Cart/itemblock', array('vtype' => 'payment'));
                            ?>
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



<!-- Modal -->
<div class="modal  fade" id="changeAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
    <div class="modal-dialog " role="document">
        <form action="#" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Add New Address</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body checkout-form">

                    <table class="table">
                        <tbody>
                         
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Address</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="address1" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>

                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Landmark</b></span>
                                </td>
                                <td>
                                    <input type="text" required="" name="address2" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Town/City</b></span>

                                </td>
                                <td>
                                    <input type="hidden" required="" name="state" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">




                                    <input type="hidden" required="" name="country" class="form-control" value="" style="height: 10%;">


                                    <input type="text" required="" name="city" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;">
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="line-height: 25px;">
                                    <span for="name" class=""><b>Area</b></span>
                                </td>
                                <td>
                                    <select name="zipcode" class="form-control woocommerce-Input woocommerce-Input--email input-text" value="" style="height: 10%;    font-size: 12px;">
                                        <option value="Tsim Sha Tsui">Tsim Sha Tsui (For Free Shipping)</option>
                                        <option value="Whampoa">Whampoa Garden ($40 On Order value < $400)</option>
                                    </select>
                                </td>
                            </tr>
                           


                        </tbody>
                    </table>


                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_address" class="btn btn-primary btn-small" style="color: white">Add Address</button>
                </div>
            </div>
        </form>
    </div>
</div>









<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
                        var avaiblecredits = 0;
</script>

<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>