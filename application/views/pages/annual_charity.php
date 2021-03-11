<?php
$this->load->view('layout/header');
?>

<style>
    footer {
        position: inherit !important;
    }

    .selectlanguage {
        display: inline-block;
        width: 120px;
    }

    .selectlanguage select {
        border-radius: 17px;
    }

    .linkdonate {
        display: inline-block;
        padding: 0px 30px;
    }

    .selectlanguage span {
        color: #0a6132 !important;
    }

    .donateh2 {
        color: #0a6132 !important;
        font-size: 19px;
        margin-top: -21px;
        text-align: center;
    }

    .table-donatelist td {
        text-align: left;
    }
</style>



<!-- Inner Page Banner Area Start Here -->
<section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
    <div class="container clearfix">
        <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 62px;"> Charity <br />
        </h1>

    </div>
</section>
<!-- Inner Page Banner Area End Here -->




<section id="content" style="overflow: visible; margin-bottom: 192px!important;">
    <div class="content-wrap1 charity-block">
        <div class="section nomargin clearfix" style="padding: 10px 0; background:#fff; background-size: 100% auto">
            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-lg-12 text-center bottommargin-sm">
                        <div class="heading-block nobottomborder bottommargin-sm">
                            <h2 class="font-secondary color nott" style="color:#000!important;">
                                Caring about the Community
                            </h2>
                        </div>
                        <div class="feature-box media-box" style="">
                            <p>
                                Caring and Sharing with the community has been a Tradition of Woodlands, <br />not just recently but from the beginning of the Woodlands Restaurant Since the Year 1981.
                            </p>
                            <p>

                                Every year, October 2nd, to commemorate the Birth anniversary of “Mahatma Gandhi”, the Father of Indian Nation.

                            </p>
                            <p>
                                From the year 1985 - a One Day Charity Lunch and Dinner Event, named as “EAT AS MUCH AS YOU CAN. PAY AS MUCH YOU WISH” has been a annual event of the Woodlands to show their social responsibility. The total amount collected during this event is donated fully, without any deduction to various Non-profit / Charity Organizations in Hong Kong mainly and few times to China and India.
                            </p>

                            <p>
                                The Organizations we donated are listed below
                            </p>
                            <table style="display: inline;" class="table table-donatelist">
                                <tr>
                                    <td>OXFAM </td>
                                    <td>: 1985 - 1993</td>
                                </tr>
                                <tr>
                                    <td> Medecins Sans Frontieres</td>
                                    <td>: 1994</td>
                                </tr>
                                <tr>
                                    <td>Orbis </td>
                                    <td>: 1997</td>
                                </tr>
                                <tr>
                                    <td>Hong Kong Cancer Fund </td>
                                    <td>: 1998</td>
                                </tr>
                                <tr>
                                    <td>Children Cancer Foundation </td>
                                    <td>: --</td>
                                </tr>
                                <tr>
                                    <td> Child Right and You (CRY) </td>
                                    <td>: 2001</td>
                                </tr>
                                <tr>
                                    <td>SILENCE </td>
                                    <td>: 2019</td>
                                </tr>


                            </table>
                            <p>
                                A total of amount of <b>HK$ 1,000,000 (One Million HKD)</b> has been donated from the inception of this event till date. Join us and be a part of this event every year and be a part of a Change that we want to make to our society.
                            </p>


                        </div>
                    </div>
                </div>


                <hr/>
                <div class="row clearfix">
                    <div class="col-lg-12 text-center bottommargin-sm">
                        <div class="heading-block nobottomborder bottommargin-sm">
                            <h2 class="" style="color:#000!important;">
                                House of Learning & Unesco HK GPC : 2020

                            </h2>
                        </div>
                        <div class="feature-box media-box" style="">
                            <p>
                                A total of amount of over <b>HK$ 1,100,000 (One Million and One Hundred Thousands HKD)</b> has been donated from the inception of this event till date. Join us and be a part of this event every year and be a part of a Change that we want to make to our society.
                            </p>

                            <div class="col-md-12">
                                <h2 class="" style="color:#000!important;  font-size: 15px; margin-bottom: 0px;
                                    margin-top: 25px;">Social Peace Award by UNESCO HK GPC
                                </h2>
                                <img src="<?php echo base_url(); ?>assets/images/charity/IMG_0017.jpeg">
                                <img src="<?php echo base_url(); ?>assets/images/charity/IMG_0021.jpeg">
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Content -->
<hr/>
<section style="overflow: visible;text-align: center;">
    <p>
        For further enquiries, you may contact us through e-mail <b>info@woodlandshk.com</b>

    </p>
    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

</section>

<section style="overflow: visible;">
    <div class="row" style="text-align: center;margin-top:20px;margin-bottom: 50px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uI8ARH4dmH4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
        </div>
        <div class="col-md-3"></div>
    </div>

    <?php
    $this->load->view('layout/contactfooter');
    ?>
</section>




<?php
$this->load->view('layout/footer');
?>