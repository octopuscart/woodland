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
    .formblocksectionparent{
        background: #fff;

        border: 6px solid #fcb316;
        border-radius: 20px;
    }
    .formblocksection{
        padding: 45px;
        padding-top: 15px;

    }
    .formblocksectionhead{
        padding: 31px;
        background: #fcb316;
        padding-bottom: 1px;
    }
    .donation-amount-block{
        text-align: center;
        width: 100%;
    }
    .donation-amount-block .amoutblock{
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #8cc646;
        width: 100px;
        display: inline-block;
        text-align: center;
        margin: 5px;
        background: #8cc646;
        font-weight: bold;
        color: white;
        cursor: pointer;
        font-size: 12px;
    }
    .donation-amount-block .amoutblock.active{
        border: 1px solid #fcb316;
        background: #fcb316;
    }
    .donation-amount-block .otheramountblock{
        display: inline-block;
        width: 200px;
        border: 1px solid #8cc646;
        border-radius: 10px;
    }
    .donation-amount-block input{
        border-bottom: 0px;
        margin: 0px 10px 10px;
        background: #eaeaea!important;
        width: 180px;
        text-align: center;
    }
    .qrpayment{
        background: #efecff;
        padding: 20px;
        text-align: center;
        border-radius: 15px;
    }
    .qrscanimage{
        border-radius: 10px;
        height: 90px;
        cursor: pointer;
    }
    .qrscanimage:hover{
        box-shadow: 0px 0px 16px #c4c1d2;
    }

    .donate_name{

        margin: 0px!important;
    }
    p.donate_message {
        font-size: 12px!important;
        font-style: italic!important;
    }
    .dataTables_paginate a {
        padding: 7px;
        border: 1px solid #000;
        margin: 5px;
        border-radius: 5px;
    }

</style>


<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap.min.css" type="text/css" />



