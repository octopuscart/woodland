<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<li><a href='" . site_url("Product/ProductList/" . $catid) . "'>$cattitle</a></li>";
    array_push($linklist, $liobj);
}



$image1 = "";
$image2 = "";
?>
<div style="opacity: 0;position: fixed;">
    {{gitem_price = <?php echo $item_price; ?>}}
    {{showmodel = 1}}
</div>

<style>
    .page_navigation a {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #000;
        color: white;
    }
    .page_navigation a.active_page {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #fff;
        color: black;
    }

    .colorblock{
        font-weight: 500;

        padding: 0px 10px;
        height: 13px;
        width: 100x;
        /* float: left; */
        margin-top: -71px;
        position: absolute;
        margin: auto;
        border: 1px solid #0000005e;
        border: 1px solid #0000005e;
        text-shadow: 0px 1px 4px #000;
        margin-top: -71px;
        margin-left: -7px;
    }


/*    .product-box1 .product-img-holder {
        min-height: 260px;
        display: block
    }*/



/*    .product-box1{
        min-height: 260px;

    }*/

</style>


<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>
                        <?php
                        echo $custom_item;
                        ?>
                    </h1>
                    <ul>
                        <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                        <?php echo count($linklist) ? "<b class='barcomb-list'>/</b>" : ''; ?>
                        <?php
                        echo implode("<b class='barcomb-list'>/</b>", $linklist)
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Inner Page Banner Area End Here -->
<!-- Shop Page Area Start Here -->
<div class="shop-page-area" ng-controller="ProductController">
    <div class="container" id="paging_container1">



        <div class="row"  >


            <div class="col-lg-12 col-md-12" ng-if="productResults.products.length" style="display: flex">
                <div class="sidebar hidden-after-desk animated slideInLeft" style="    width: 100%;padding-top: 10px;">

                    <?php
                    if (count($categories)) {
                        ?>
                        <h2 class="title-sidebar">SHOP CATEGORIES</h2>
                        <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
                            <ul>
                                <?php
                                foreach ($categories as $key => $value) {
                                    $subcategories = $value['sub_category'];
                                    ?>  

                                    <li>
                                        <a class="<?php echo $value['id'] == $category ? 'activecat' : ''; ?>"  href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value['id']); ?>">
                                            <i class="flaticon-left-arrow"></i>
                                            <?php echo $value['category_name']; ?>

                                            <?php
                                            if (count($subcategories)) {
                                                ?>
                                                <span>
                                                    <i class="flaticon-next"></i>
                                                </span>
                                                <?php
                                            }
                                            ?>
                                        </a>

                                    </li>
                                    <?php
                                }
                                ?>   
                            </ul>
                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >


                <div id="content1"  ng-if="productProcess.state == 1" style="padding: 100px 0px;"> 

                    <!-- Tesm Text -->
                    <section class="error-page text-center pad-t-b-130">
                        <div class="{{productResults.products.length?'container1':'container'}}"> 
                            <center>
                                <img src="<?php echo base_url() . 'assets/theme2/img/loader.gif' ?>">
                            </center>
                            <!-- Heading -->
                            <h1 style="font-size: 40px;text-align: center">Loading...</h1>
                        </div>
                    </section>

                </div>

                <div class="row inner-section-space-top" ng-if="productProcess.state == 2" style="padding-top: 10px;">
                    <!-- Tab panes -->
                    <div class="tab-content" >
                        <div role="tabpanel"  class="tab-pane active clear products-container content" id="gried-view"> 

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 animated zoomIn"  ng-repeat="(k, product) in productResults.products">
                                <div class="product-box1" >
                                    <ul class="product-social">
                                        <li><a href="#" data-toggle="modal" data-target="#myModal" ng-click="viewShortDetails(product, '<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/' + product.product_id)"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder" style="background: url(https://files.costcokart.com/bespoke/{{product.folder}}.jpg);    background-size: 300px;
                                         background-position: -20px -20px;">

                                    </div>
                                    <div class="product-content-holder">
                                        <h3>
                                            <a href="#">{{product.title}}  <br>
                                                <span style="font-size: 12px">{{product.short_description}} </span>
                                            </a>
                                        </h3>
                                        <div class="productbuttonscontainer">

                                            <a href="<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/{{product.product_id}}" class="productbutton">Design Now</a>
                                            <button ng-click="askPriceSelection(product.product_id)" type="button" class="productbutton">Price Enq.</button>

                                        </div>  
                                    </div>
                                </div>
                            </div>



                            <div style="clear: both"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center>
                            <div class="page_navigation"></div>
                        </center>
                        <div style="clear: both"></div>
                    </div>
                </div>

            </div>

        </div>



        <div id="content"  ng-if="productProcess.state == 0"> 
            <div ng-if="checkproduct == 0">
                <!-- Tesm Text -->
                <section class="error-page text-center pad-t-b-130">
                    <div class="container "> 

                        <!-- Heading -->
                        <h1 style="font-size: 40px">No Product Found</h1>
                        <p>Products Will Comming Soon</p>
                        <hr class="dotted">
                        <a href="<?php echo site_url(); ?>" class="woocommerce-Button button btn-shop-now-fill">BACK TO HOME</a>
                    </div>
                </section>
            </div>
        </div>





    </div>
    <!-- Modal -->
    <div class="modal  fade" id="productprice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">
                        Price Enquiry For 
                        <?php
                        echo $custom_item;
                        ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>



                <!-- Cart Details -->
                <div class="modal-body checkout-form">
                    <div class="custom_block_item">
                        <?php
                        $citem_id = $custom_id;
                        ?>

                        <div class="row cart-details" >


                            <div class="col-sm-12 col-md-3" ng-repeat="product in askpricedata" ng-if="product.item_id == '<?php echo $citem_id; ?>'">
                                <div class="thumbnail">
                                    <img src="https://files.costcokart.com/bespoke/{{product.folder}}.jpg" alt="" style="width: auto;" alt="...">

                                    <div class="caption">
                                        <h5 style="font-size:15px;" class="text-center m_bottom_10">{{product.title}}</h5>
                                        <p style="margin: 0px;"><a href="#."  ng-click="removePriceData(product.id)" class="btn btn-danger btn-xs btn-block" style="    padding: 10px;line-height:10px;"><i class="fa fa-remove d_inline_m fs_large" ></i> Remove</a> </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 askpriceform">
                                <form method="post" action="#">
                                    <div style="margin-top:10px;">
                                        <input type="hidden" name="item" value="<?php echo $custom_item; ?>" />
                                        <input type="hidden" name="item_id" value="<?php echo $citem_id; ?>" />

                                        <span ng-repeat="product in askpricedata">
                                            <input type="hidden" name="productid[]" value="{{product.id}}" />
                                        </span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10">
                                                <input type="text" name="last_name" placeholder="Last Name*" class="form-control" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 w_xs_full m_xs_bottom_10" >
                                                <input type="text" name="first_name" placeholder="First Name*" class="form-control" required="">
                                            </div>

                                        </div>
                                        <input type="email" name="email" placeholder="Email*" class="form-control" required="">


                                        <input type="tel" name="contact" placeholder="Contact No." class="form-control">


                                        <button type="submit" name="priceenquiry" class="btn btn-danger">Submit</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Add More</button>


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


<script>
    var category_id = <?php echo $category; ?>;</script>
<!--angular controllers-->

<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.pajinate.min.js"></script>

<script src="<?php echo base_url(); ?>assets/theme2/angular/productController.js"></script>
<!-- Modal Dialog Box Start Here-->
<div id="myModal" class="modal fade" role="dialog" ng-if="showmodel">
    <div class="modal-dialog">
        <div class="modal-body ">
            <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
            <div class="product-details1-area">
                <div class="product-details-info-area">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="inner-product-details-left">
                                <div class="tab-content">
                                    <div id="metro-related1" class="tab-pane fade active in" ng-if="projectDetailsModel.productobj.file_name">
                                        <a href="#">
                                            <div class="product_image_back popup_fabric" style="background: url(<?php
                                            switch ($custom_id) {
                                                case "1":
                                                    ?>
                                                         <?php echo custome_image_server; ?>/shirt/output/{{projectDetailsModel.productobj.folder}}/shirt_model10001.png<?php
                                                         break;
                                                     case "2":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/s1_master_style60001.png"<?php
                                                         break;
                                                     case "3":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/pant_style10001.png<?php
                                                         break;
                                                     case "4":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/s1_master_style60001.png<?php
                                                         break;
                                                     default:
                                                         echo $custom_item;
                                                 }
                                                 ?>)"></div>
                                                                                         <!--<img class="img-responsive" src="<?php echo imageserver; ?>/{{projectDetailsModel.productobj.file_name}}" alt="single">-->
                                        </a>
                                    </div>
                                    <div id="metro-related2" class="tab-pane fade" ng-if="projectDetailsModel.productobj.file_name1">
                                        <a href="#">
                                            <div class="product_image_back popup_fabric" style="background: url(<?php
                                            switch ($custom_id) {
                                                case "1":
                                                    ?>
                                                         <?php echo custome_image_server; ?>/shirt/output/{{projectDetailsModel.productobj.folder}}/shirt_model20001.png<?php
                                                         break;
                                                     case "2":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/style_buttons.png"<?php
                                                         break;
                                                     case "3":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/pant_style20001.png<?php
                                                         break;
                                                     case "4":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/style_buttons.png<?php
                                                         break;
                                                     default:
                                                         echo $custom_item;
                                                 }
                                                 ?>);"></div>
                                                                                         <!--<img class="img-responsive" src="<?php echo imageserver; ?>/{{projectDetailsModel.productobj.file_name1}}" alt="single">-->
                                        </a>
                                    </div>
                                    <div id="metro-related3" class="tab-pane fade" ng-if="projectDetailsModel.productobj.file_name2">
                                        <a href="#">
                                            <div class="product_image_back popup_fabric" style="background: url(<?php echo custome_image_server; ?>/coman/resize/output/{{projectDetailsModel.productobj.folder}}.jpg);background-repeat: repeat!important;"></div>
                                                                                         <!--<img class="img-responsive" src="<?php echo imageserver; ?>/{{projectDetailsModel.productobj.file_name2}}" alt="single">-->
                                        </a>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <ul>
                                    <li class="active" ng-if="projectDetailsModel.productobj.file_name">
                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related1" style="width:75px;">
                                            <div class="product_image_back" style="background: url(<?php
                                            switch ($custom_id) {
                                                case "1":
                                                    ?>
                                                         <?php echo custome_image_server; ?>/shirt/output/{{projectDetailsModel.productobj.folder}}/shirt_model10001.png<?php
                                                         break;
                                                     case "2":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/s1_master_style60001.png"<?php
                                                         break;
                                                     case "3":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/pant_style10001.png<?php
                                                         break;
                                                     case "4":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/s1_master_style60001.png<?php
                                                         break;
                                                     default:
                                                         echo $custom_item;
                                                 }
                                                 ?>);height: 75px"></div>
                                            <!--<img class="img-responsive" src="<?php echo imageserver; ?>/{{projectDetailsModel.productobj.file_name}}" alt="related1">-->
                                        </a>
                                    </li>
                                    <li ng-if="projectDetailsModel.productobj.file_name1">
                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related2" style="width:75px;">
                                            <div class="product_image_back" style="background: url(<?php
                                            switch ($custom_id) {
                                                case "1":
                                                    ?>
                                                         <?php echo custome_image_server; ?>/shirt/output/{{projectDetailsModel.productobj.folder}}/shirt_model20001.png<?php
                                                         break;
                                                     case "2":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/style_buttons.png"<?php
                                                         break;
                                                     case "3":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/pant_style20001.png<?php
                                                         break;
                                                     case "4":
                                                         ?>
                                                         <?php echo custome_image_server; ?>/jacket/output/{{projectDetailsModel.productobj.folder}}/style_buttons.png<?php
                                                         break;
                                                     default:
                                                         echo $custom_item;
                                                 }
                                                 ?>);height: 75px"></div>
                                        </a>
                                    </li>
                                    <li ng-if="projectDetailsModel.productobj.file_name2">
                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related3" style="width:75px;">
                                            <div class="product_image_back" style="background: url(<?php echo custome_image_server; ?>/coman/resize/output/{{projectDetailsModel.productobj.folder}}.jpg);height: 75px"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=" col-md-3 col-sm-12 col-xs-12">
                            <div class="inner-product-details-right">
                                <h3 style="font-size: 20px;">{{projectDetailsModel.productobj.title}}</h3> 
                                <ul>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                </ul>
                                <p style="font-size: 20px;" class="price">{{gitem_price|currency:"<?php echo globle_currency; ?> "}}</p>
                                <p>{{projectDetailsModel.productobj.short_description}}</p>
                                <div class="product-details-content">
                                    <p><span class="model_tab_title">SKU:</span><br/> {{projectDetailsModel.productobj.title}}</p>
                                    <p><span class="model_tab_title">Availability:</span><br/> {{projectDetailsModel.productobj.stock_status}}</p>
                                    <p ng-if="projectDetailsModel.productobj.attr.length"><span class="model_tab_title" >Color(s)</span><br/> <span class="colorblock" style="background: {{projectDetailsModel.productobj.attr[0]['Colors']}};    position: relative;margin: 0;"></span></p>
                                </div>


                                <!--                                <ul class="product-details-social">
                                                                    <li>Share: {{projectDetailsModel.quantity}}</li>
                                                                    <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                                                    <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                                                    <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                                                </ul>-->
                                <ul class="inner-product-details-cart">
                                    <li>
                                        <!--<a href="#" ng-click="addToCart(projectDetailsModel.productobj.product_id, projectDetailsModel.quantity)">Add To Cart</a>-->
                                        <a href="{{projectDetailsModel.link}}" >Customize Now</a>
                                    </li>
                                    <!--                                    <li>
                                                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                                                <input type="text" placeholder="1" value="1" id="model_quantity" class="form-control quantity-input" name="quantity">
                                                                                <div class="input-group-btn-vertical">
                                                                                    <button type="button" class="btn btn-default quantity-plus" ng-click="modelProductQuantity()"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                                                    <button type="button" class="btn btn-default quantity-minus"  ng-click="modelProductQuantity()"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </li>-->
                                                                        <!--<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        <div class="modal-footer">
                    <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a>
                </div>-->
    </div>
</div>

<script>
    var category_id = <?php echo $category; ?>;
    var custom_id = <?php echo $custom_id; ?>;</script>
<?php
$this->load->view('layout/footer');
?>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.pajinate.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>