<?php
$this->load->view('layout/header');
?>
<style>
    footer{
        position: inherit!important;
    }
</style>
<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/contact.jpg');   margin-top: -30px;    ;         background-position: -370px -81px;
    padding: 150px 0px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0 " style="font-size: 62px;">Contact Us</h1>
    </div>

</section>
<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />

<section id="slider" class="slider-element slider-reservation clearfix" style="    background: white;">
   <?php
    $this->load->view('layout/contactfooter');
    ?>

    <div id="popular-dest-map" class="gmap full-screen" data-height-xs="400px" data-height-sm="500px" data-height-md="500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4483.628686963382!2d114.17725123092295!3d22.297132355862846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400f1d5868e65%3A0x9d3c90f9c84c3345!2zV29vZGxhbmRzIEluZGlhbiBWZWdldGFyaWFuIFJlc3RhdXJhbnQg5rS76Jit5Y2w5bqm57Sg6aOf!5e1!3m2!1sen!2sin!4v1587913099933!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="p-5 reservation-form rounded bg-white" style="width:400px;bottom: 80px;">
        <h3 class="font-secondary h1 color">Contact Us</h3>

        <div class="form-widget mt-4 mt-lg-0" data-loader="button">
            <div class="form-result"></div>
            <form class="mb-0 row" id="template-contactform" name="template-contactform" method="post">
                <div class="form-process"></div>
                <div class="col-sm-12 mb-3">
                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
                </div>
                <div class="clear"></div>
                <div class="col-sm-6 mb-3">
                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
                </div>

                <div class="col-sm-6 mb-3">
                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Phone" />
                </div>
                <div class="col-sm-12 mb-3 input-daterange travel-date-group">
                    <input type="text" id="template-contactform-subject" name="subject" value="" class="sm-form-control border-form-control tleft required" placeholder="Subject">
                </div>
                <div class="col-sm-12 mb-3 input-daterange travel-date-group">
                    <textarea class="sm-form-control border-form-control tleft required" placeholder="Type Message.." style="height: auto;"></textarea>
                </div>
                <div class="clear"></div>

                <div class="col-12 nobottommargin">
                    <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Now</button>
                </div>
                <div class="clear"></div>
                <div class="col-12 hidden">
                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                </div>
                <input type="hidden" name="prefix" value="template-contactform-">
            </form>
        </div>
    </div>
</section>

<section >
    <img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
         position: absolute;
         z-index: 200;" />

    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;text-align: center">Virtual tour
        </h1>

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1588398828193!6m8!1m7!1sCAoSLEFGMVFpcE9OQ293REtHUXcwMVhwQzF6Z0FQQlhaUU5abjdGN0p4RXltdzl4!2m2!1d22.2967363!2d114.1764946!3f80!4f0!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

</section>

<?php
$this->load->view('layout/footer');
?>