<div ng-controller="donatinController">

    <!-- Inner Page Banner Area Start Here -->
    <section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px 18px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
        <div class="container clearfix">
            <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 40px;"> 
                Woodlands Annual Charity Event - 2022
            </h1>


        </div>
    </section>
    <!-- Inner Page Banner Area End Here -->

    <section id="content" style="overflow: visible; margin-bottom: 192px!important;">
        <div class="content-wrap1 charity-block">
            <div class="section nomargin clearfix" style="padding: 10px 20px; background:#fff; background-size: 100% auto">
                <div class="container-fluid clearfix">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="informationblock  text-center">
                                <h4>
                                    Woodlands Annual Charity Event - 2022
                                </h4>

                            </div>

                            <div class="informationblock feature-box media-box text-center">
                                <p>

                                    We are very happy and thankful to all who have generously supported our event on the 2nd Oct, 2022 in commemoration of Mahatma Gandhi's Birth Anniversary<br/>

                                    With your tremendous support we have managed to raise a sum of $202,555 from this event and the same will be donated fully to IDEAL NGO. <br/>

                                    We express our sincere gratitude to all our patrons for supporting our event and to keep us motivated to do more every year. 🙏🏻
                                </p>
                            </div>
                            <hr/>
                            <div class="informationblock text-center">
                                <h4>
                                    Woodlands年度慈善活動- 2022年
                                </h4>

                            </div>

                            <div class="informationblock feature-box media-box text-center">
                                <p>

                                    我們非常高興和感謝所有在2022年10月2日慷慨支持我們紀念聖雄甘地誕辰周年紀念日的活動既善長人翁*<br/>

                                    在您的大力支持下，我們在今次活動中成功籌集了$2️⃣0️⃣2️⃣,5️⃣5️⃣5️⃣港幣，這筆款項將全部捐贈給勵智協進會*NGO。 <br/>

                                    我哋衷心感謝所有贊助人支持我哋嘅活動，你地既支持係推動我哋年年做更多善事既動力。
                                </p>
                            </div>
                            <hr/>
                            <div class="informationblock row">

                                <div class="col-md-6 feature-box media-box" style="padding: 10px;">

                                    <img src="<?php echo base_url(); ?>assets/theme2/res/images/CHRITY-2022-03.jpg" style="border-radius: 19px;">
                                </div>
                                <div class="col-md-6 feature-box media-box" style="padding: 10px;">
                <iframe  src="https://www.youtube.com/embed/PrlHKrvtPsc?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>

                                </div>
                            </div>
                            <br/>



                        </div>


                    </div>




                    <hr/>

                </div>
            </div>

        </div>
    </section>


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
                                    <tr>
                                        <td> House of Learning & Unesco HK GPC  </td>
                                        <td>: 2020</td>
                                    </tr>

                                    <tr>
                                        <td>  DARKNESS FIGHTERS  </td>
                                        <td>: 2021</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>  IDEAL NGO  </td>
                                        <td>: 2022</td>
                                    </tr>



                                </table>

                                <h2 class="" style="color:#000!important; text-align: center; font-size: 15px; margin-bottom: 0px;
                                    margin-top: 25px;">Donation 2022
                                </h2>

                                <p>
                                    A total of amount of over <b>HK$ 202,555.00</b> has been donated. Join us and be a part of this event every year and be a part of a Change that we want to make to our society.
                                </p>


                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-12 text-center bottommargin-sm">
                                    <div class="feature-box media-box" style="">

                                        <div class="col-md-12 owl-carousel owl-theme"  id="oc-clients2">
                                            <?php
                                            $imagesarray = [
                                                "IMG_0368.jpg",
                                                "IMG_0369.jpg",
                                                "IMG_0378.jpg",
                                                "IMG_0380.jpg",
                                                "IMG_0383.jpg",
                                                "IMG_0413.jpg",
                                                "IMG_0431.jpg",
                                                "IMG_0432.jpg",
                                                "IMG_0511.jpg",
                                                "IMG_0521.jpg",
                                                "IMG_0535.jpg",
                                                "IMG_0542.jpg",
                                                "IMG_0570.jpg",
                                                "IMG_0584.jpg",
                                                "IMG_0854.jpg",
                                            ];
                                            foreach ($imagesarray as $key => $value) {
                                                ?>
                                                <img class="col-sm-12 item" style="margin:10px 0px" src="<?php echo base_url(); ?>assets/images/charity/03032022/<?php echo $value; ?>">
                                                <?php
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                                <div class=" clearfix" >

                                </div>

                            </div>
                        </div>
                    </div>


                    <hr/>
                    <div class="row clearfix">
                        <div class="col-lg-12 text-center bottommargin-sm">

                            <div class="feature-box media-box" style="">

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

    <section  class="container section-contact topmargin-lg clearfix footercontact" style="overflow: visible;">
        <div class="row" style="text-align: center;margin-top:20px;margin-bottom: 50px;padding: 0px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <iframe height="315" src="https://www.youtube.com/embed/uI8ARH4dmH4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
            </div>
            <div class="col-md-3"></div>
        </div>


    </section>
    <div class="">
        <?php
        $this->load->view('layout/contactfooter');
        ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="qrcodemodel" tabindex="-1" role="dialog" aria-labelledby="qrcodemodel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">{{qucodeselect.title}}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-center">

                    <img src="<?php echo base_url(); ?>assets/donation/{{qucodeselect.image}}" style="width:300px" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/theme2/angular/ng-donation.js"></script>

<?php
$this->load->view('layout/footer');
?>

<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap.min.js"></script>

<script>
                        $(function () {

                            $('#donationalisttable').DataTable({
                                "processing": true,

                                "searching": false,
                                "bLengthChange": false,
                                "bInfo": false,
                                "ordering": false,

                            });

                            $('#oc-clients2').owlCarousel({
                                loop: true,
                                margin: 10,
                                nav: true,
                                dots: false,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 3
                                    },
                                    1000: {
                                        items: 3
                                    }
                                }
                            })
                        }
                        );

</script>