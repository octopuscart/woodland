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
                                <h4>Annual Charity Lunch & Dinner 2021 週年慈善午餐&晚餐2021
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
                                    October 2nd (SAT) 2021
                                </h5>
                            </div>
                            <hr/>
                            <div class="informationblock feature-box media-box">
                                <h3 class="text-danger">
                                    UNESCO HK GPC<br/>
                                    香港聯合國教科文組織協會和平中心
                                </h3>
                                <br/>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/b-eQWLme4AI?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
                                <br/>
                                <p style="font-weight: 500">
                                    Support <b>UNESCO’s vision “building peace in the minds of men and women”</b>. Promote community awareness and dialogues within and among all nations, peoples and culture to PEACE, harmony and sustainable development.
                                    <br/>
                                    支持聯合國教科文組織“在男人和女人心中建立和平”的願景。 在所有國家，民族和文化內和之間促進社區意識和對話，以實現和平，和諧與可持續發展。
                                </p>
                            </div>
                            <hr/>
                            <div class="informationblock feature-box media-box">
                                <h3 class="text-danger">
                                    House of Learning (HOL) 
                                    腦之家
                                </h3>
                                <br/>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/6K8hkYai-30?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 19px;" allowfullscreen></iframe>
                                <br/>
                                <p style="font-weight: 500">
                                    <b> House of Learning</b> - An NGO Serving the underachieved and underprivileged children by providing training and programs to help them become productive citizens in the society, in the future.
                                    <br/>
                                    腦之家為一間非牟利慈善機構，腦之家一向致力為本地及內地貧困兒童推行不同的教育計劃，以知識改變命運。                                <br/>
                                </p>
                                <p style="font-weight: 500">
                                    Inviting you to be a part of the Change! Lets us join together to make a better future and continue to make a difference in the lives of our biggest investment:<b> the children!
                                        <br/>
                                        誠邀您參加我們的活動，讓我們攜手合作，共創美好未來，繼續為我們最大的投資：孩子們的生活帶來改變。
                                        <br/>
                                        "Give the Best to the Most Important"
                                        <br/>
                                        “將最好的給予最重要的人”

                                        <br/>
                                        Children are our future soceity. Every Child deserves the best possible education and equal learning opportunities.
                                        <br/>
                                        將最好的學習資源給予我們的孩子，社會的下一代!
                                        <br/>
                                    </b>
                                </p>
                            </div>

                            <div class="col-md-12 feature-box media-box">

                                <p><b> 5 Strategic Areas of HOL 腦之家五項策略範疇</b></p>
                                <ul>
                                    <li>   <p>1. Enhancing research and service capacity.
                                            <br/>
                                            提升研究及服務的領域</p>
                                    </li>
                                    <li> 
                                        <p>  2. Fostering professional excellence.
                                            <br/>
                                            培育卓越的專業精神</p>
                                    </li>
                                    <li> 
                                        <p>  3. Diversifying our programs to meet the need of our society.
                                            <br/>
                                            製作多元化的項目去迎合社會上不同的需要</p>
                                    </li>
                                    <li> 
                                        <p>   4. Internationalization and outreaching to the Mainland.
                                            <br/>
                                            服務延伸到國內及國際化</p>
                                    </li>
                                    <li> 
                                        <p>   5. Revolutionalizing social entrepreneurship.
                                            <br/>
                                            將社會企業革命化</p>
                                    </li>
                                </ul>
                                <p>
                                    There's a popular Chinese saying is 飲水思源 , which means when we drink water we must remember from where the water came. And this is the spirit behind which I founded the House of Learning: we must remember the person we are today because many have helped us along the way, and so likewise we need to help those who are less fortunate than us.
                                    <br/>
                                    「飲水思源」：我們需要記得我們之所以能成為今日的我們是因為曾有很多人一直在幫我們
                                </p>
                                <p>
                                    HOL's motive is to provide the best possible learning and education experiences to those who are underprivileged. Being born poor does not mean being not able to learn. Being born poor does not mean they should be deprived of great learning experiences. Throughout the years, we have been providing enriched learning experiences to the underprivileged and underachievers, and we found when children are exposed to these experiences, the lights inside them get turned on and they would glow in self-confidence, in social skills, in academic improvement.
                                    <br/>
                                    腦之家一向致力為本地及內地貧困兒童推行不同的教育計劃，以知識改變命運。透過組織活動及服務來幫助低成就及弱勢的兒童及青少年，使他們獲得基本生活需要、提昇自信及發展潛能
                                    <br/>
                                    多年來，我們一直在為弱勢和學業不佳的人提供豐富的學習經驗，我們發現，當孩子們接觸到這些經驗時，他們裡面的燈會亮起來，它們會以自信，社交技巧，學術上發光亮。
                                </p>
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
                                    <form class="mb-0 row"  action="#" method="post" >
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
                                        <div class="col-12 nobottommargin" style='    text-align: center;'>
                                            <input type="hidden" name="amount" value="{{donationinput.selected_amount}}">

                                            <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" name="submit_now" value="submit" ng-if='donationinput.selected_amount'>Donate {{donationinput.selected_amount|currency:'<?php echo globle_currency; ?>'}} Now</button>
                                            <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="button" disabled="" ng-if='!donationinput.selected_amount'>Donate {{donationinput.selected_amount|currency:'<?php echo globle_currency; ?>'}} Now</button>

                                        </div>
                                        <div class="clear"></div>

                                    </form>
                                </div>
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

</div>

<script src="<?php echo base_url(); ?>assets/theme2/angular/ng-donation.js"></script>

<?php
$this->load->view('layout/footer');
?>