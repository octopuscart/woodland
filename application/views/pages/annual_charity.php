<?php
$this->load->view('layout/header');
?>

<style>
    footer{
        position: inherit!important;
    }
</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0" style="font-size: 62px;">Annual Charity Lunch and Dinner</h1>
    </div>
</section>
<!-- Inner Page Banner Area End Here -->

<!-- Content -->

<section style="overflow: visible;">

   <iframe src="https://annualcharity.woodlandshk.com/" width="100%" height="2800"></iframe>


</section>




<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>