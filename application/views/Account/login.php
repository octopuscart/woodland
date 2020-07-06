<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
</style>    

<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/blog.jpg');   margin-top: -30px;    padding: 100px 0px;   " data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;color:white;">User Login</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($next_link === 'checkoutInit') {
                    ?>
                    <h5  class="text-center">
                        <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="btn  btn btn-danger button button-circle button-large text-white ml-0 mt-3 colordarkgreen sm-form-control border-form-control tleft required" style="    width: 302px;
                           display: inline-block;">
                            <i class=" fa fa-user"></i> Checkout As Guest <i class="fa fa-arrow-right"></i>
                        </a>
                    </h5>
                    <h3  class="text-center">Or</h3>
                    <?php
                }
                ?>
                <h5 class="text-center">  By creating an account with our store, you will be able to move through
                    the checkout process faster, store multiple shipping addresses,
                    view and track your orders in your account and more.
                </h5>
            </div>
            <?php
            if ($msg) {
                ?>
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                        <i class="fa fa-exclamation-triangle "></i> <?php echo $msg; ?>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="login-registration-field">
                    <h2 class="cart-area-title font-secondary " style="font-size: 55px;">Login</h2>
                    <form method="post" action="#">
                        <label>Email address *</label>
                        <input type="email" class="sm-form-control border-form-control tleft required" name="email" placeholder="Email " required=""/>
                        <label>Password *</label>
                        <input type="password" class="sm-form-control border-form-control tleft required" name="password" placeholder="Password *" required=""/>
                        <div style="clear: both"></div>
                        <br/>
                        <button class="btn-send-message button button-circle button-large text-white ml-0 mt-3 colordarkgreen sm-form-control1 border-form-control tleft required" name="signIn" type="submit" value="signIn">Login</button>
                        <!--<span><input type="checkbox" name="remember"/>Remember Me</span>-->
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-registration-field">
                    <h2 class="cart-area-title font-secondary " style="font-size: 55px;">Register</h2>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Last Name *</label>
                                <input type="text" name="last_name" class="sm-form-control border-form-control tleft required" placeholder="Last Name *" required="">
                            </div>
                            <div class="col-md-6">
                                <label>First Name *</label>
                                <input type="text" name="first_name" class="sm-form-control border-form-control tleft required" placeholder="First Name *" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email address *</label>
                                <input type="email" name="email" class="sm-form-control border-form-control tleft required" placeholder="Email *" required="">
                            </div>
                            <div class="col-md-6">
                                <label>Contact No. *</label>
                                <input type="text" name="contact_no" class="sm-form-control border-form-control tleft required" placeholder="Contact No. *" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Password *</label>
                                <input type="password" class="pass sm-form-control border-form-control tleft required" name="password" placeholder="Password" required="">

                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password *</label>
                                <input type="password" class="con_pass sm-form-control border-form-control tleft required" name="con_password" placeholder="Confirm Password" required>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender *</label>
                                <select name="gender" id="gender"  class="sm-form-control border-form-control tleft required"  required >
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <input type="hidden" class="sm-form-control border-form-control tleft required" name="birth_date" id="birth_date" value="{{birth_month}}-{{date_birth}}"> 
                                <label>Date Of Birth *</label>

                                <div class="row">
                                    <select id="birth_month" ng-model="birth_month" name="birth_month" class="r_corners bg_light w_full border_none bith_date_select sm-form-control border-form-control tleft required" required  style="    width: 40%;">
                                        <option value="" >-MM-</option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) {
                                            $mmdate = $i < 10 ? "0" . $i : $i;
                                            echo "<option value='$mmdate'>$mmdate</option>";
                                        }
                                        ?>
                                    </select> 

                                    <select id="birth_date" name="date_birth" ng-model="date_birth" class="r_corners bg_light w_full border_none bith_date_select sm-form-control border-form-control tleft required"  required  style="    width: 40%;">
                                        <option value="" >-DD-</option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++) {
                                            $dddate = $i < 10 ? "0" . $i : $i;
                                            echo "<option value='$dddate'>$dddate</option>";
                                        }
                                        ?>
                                    </select>
                                </div>


                            </div>
                        </div>
                        <div style="clear: both"></div>





                        <br/>


                        <button name = "registration" class="btn-send-message disabled button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" value="Login">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>