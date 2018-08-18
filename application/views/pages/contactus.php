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
<div class="contact-us-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="contact-us-left">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="google-map-area">
                                <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA319S-ZyrzBQNhbYmjGedtOfl8wm6tY0Y&v=3.exp'></script><div style='overflow:hidden;height:338px;width:100%;'>
                                    <div id='gmap_canvas' style='height:338px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small>

                                        </small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                </div><script type='text/javascript'>
                                    function init_map() {
                                        //22.2968045,114.1687551
                                        var myOptions = {zoom: 17, center: new google.maps.LatLng(22.297975, 114.17118299999993),
                                            mapTypeId: google.maps.MapTypeId.ROADMAP};
                                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                        marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.297975, 114.17118299999993)});

                                        marker2 = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.2968045, 114.1687551)});



                                        infowindow = new google.maps.InfoWindow({content: '<strong>Bespoke Tailors Showroom</strong><br>2nd Floor, 45 Haiphong Road ,Tsim Sha Tsui, Kowloon , Hong Kong<br>'});

                                        google.maps.event.addListener(marker, 'click', function () {
                                            infowindow.open(map, marker);
                                        });
                                        infowindow.open(map, marker);



                                        infowindow = new google.maps.InfoWindow({content: '<strong>Bespoke Tailors Shop</strong><br>Shop D, Ground Floor, 19-21 Hankow Road , Tsim Sha Tsui, Kowloon , Hong Kong.<br>'});

                                        google.maps.event.addListener(marker2, 'click', function () {
                                            infowindow.open(map, marker2);
                                        });
                                        infowindow.open(map, marker2);

                                    }
                                    google.maps.event.addDomListener(window, 'load', init_map);</script>

                            </div>
                        </div>
                    </div>
                    <h2>Send Us Message</h2>
                    <div class="row">
                        <div class="contact-form">
                            <form id="contact-form">
                                <fieldset>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" id="form-name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-send-message">Send Message</button>
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
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="contact-us-right">
                    <h2 class="title-sidebar">Showroom</h2>
                    <ul>
                        <li class="con-address">2nd Floor, 45 Haiphong Road ,
                            <br/>
                            Tsim Sha Tsui, Kowloon , Hong Kong.
                            </li>

                        <h2 class="title-sidebar">Shop Address</h2>
                        <ul>
                            <li class="con-address">Shop D, Ground Floor, 19-21 Hankow Road ,
                                <br/>
                                Tsim Sha Tsui, Kowloon , Hong Kong.</li>
                            <li class="con-envelope">info@bespoketailorshk.com</li>
                            <li class="con-phone">(852) 27308566</li>
                            <li class="con-fax">(852) 27308577</li>
                        </ul>
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