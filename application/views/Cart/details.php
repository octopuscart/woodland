<?php
$this->load->view('layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/res/cart.css" type="text/css" />

<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/cart.jpg');   margin-top: -30px;    padding: 55px 0px;    background-position: -237px -135px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <span class="font-primary ls1 mb-2 color" style="font-size: 14px;">Top Services</span>
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;">Shopping Cart</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->
<!-- Cart Page Area Start Here -->


<section id="content" style="overflow: visible;">
    <div class="content-wrap nobottompadding">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="cart-page-area">
                    <div class="container" ng-if="globleCartData.total_quantity">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="cart-page-top table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <td class="cart-form-heading text_center" style="width: 50%" colspan="2">Product</td>
                                                <td class="cart-form-heading text_center">Price</td>
                                                <td class="cart-form-heading text_center">Quantity</td>
                                                <td class="cart-form-heading numbertext" style="width: 150px;">Total</td>
                                                <td class="cart-form-heading"></td>
                                            </tr>
                                        </thead>
                                        <tbody id="quantity-holder">
                                            <tr ng-repeat="product in globleCartData.products">
                                                <td class="cart-img-holder" style="       width: 80px;
                                                    text-align: center;">
                                                    <a href="#">
                                                        <img  src="{{product.file_name}}" alt=""  alt="cart" class="img-responsive cart_image_block">
                                                    </a>
                                                </td>
                                                <td  style="    border-left: 0px;">
                                                    <h3><a href="#">{{product.title}}</a>
                                                        <br/>
                                                        <small style="font-size: 10px">{{product.sku}}</small>
                                                    </h3>

                                                </td>
                                                <td class="amount text-center">{{product.price|currency:" "}}</td>
                                                <td class="quantity">

                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-secondary"  ng-click="updateCart(product, 'add')"><i class="fa fa-plus" aria-hidden="true" ></i></button>
                                                        <button type="button" class="btn btn-secondary">{{product.quantity}}</button>
                                                        <button type="button" class="btn btn-secondary"  ng-click="updateCart(product, 'sub')"><i class="fa fa-minus" aria-hidden="true" ></i></button>
                                                    </div>

                                                    
                                                </td>
                                                <td class="amount numbertext">{{product.total_price|currency:" "}}</td>
                                                <td class="dismiss"><a href="#"  ng-click="removeCart(product.product_id)"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                            </tr>


                                            <tr>
                                                <td colspan="4" class="text_right">
                                                    SUB TOTAL
                                                </td>
                                                <td class=" amount numbertext">
                                                    {{globleCartData.sub_total_price|currency:"<?php echo globle_currency; ?>"}}
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td colspan="4" class="text_right">
                                                    <p style="    float: left;
    line-height: 0px;
    color: red;
    font-weight: 800;
    margin-top: 0px;
    padding-top: 12px;">
                                                        Free Shipping In Tsim Sha Tsui
                                                    </p>  SHIPPING 
                                                </td>
                                                <td class=" amount">
                                                    {{globleCartData.shipping_price|currency:"<?php echo globle_currency; ?>"}}
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text_right">
                                                    TOTAL
                                                </td>
                                                <td class=" amount">
                                                    {{globleCartData.total_price|currency:"<?php echo globle_currency; ?>"}}
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td colspan="6" class="text_right">
                                                    <div class="proceed-button">

                                                        <a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-apply-coupon disabled" >Proceed to checkout</a>
                                                    </div> </td>

                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>

                    <?php
                    $this->load->view('Cart/noproduct');
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Page Area End Here -->
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>