<?php
$this->load->view('layout/header');
?>


<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="    background: url(<?php echo base_url(); ?>assets/images/shop2.jpg);
     background-size: cover;
     background-position: 459px -1031px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page Area Start Here -->
<!-- Single Blog Page Area Start Here -->
<div class="single-blog-page-area" style="padding: 50px 0 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="single-blog-details-content">
                    

                    <p>
                        Maharaja Mart Ltd formerly known as Maharaja's Indian Emporium. was established in 1999 at Kowloon, Hong Kong to serve the South Asians Ethnic necessities such as grocery, sweets, savories, fresh vegetables and fruits, pooja items, traditional utensils, grinders, mixers, handicrafts and much more. Having the former name Maharaja’s Indian Emporium, Maharaja Mart is the first one to introduce many new items exclusively for South Indian population.                    </p>

                    <p>
                        Our home delivery service is very popular and cater to all territories in and around Hong Kong. Home delivery service is provided free of charge for orders over HK$300.                    </p>

                    <p>
                        We are the ONLY Ethnic Grocery Store to accept payments by VISA / MASTER / AMEX credit cards. We also accept Bank Transfers. Payment can also be settled at the store by cash, cheque or EPS. 

                </div>


            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img class="img-responsive" src="<?php echo base_url() . 'assets/images/hkogo.jpg'; ?>" alt="logo" style="  margin: 0px auto 34px;

                        ">
            </div>
        </div>
        
    </div>
</div>
<!-- Single Blog Page Area End Here -->
<!-- Contact Us Page Area End Here -->






<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>