<?php
$this->load->view('layout/header');
?>


<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb-area">
                    <h1>Contact With US</h1>
                    <ul>
                        <li><a href="#">Home</a> /</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page Area Start Here -->
<div class="contact-us-page-area" style="padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="">
                <div class="contact-us-left" > 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14765.873530990702!2d114.1717583!3d22.2981191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc69c3e63f1558607!2sMaharaja%20Mart%20Ltd!5e0!3m2!1sen!2sin!4v1586491736073!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="contact-us-right">
                    <h2 class="title-sidebar" style="margin-bottom: 10px;">Showroom</h2>
                    <ul style="    margin-bottom: 30px;">
                        <li class="con-address">
                            205, 2nd Floor, Haiphong Mansions,<br/>
                            99-101, Nathan Road,<br/>
                            Tsim Sha Tsui, Kowloon, Hong Kong
                        </li>
                        <li class="con-envelope">sales@maharajamart.com</li>
                        <li class="con-phone">+(852) 2756 5611</li>

                        <li class=""><i class="con-clock fa fa-clock-o"></i> <span class="timeing_opensm">Opening Hours</span><br/>
                            <span class="timeing_open">Mon - Sat</span>: 09:30 to 21:00 <br/>
                            <span class="timeing_open">Sun & Holidays</span>: Closed
                        </li>
                    </ul>

                    <ul>


                        <li class=""><i class="con-clock fa fa-whatsapp"></i> 
                            <span class="timeing_opensm">WhatsApp (24 Hours)</span><br> 
                            <b>+(852) 6291 5892</b>

                        </li>

                    </ul>


                </div>

            </div>
        </div>


<hr/>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                <div class="contact-us-left">

                    <h2>Send Us Message</h2>
                    <div class="row">
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="#">
                                <fieldset>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="last_name" type="text" placeholder="Last Name*" class="form-control" id="form-name" data-error="This field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="first_name" type="text" placeholder="First Name*" class="form-control" id="form-email" data-error="This field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Email*" class="form-control" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="contact" type="text" placeholder="Contact No." class="form-control" id="form-name" data-error="This field is required" >
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select name="subject" placeholder="Subject" class="form-control" style="   " required="">
                                                <option>Enquiry</option>
                                                <option>Feedback</option>
                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" name="sendmessage" value="sendmessage" class="btn-send-message">Send Message</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class='form-response'></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact Us Page Area End Here -->






<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footer');
?>