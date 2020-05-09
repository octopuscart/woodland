<?php
$this->load->view('layout/header');
?>


<section id="slider" class="slider-element gallery-images dark force-full-screen full-screen clearfix" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/booknow.jpg'); background-size: cover">
    <div class="vertical-middle">
        <div class="container">
            <div class="heading-block center nobottomborder">
                <span class="font-primary ls1">Gallery</span>
                <h3 class="nott font-secondary ls0" style="font-size: 68px; line-height: 1.3;">See what we do</h3>
            </div>
            <div class="row justify-content-center align-items-center clearfix">
                <div class="col-sm-5 col-7 center align-self-center" data-lightbox="gallery">
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/restaurant/1.jpg" data-lightbox="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/theme2/res/images/gallery/restaurant1.jpg" alt="img" width="350" class="rounded" style="border: 3px solid rgba(255,255,255,0.8);">
                    </a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/restaurant/2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/restaurant/3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/restaurant/4.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <h3 class="mt-3 mb-0">Our Restaurant</h3>
                </div>
                <div class="col-sm-5 col-7 mt-5 mt-sm-0 center align-self-center" data-lightbox="gallery">
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food/1.jpg" data-lightbox="gallery-item">
                        <img src="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food1.jpg" alt="img" width="350" class="rounded" style="border: 3px solid rgba(255,255,255,0.8);">
                    </a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food/2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food/3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food/4.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food/5.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="<?php echo base_url(); ?>assets/theme2/res/images/gallery/food/6.jpg" class="hidden" data-lightbox="gallery-item"></a>
                    <h3 class="mt-3 mb-0">Our Food</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
    </div>
    
</section>

<section >
       <?php
    $this->load->view('layout/contactfooter');
    ?>
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>

</section>


<?php
$this->load->view('layout/footer');
?>