<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        /*position: inherit!important;*/
    }
</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/blog.jpg');   margin-top: -30px;    padding: 100px 0px;   " data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;color:white;">Our Blog</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<img src="<?php echo base_url(); ?>assets/theme2/res/images/sketch.png" style="    margin-top: -65px;
     position: absolute;
     z-index: 200;" />
<!-- Content -->

<section id="content" style="overflow: visible;">
    <div class="content-wrap nobottompadding">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-6 col-sm-6 bottommargin-sm">
                    <div class="ipost clearfix">
                        <div class="entry">
                            <div class="entry-image nobottommargin">
                                <a href="<?php echo base_url(); ?>assets/theme2/res/images/blogs/2.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo base_url(); ?>assets/theme2/res/images/blogs/2.jpg" alt="Image 1"></a>
                            </div>
                            <div class="entry-title">
                                <ul class="entry-meta clearfix">
                                    <li><a href="#" style="text-transform: capitalize;"><?php echo date("dS M Y");?></a></li>
                                    <li><a href="#">ADMIN</a></li>
                                </ul>
                                <div class="clear"></div>
                                <h2 class="nobottommargin"><a href="#">Dosa is a popular south Indian food. Do you want to know more about this special food?</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 bottommargin-sm">
                    <div class="ipost clearfix">
                        <div class="entry">
                            <div class="entry-image nobottommargin">
                                <a href="<?php echo base_url(); ?>assets/theme2/res/images/blogs/3.jpg" data-lightbox="image"><img class="image_fade" src="<?php echo base_url(); ?>assets/theme2/res/images/blogs/3.jpg" alt="Image 2"></a>
                            </div>
                            <div class="entry-title">
                                <ul class="entry-meta clearfix">
                                    <li><a href="#" style="text-transform: capitalize;"><?php echo date("dS M Y");?></a></li>
                                    <li><a href="#">ADMIN</a></li>
                                </ul>
                                <div class="clear"></div>
                                <h2 class="nobottommargin"><a href="#">Panipuri or Phuchka is a type of snack that originated in the Indian subcontinent.</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                
            
            </div>
        </div>
        <div class="section mt-3 border-top nobg py-5" style="    padding: 0;display: none;
    margin: 0;">
            <div class="container clearfix">
                <div class="row align-items-center">
                    <div class="col-sm-6 mr-auto">
                        <h4 class="mb-0 d-flex justify-content-center justify-content-sm-start"><small class="text-muted">Showing Page: <a href="#">1</a> of 8 Pages</small></h4>
                    </div>
                    <div class="col-sm-6">
                        <ul class="pagination justify-content-center justify-content-sm-end mt-3 mt-sm-0 mb-0">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php
    $this->load->view('layout/contactfooter');
    ?>
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>


</section>




<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>