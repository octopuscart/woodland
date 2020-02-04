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
            <div class="col-lg-3 col-md-3">
                <div class="sidebar hidden-after-desk">
                    <h2 class="title-sidebar">SHOP CATEGORIES</h2>
                    <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
                        <ul>
                            <?php
                            foreach ($categories as $catkey => $catvalue) {
                                ?>
                                <li>
                                    <a href="shop1.html">
                                        <?php echo $catvalue['category_name']; ?><span><i class="flaticon-next"></i></span>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <h2 class="title-sidebar">BEST PRODUCTS</h2>
                    <div class="best-products sidebar-section-margin">
                        <div class="media" ng-repeat="prd in offerProducts">
                            <a href="#" class="pull-left">
                                <div class="product-img-holder" style="background: url(<?php echo PRODUCTIMAGELINK; ?>{{prd.file_name}});      background-size: cover;
                                     background-position: center;height:60px;width:60px;">

                                </div >                           
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#" style="font-size: 13px;">{{prd.title}}</a></h3>
                                <p>{{prd.price|currency:"<?php echo globle_currency; ?> "}}</p>
                            </div>
                        </div>



                    </div>
                    <h2 class="title-sidebar">FILTER BY PRICE</h2>
                    <div id="price-range-wrapper" class="price-range-wrapper">
                        <div id="price-range-filter"></div>
                        <div class="price-range-select">
                            <div class="price-range" id="price-range-min"></div>
                            <div class="price-range" id="price-range-max"></div>
                        </div>
                        <button class="btn-services-shop-now" type="submit" value="Login">Filter</button>
                    </div>
                    <h2 class="title-sidebar">Product Tags</h2>
                    <div class="product-tags sidebar-section-margin">
                        <ul>
                            <?php
                            $taglist = [
                                'rice', 'flour', 'spices', 'dhal', 'dal', 'lentils', 'oilGrocery', 'Fruits', 'vegetables'
                            ];
                            foreach ($taglist as $key => $value) {
                                ?>
                                <li><a href="#" style="text-transform: uppercase"><?php echo $value; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">


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

                <div class="row inner-section-space-top"  style="padding-top: 10px;">
                    <!-- Tab panes -->
                    <div class="tab-content" >
                        <div role="tabpanel"  class="tab-pane active clear products-container content" id="gried-view"> 

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 animated productlistborder"  ng-repeat="(k, product) in productResults.products" ng-if="$index < 8">
                                <div class="product-box1" >
                                    <!--                                    <ul class="product-social">
                                                                            <li><a href="#" data-toggle="modal" data-target="#myModal" ng-click="viewShortDetails(product, '<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/' + product.product_id)"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>-->
                                    <div class="product-img-holder" style="background: url(<?php echo PRODUCTIMAGELINK; ?>{{product.file_name}});      background-size: cover;
                                         background-position: center;">

                                    </div>

                                    <div class="product-content-holder">
                                        <h3>
                                            <a href="#">{{product.title}}  <br>
                                                <span style="font-size: 12px">{{product.short_description}} </span>
                                            </a>
                                            <span>{{product.price|currency:"<?php echo globle_currency; ?> "}}</span>

                                        </h3>

                                        <div class="productbuttonscontainer">

                                            <button ng-click="addToCart(product.product_id, 1)" class="productbutton" style="    background: #d92229;
                                                    color: white;
                                                    border-color: #d92229;">Add To Cart</button>
                                            <button ng-click="askPriceSelection(product.product_id)" type="button" class="productbutton">Buy Now</button>

                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                            <div class="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="    background: #EEEEEE;
    height: auto;
    padding: 20px 0px;">
                                    <div class="banner-bottom-left col-lg-8 col-md-8 col-sm-8 col-xs-12"><a href="http://maharajamart.com/deal-of-the-week.html"><img src="http://maharajamart.com/pub/media/wysiwyg/WhatsApp_Image_2018-10-15_at_11.30.10_PM.jpeg" alt=""></a></div>
                                    <div class="banner-bottom-right col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="http://maharajamart.com/deal-of-the-day.html"><img class="img-responsive" src="http://maharajamart.com/pub/media/wysiwyg/WhatsApp_Image_2018-10-15_at_11.30.11_PM.jpeg" alt=""></a></div>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 animated productlistborder"  ng-repeat="(k, product) in productResults.products" ng-if="$index > 7">
                                <div class="product-box1" >
                                    <!--                                    <ul class="product-social">
                                                                            <li><a href="#" data-toggle="modal" data-target="#myModal" ng-click="viewShortDetails(product, '<?php echo site_url("Product/customizationRedirect/") ?><?php echo $custom_id; ?>/' + product.product_id)"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>-->
                                    <div class="product-img-holder" style="background: url(<?php echo PRODUCTIMAGELINK; ?>{{product.file_name}});      background-size: cover;
                                         background-position: center;">

                                    </div>

                                    <div class="product-content-holder">
                                        <h3>
                                            <a href="#">{{product.title}}  <br>
                                                <span style="font-size: 12px">{{product.short_description}} </span>
                                            </a>
                                            <span>{{product.price|currency:"<?php echo globle_currency; ?> "}}</span>

                                        </h3>

                                        <div class="productbuttonscontainer">

                                            <button ng-click="addToCart(product.product_id, 1)" class="productbutton" style="    background: #d92229;
                                                    color: white;
                                                    border-color: #d92229;">Add To Cart</button>
                                            <button ng-click="askPriceSelection(product.product_id)" type="button" class="productbutton">Buy Now</button>

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



</div>


<script>
    var category_id = <?php echo $category; ?>;</script>
<!--angular controllers-->

<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.pajinate.min.js"></script>

<script src="<?php echo base_url(); ?>assets/theme2/angular/productController.js"></script>


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