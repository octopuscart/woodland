
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Woodlands Hong Kong</title>
    </head>

    <body style="margin:0px; background: #f8f8f8; ">
        <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
            <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; background: #FBB316">
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:30px;" align="center">
                                <a href="<?php echo site_url("/"); ?>" target="_blank">
                                    <img src="<?php echo site_mail_logo; ?>" alt="Woodlands Hong Kong" style="border:none;height:100px;"/></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                        <tbody>
                            <tr>

                                <td>

                                    <b>Hello <?php echo $donation['name']; ?>,</b>

                                    <p>You have made a donation of  <b><?php echo globle_currency . " " . number_format($donation['amount'], 2, '.', ''); ?> </b>.<br/>
                                        Towards the <b>Woodlands Annual Charity Event 2021</b>.<i>(Donations over $100 are Tax deductible)</i> </p>
                                    <p>We will send the official receipt to you after the event.  </p>
                                    <p>Kindly share with your friends to support this event. </p>
                                </td>
                            </tr>
                            <tr>
                                <td style=" " colspan="2">

                                    <p>
                                        Thank you </br>
                                        Alex P.E</br>
                                        Director | Woodlands</br>
                                    </p>

                                </td>
                            </tr>
                            <tr>
                                <td style="" colspan="2">
                                    <div style="height: 200px;">Your Favorite Vegetarian Restaurants<br />
                                        <img src="https://www.woodlandshk.com/assets/images/logo.png" style="    height: 90px; margin: 5px 0px 10px;" />
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
                </div>
                <div style="    text-align: center;
                     font-size: 12px;
                     background: #8CC646;
                     color: antiquewhite;
                     padding: 10px;">
                    <b>- Thanks -</b> 
                    <br/>
                    <img src="<?php echo site_mail_logo; ?>" style="margin: 10px; height: 50px;   width: auto;"/>

                </div>
            </div>
        </div>
    </body>

</html>
