<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            .carttable{
                border-color: #fff;
            }

            .carttable td{
                padding: 5px 10px;
                border-color: #9E9E9E;
            }
            .carttable tr{
                /*padding: 0 10px;*/
                border-color: #9E9E9E;
                font-size: 12px
            }

            .detailstable td{
                padding:10px 20px;
            }

            .gn_table td{
                padding:3px 0px;
            }
            .gn_table th{
                padding:3px 0px;
                text-align: left;

            }
            .style_block{
                float: left;
                padding: 1px 1px;
                margin: 2.5px;
                /* background: #000; */
                color: white;
                border: 1px solid #e4e4e4;
                width: 47%;
                font-size: 12px;
            }


            .style_block span {
                background: #fff;
                margin-left: 5px;
                color: #000;
                padding: 0px 5px;
                width: 50%;
            }
            .style_block b {
                width: 46%;
                float: left;
                background: #dedede;
                color: black;
            }
            span.fr_value {
                margin-left: 1px;
                padding: 0;
                font-size: 9px;
                text-align: -webkit-left;
                position: absolute;
                margin-top: 0px;
                width: 20px;
            }

            .icon-circle{
                font-size: 19px; height: 31px;width: 31px;
                background-color: #000;
                float: left; border-radius: 50%; color: #fff;line-height: 28px;text-align: center;
            }
        </style>
    </head>

    <body style="margin: 0;
          padding: 0;
          background: rgb(225, 225, 225);
          font-family: sans-serif;">
        <div class=""  style="padding:50px 0px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff;">
                <tr>
                    <td >
                        <center><img src="https://www.woodlandshk.com/assets/images/headercopuon.jpg" style="
                                     width: 700px"/><br/>
                        </center>
                    </td>

                </tr>

            </table>

            <table class="carttable"  border-color= "#9E9E9E" align="center"  cellpadding="0" cellspacing="0" width="700" style="background: #fff;">
                <tr>
                    <td style="font-size: 15px;">
                        <P>Dear <?php echo $name;?>, </P>

                        <p>Greetings from Woodlands.<br/>
                            Woodlands 送上親切的問候。
                        </p>
                        <p>
                            Thank you very much for your contribution towards our Annual Charity Event on the 2nd October 2020.<br/>
                            非常感謝你對我們2020年10月2日週年慈善活動的踴躍支持。
                        </p>
                        <p>
                            EAT AS MUCH AS YOU CAN<br/>
                            素食任你食
                        </p>

                        <p>
                            PAY AS MUCH AS YOU WANT<br/>
                            價錢任你定
                        </p>

                        <p>
                            In appreciation of your contribution, kindly accept our donor coupon which can be used till 2nd Apr,2021 for dine-in in our restaurant. <br/>
                            為表感謝你的捐贈，請接受我們送贈上的捐贈優惠劵，可於2021年4月2日前隨時到我們餐廳享用。
                        </p>
                        <p>
                            Thank you very much for your support.<br/>
                            再一次多謝你的支持。<br/>
                           
                        </p>
                    </td>
                </tr>  
                <tr>
                    <td style="padding: 0;">
                        <div class="">
                            <img src="<?php echo 'https://www.woodlandshk.com/Shop/getCouponImage/'. $coupon_no.'?client_email='.$useremail; ?>" style="width: 100%" />
                        </div>


                    </td>
                </tr>  

            </table>


            <table class="carttable"  border-color= "#9E9E9E" align="center"  cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">
                <tr>
                    <td colspan="6" style="font-size: 12px;padding:0px;">
                        <table>
                            <tbody>

                                <tr>
                                    <td style="width: 70%">
                                        <div style="height: 200px;">Kindest Regards,<br />
                                            <img src="https://www.woodlandshk.com/assets/images/logo.png" style="    height: 70px; margin: 5px 0px 10px;" />
                                            <address><span style="float: left; font-size: 12px;"><b>Address </b><br />
                                                    UG Shop 16 &amp; 17, Wing On Plaza,<br />
                                                    62, Mody Road, Tsim Sha Tsui East,<br />
                                                    Kowloon, Hong Kong<br />
                                                    <b>Tel#</b>:&nbsp;+(852) 2369 3718, +(852) 2366 1945<br />
                                                    <b>Email</b>: order@woodlandshk.com, info@woodlandshk.com<br />
                                                    <b>Web</b>: www.woodlandshk.com</span></address>
                                            <span style="float: left; font-size: 12px;"> </span></div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>