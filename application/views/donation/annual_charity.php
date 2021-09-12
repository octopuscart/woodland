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

</style>

<div ng-controller="donatinController">

    <!-- Inner Page Banner Area Start Here -->
    <section id="page-title" class="page-title-parallax page-title-center border-bottom" style="background-image: url('<?php echo base_url(); ?>assets/theme2/res/images/sections/wall2.jpg');   margin-top: -30px;    padding: 50px 0px;    background-position: -471px -230px;" data-center="" data-top-bottom="">
        <div class="container clearfix">
            <h1 class="font-secondary capitalize ls0 text-white" style="font-size: 62px;"> Annual Charity Lunch & Dinner 2021 <br />
            </h1>

        </div>
    </section>
    <!-- Inner Page Banner Area End Here -->

    <section id="content" style="overflow: visible; margin-bottom: 192px!important;">
        <div class="content-wrap1 charity-block">
            <div class="section nomargin clearfix" style="padding: 10px 20px; background:#fff; background-size: 100% auto">
                <div class="container-fluid clearfix">

                    <div class="row">
                        <div class="col-md-7">
                            <div class="informationblock">
                                <h4>
                                    Annual Charity Lunch & Dinner 2021  |  週年慈善午餐&晚餐 2021
                                </h4>
                                <div class="card bg-color-light rounded-0 my-4" style="    background: #8cc646;
                                     border-radius: 19px!IMPORTANT;">

                                    <div class="card-body py-2 px-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="counter counter-inherit d-flex justify-content-between">
                                                <!--<strong class="me-1 ls0">Donated:</strong> $<span data-from="0" data-to="115700" data-refresh-interval="10" data-speed="1100" data-comma="true"></span>-->
                                            </div>
                                            <span><strong>Target:</strong> HK$100,000</span>
                                        </div>
                                        <ul class="skills pt-3 mb-2 mt-3">
                                            <li data-percent="45">
                                                <div class="progress">
                                                    <div class="progress-percent">
                                                        <div class="counter counter-inherit counter-instant"><span data-from="0" data-to="45" data-refresh-interval="30" data-speed="1100"></span>%</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr/>
                                <h4>
                                    Woodlands Indian Vegetarian Restaurant's Annual Charity Lunch & Dinner Event 2021<br/>
                                    活蘭印度素食餐廳週年慈善午餐&晚餐活動2021

                                </h4>
                                <h5>
                                    1st October (FRI) 2021 | 2021年10月1日
                                </h5>
                            </div>
                            <hr/>
                            <div class="informationblock feature-box media-box">
                                <h3 class="text-danger">
                                    DARKNESS FIGHTERS | 有關黑武士

                                </h3>
                                <br/>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/1XGZJ5_mCP0?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
                                <br/>
                                <p style="font-weight: 500">
                                    The Darkness Fighters Sports Association for the Blind is a non-profit organization that aims to promote equal social participation of people with disabilities through sports. Through different media and experience projects, we will achieve equality and opportunities for people with disabilities in different fields, encourage them to be independent, promote integration into society, and improve the quality of life.
                                    <br/>
                                    The Darkness Fighters Sports Club for the Blind is committed to developing various sports rehabilitation programs, assisting the disabled in physical, mental, social, and spiritual rehabilitation development, and is committed to promoting equal participation in sports by the group. In addition to the dragon boat team, the club also has physical training classes, hiking activities, smartphone classes, and meditation classes. It is also preparing for indoor rowing classes. During the epidemic, the association also distributed materials to members.
                                    All are welcome to join and support.
                                    <br/>
                                    <br/>
                                    黑武士失明人體育會乃一非牟利性質之機構，旨在透過運動推廣殘疾人士平等社會參與。透過不同媒介及體驗項目，實現殘疾人士在不同範疇的平等和機會，鼓勵他們獨立自主，促進融入社會，提升生活質素。黑武士失明人體育會致力發展各運動復康項目，協助殘疾人在身、心、社、靈方面的復康發展，並致力推動群體在體育上的平等參與。本會除了龍舟隊外，還有 體能鍛練班、 行山活動、智能手機班、冥想班，也正籌備室內划艇班。在疫情期間，本會也向會員派發物資。歡迎各界人士加入和支持。
                                </p>
                            </div>
                            <hr/>
                            <div class="informationblock feature-box media-box">
                                <h3 class="text-danger">
                                    Event Ambassador: <br/>Ms Jennifer (Codekey Cookies 點字曲奇)
                                </h3>
                                <br/>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/xo3c6lSfk7Q?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
                                <br/>
                                <p style="font-weight: 500">
                                    <b> CODEKEY COOKIES 點字曲奇</b> - Codekey Cookies, a social enterprise cookie brand founded by the visually impaired, hopes to break social labels and promote social integration by making Braille cookies.

                                    <br/>
                                    Codekey Cookies 由兩位視障人士於2015年創立，希望透過製作「點字曲奇」傳達心意，推動社會共融。                                <br/>
                                </p>
                                <p>
                                    To Know More 了解更多: <a href="www.codekeycookies.com/about.html" target="_blank"> www.codekeycookies.com/about.html</a>
                                </p>


                                <p style="font-weight: 500">
                                    Take part to be a part of the change | Donate Generously | Share the joy of caring with your Friends<br/>
                                    踴躍參加 | 慷慨解囊 | 與朋友分享關懷的喜悅
                                    </b>
                                </p>
                            </div>

                            <div class="col-md-12 feature-box media-box">


                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="p-5rounded formblocksectionparent" style=" ">
                                <div class="formblocksectionhead">
                                    <h3 class=" ">
                                        Please Donate Generously<br/> 請慷慨解囊

                                    </h3>
                                </div>

                                <div class=" mt-4 mt-lg-0 formblocksection" >
                                    <div class="form-result"></div>
                                    <form class="mb-0 row"  action="#" method="post" ng-submit="donationSubmit()">
                                        <div class="form-process"></div>
                                        <div class="row">
                                            <div class="donation-amount-block">
                                                <div class="amoutblock {{donationinput.selected_amount==amount?'active':''}}" ng-repeat="amount in donationinput.amountarray" ng-click="selectAmount(amount)">
                                                    {{amount|currency:"<?php echo globle_currency; ?>"}}


                                                </div>
                                                <br/>
                                                <div class="otheramountblock mt-3">
                                                    <label>Enter Other Amount</label>
                                                    <input type="number" id="template-contactform-name" min='0'  ng-model="donationinput.other_amount" value="" class="form-control border-form-control " placeholder="HK$ Other" >
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-12 mb-3 mt-3">
                                                    <input type="text" id="template-contactform-name" name="name" value="" class="form-control border-form-control required" placeholder="Name" required="">
                                                </div>
                                                <div class="col-sm-12 mb-3  ">
                                                    <input type="text" id="template-contactform-phone" name="contact_no" value="" class="form-control border-form-control required" placeholder="Contact No." required="">
                                                </div>
                                                <div class="col-sm-12 mb-3  ">
                                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email form-control border-form-control" placeholder="Email Address" required="">
                                                </div>
                                                <div class="col-sm-12 mb-3">
                                                    <textarea type="text" id="template-contactform-message" name="message" value="" class="required  form-control border-form-control" placeholder="Type you message here" required="" max="300"></textarea>
                                                </div>
                                                <br/>
                                                <div class="col-md-12  mt-3">
                                                    <div class="headerformblock">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="hidden" name="anonymous_donation" value="{{donationinput.showreceiver}}">
                                                                <input type="checkbox"  ng-model="donationinput.showreceiver"> Keep my donation anonymous
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="clear"></div>
                                        <div class="col-sm-12 mb-3">
                                            <p class="text-center" style="    margin-top: 20px;   margin-bottom: 0;">Choose Payment Method</p>
                                            <div class="col-md-6 pull-left">
                                                <label class="radio-inline">
                                                    <input type="radio"  name="payment_type" value="ALIPAY" class="checkbox-coupon  " checked=true required="">
                                                    <img src="<?php echo base_url(); ?>assets/paymentstatus/alipay.jpg" class="coupon-imgage-payment">
                                                </label>
                                            </div>

                                            <div class="col-md-6 pull-left">
                                                <label class="radio-inline">
                                                    <input type="radio"  name="payment_type" value="WECHAT" class="checkbox-coupon "  checked=false required="">
                                                    <img src="<?php echo base_url(); ?>assets/paymentstatus/wechat.jpg" class="coupon-imgage-payment">
                                                </label>
                                            </div>
                                        </div>


                                        <div class="clear"></div>
                                        <div class="col-12 nobottommargin" style='    text-align: center;' ng-if="!donationinput.isprocess">
                                            <input type="hidden" name="amount" value="{{donationinput.selected_amount}}">

                                            <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" name="submit_now" value="submit" ng-if='donationinput.selected_amount'>Donate {{donationinput.selected_amount|currency:'<?php echo globle_currency; ?>'}} Now</button>

                                            <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="button" disabled="" ng-if='!donationinput.selected_amount'>Donate {{donationinput.selected_amount|currency:'<?php echo globle_currency; ?>'}} Now</button>

                                        </div>
                                        <div class="col-12 nobottommargin" style='    text-align: center;' ng-if="donationinput.isprocess">
                                            <input type="hidden" name="amount" value="{{donationinput.selected_amount}}">


                                            <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="button" disabled="" >Processing...</button>

                                        </div>
                                        <div class="clear"></div>

                                    </form>
                                </div>
                                <div class="qrpayment">
                                    <h4>Pay Using QR Code Scan <br/><small>
                                            Click image to select payment method.
                                        </small></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url(); ?>assets/donation/payme_red_on_white_bg.png" class="qrscanimage" data-toggle="modal" data-target="#qrcodemodel" ng-click="openQR('payme')">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo base_url(); ?>assets/donation/fps.png" class="qrscanimage" data-toggle="modal" data-target="#qrcodemodel" ng-click="openQR('fps')">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 feature-box media-box">
                                <?php
                                $previouselink = [
                                    "zgYpG-ThKvk",
                                    "uI8ARH4dmH4",
                                    "ZC0Fb9BjB64"
                                ];
                                foreach ($previouselink as $key => $value) {
                                    ?>
                                    <br/>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $value; ?>?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
                                    <br/>
                                    <?php
                                }
                                ?>

                            </div>
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



                                </table>
                                <p>
                                    A total of amount of over <b>HK$ 1,100,000 (One Million and One Hundred Thousands HKD)</b> has been donated from the inception of this event till date. Join us and be a part of this event every year and be a part of a Change that we want to make to our society.
                                </p>


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

    <section style="overflow: visible;">
        <div class="row" style="text-align: center;margin-top:20px;margin-bottom: 50px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <iframe height="315" src="https://www.youtube.com/embed/uI8ARH4dmH4?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
            </div>
            <div class="col-md-3"></div>
        </div>

        <?php
        $this->load->view('layout/contactfooter');
        ?>
    </section>
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