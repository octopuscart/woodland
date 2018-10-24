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
        <div class="row"  ng-if="productResults.products.length">
            <div class="col-lg-3 col-md-3">
                <div class="sidebar hidden-after-desk">

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
                                        <a href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value['id']); ?>">
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
                                        <?php
                                        if (count($subcategories)) {
                                            ?>
                                            <ul class="dropdown-menu">
                                                <?php
                                                foreach ($subcategories as $key1 => $value1) {
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo site_url("Product/ProductList/" . $value1['id']); ?>">
                                                            <?php echo $value1['category_name']; ?>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                        }
                                        ?>
                                    </li>
                                    <?php
                                }
                                ?>   
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                    <!--                    <h2 class="title-sidebar product_attr_h2">FILTER BY PRICE</h2>
                                        <div id="price-range-wrapper" class="price-range-wrapper">
                                            <div id="price-range-filter"></div>
                                            <div class="price-range-select">
                                                <div class="price-range" id="price-range-min">{{productResults.price.minprice}}</div>
                                                <div class="price-range" id="price-range-max">{{productResults.price.maxprice}}</div>
                                            </div>
                                            <button class="btn-services-shop-now" type="button" ng-click="filterPrice()">Filter</button>
                                        </div>-->

                    <div class="product_attr" ng-repeat="(attrk, attrv) in productResults.attributes" >
                        <!-- HEADING -->
                        
                        <h2 class="title-sidebar product_attr_h2">{{attrv.title}}</h2>

                        <!-- COLORE -->
                        <ul class="cate" ng-if='attrv.widget == "color"'>
                            <li ng-repeat="atv in attrv" ng-if='atv.product_count'>
                                <a href="#.">
                                    <label style="font-weight: 500;background: {{atv.additional_value}};padding: 0px 5px;float: left;
    margin-right: 5px;border: 1px solid #0000005e;border: 1px solid #0000005e;
    text-shadow: 0px 1px 4px #000;">
                                        <input type="checkbox"  ng-model="atv.checked" ng-click="attributeProductGet(atv)" style="opacity: 0;"> 
                                        
                                        <i class="fa fa-check" ng-if="atv.checked" style="    position: absolute;
    margin-top: -22px;
    color: #fff;"></i>
                                        <!--{{atv.attribute_value}} ({{atv.product_count}})-->
                                    </label>
                                </a>

                                    <!--<a href="#."><input type="checkbox">{{atv.attribute_value}} <span>(32) </span></a>-->
                            </li>
                        </ul>
                    </div>





                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                <div class="row inner-section-space-top">
                    <!-- Tab panes -->
                    <div class="tab-content" >
                        <div role="tabpanel"  class="tab-pane active clear products-container content" id="gried-view"> 

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6"  ng-repeat="(k, product) in productResults.products">
                                <div class="product-box1" style="height: 434px;">
                                    <ul class="product-social">
                                         <li><a href="<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/{{product.product_id}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal" ng-click="viewShortDetails(product, '<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/' + product.product_id)"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                   </ul>
                                    <div class="product-img-holder">
                                        <a href="#">
                                            <?php
                                            switch ($custom_id) {
                                                case "1":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/shirt/output/{{product.folder}}/shirt_model10001.png" alt="product">
                                                    <?php
                                                    break;
                                                case "2":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">

                                                    <?php
                                                    break;
                                                case "3":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/pant_style10001.png" alt="product">
                                                    <?php
                                                    break;
                                                case "4":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">
                                                    <?php
                                                    break;
                                                default:
                                                    echo $custom_item;
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3>
                                            <a href="#">{{product.title}}  <br>
                                                <span style="font-size: 12px">{{product.short_description}} </span>
                                            </a>
                                        </h3>
                                        <span>{{<?php echo $item_price; ?>|currency:"<?php echo globle_currency; ?> "}}</span>
                                    </div>
                                </div>
                            </div>




<!--                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6"  ng-repeat="(k, product) in productResults.products">
                                <div class="product-box1" style="min-height: 382px;">
                                    <ul class="product-social" style="top:0px;    height: 264px;padding:40% 0px;
                                        background-size: cover;">
                                                                            <li><a href="#" ng-click="addToCart(product.product_id, 1)"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/{{product.product_id}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal" ng-click="viewShortDetails(product, '<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/' + product.product_id)"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <div class="hot-sale" ng-if="product.sale_price > 0">
                                            <span>Sale</span>
                                        </div>
                                        <a href="#">

                                            <?php
                                            switch ($custom_id) {
                                                case "1":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/shirt/output/{{product.folder}}/shirt_model10001.png" alt="product">
                                                    <?php
                                                    break;
                                                case "2":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">

                                                    <?php
                                                    break;
                                                case "3":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/pant_style10001.png" alt="product">
                                                    <?php
                                                    break;
                                                case "4":
                                                    ?>
                                                    <img class="img-responsive" src="<?php echo custome_image_server; ?>/jacket/output/{{product.folder}}/s1_master_style60001.png" alt="product">
                                                    <?php
                                                    break;
                                                default:
                                                    echo $custom_item;
                                            }
                                            ?>

                                            


                                            <div class="product_image_back product_image_back_grid" style="background: url(<?php echo imageserver; ?>{{product.file_name2}});"></div>

                                        </a>
                                    </div>
                                    <div class="product-content-holder product_details_height">
                                        <h3><a href="#">{{product.title}} 
                                                <br>
                                                <span style="font-size: 12px">{{product.short_description}} </span>
                                                <br>
                                                <p>{{product.attr}} </p>
                                            </a></h3>
                                        <span>
                                            <span ng-if="product.sale_price > 0"> {{product.regular_price|currency:"<?php echo globle_currency; ?> "}}</span>
                                            {{<?php echo $item_price; ?>|currency:"<?php echo globle_currency; ?> "}}</span>
                                    </div>
                                </div>
                            </div>-->

                            <div style="clear: both"></div>
                        </div>


                        <!-- List Style -->
<!--                        <div role="tabpanel" class="tab-pane clear products-container" id="list-view">


                            <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12 product_list_style"  ng-repeat="(k, product) in productResults.products">
                                <div class="product-box2" style="height: auto;">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="img-responsive" src="img/product/grid/1.jpg" alt="product" />
                                            <div class="product_image_back product_image_back_list" style="background: url(<?php echo custome_image_server; ?>/pant/output/{{product.folder}}/pant_style20001.png);"></div>

                                        </a>
                                        <div class="media-body">
                                            <div class="product-box2-content ">
                                                <h3><a href="#">{{product.title}} </a></h3>
                                                <span>{{product.price|currency:"<?php echo globle_currency; ?> "}}</span>
                                                <p>
                                                    {{product.short_description}}
                                                    <br/>
                                                    {{product.attr}} 
                                                </p>
                                            </div>
                                            <ul class="product-box2-cart" style="    margin-top: 0px;">
                                                <li><a href="#" ng-click="addToCart(product.product_id, 1)">Add To Cart</a></li>
                                                <li><a href="<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/{{product.product_id}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Customize Now</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal" ng-click="viewShortDetails(product, '<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/' + product.product_id)"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                            </div>

                        </div>-->
                    </div>
                    <div class="col-md-12">
                        <center>
                            <div class="page_navigation "></div>
                        </center>
                        <div style="clear: both"></div>
                    </div>
                </div>
                <!--                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <ul class="mypagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                        </ul>
                                    </div>
                                </div>-->
            </div>

        </div>



        <div id="content"  ng-if="!productResults.products.length"> 
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
</div>


<script>
            var category_id = <?php echo $category; ?>;</script>
<!--angular controllers-->

<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.pajinate.min.js"></script>

<script src="<?php echo base_url(); ?>assets/theme2/angular/productController.js"></script>



<?php
$this->load->view('layout/footer');
?>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.pajinate.min.js"></script>

<script type="text/javascript">
            $(document).ready(function () {

    });
</script>