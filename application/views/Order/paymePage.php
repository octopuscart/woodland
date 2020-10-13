<?php
$this->load->view('layout/header');
?>

<style>




    .cartbutton{
        width: 100%;
        padding: 6px;
        color: #fff!important;
    }


    .noti-check1 span{
        color: red;
        color: red;
        width: 111px;
        float: left;
        text-align: right;
        padding-right: 13px;
    }

    .noti-check1 h6{
        font-size: 15px;
        font-weight: 600;
    }

    .address_block{
        background: #fff;
        border: 3px solid #d30603;
        padding: 5px 10px;
        margin-bottom: 20px;
        height: 150px;


    }
    .checkcart {
        border-radius: 50%;
        position: absolute;
        top: -28px;
        left: -8px;
        padding: 4px;
        background: #fff;
        border: 2px solid green;
    }


    .default{
        border: 2px solid green;
    }

    .default{
        border: 2px solid green;
    }

    .checkcart i{
        color: green;
    }

    .address_button{
        padding: 0px 10px;
        margin-top: 15px;
        font-size: 10px;


    }

    .cartdetail_small {
        float: left;
        width: 203px;
    }

</style>






<!-- Inner Page Banner Area Start Here -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/res/cart.css" type="text/css" />



<!-- Content -->

<section id="content" style="overflow: visible;">
    <div class="content-wrap nobottompadding">
        <div class="container clearfix text-center">
            <div class="col-md-6 clearfix">
                <div class='col-md-12'>

                    <p style='font-size: 16px;
                       font-weight: 600;
                       color: red;
                       margin-bottom: 10px;'>Pay Using PayMe HKQR code and send us screenshot of payment, will proceed your order after confirmation.</p>
                </div>
                <div class='row' style='text-align: center;'>
                    <div class='col-md-12'>
                        <p>
                            <img src="<?php echo base_url(); ?>assets/paymentstatus/payme2.jpg" style="height: 300px;">                

                        </p>
                    </div>


                    <div class='col-md-12' style="margin-bottom: 10px;">
                        <div class="proceed-button" style="text-align: center;">
                            <button type="button" class="btn-apply-coupon checkout_button_pre " onclick="myFunction()" style="background: #da0010;">Copy Payment Link</button>
                        </div>
                        <br/>

                        <input type="text" class="form-control"  value="https://19981.paymebiz.hsbc.com.hk/payments/qr-codes/Evyc1DNL6brCDb3UaRPXF" id="myInput" style="border: none;
                               text-align: center;">

                    </div>



                </div>
            </div>
            <div class="col-md-6">
                <div class="container clearfix" style="background: #fff;padding: 20px;margin-top: 20px;">
                    <h1 class="capitalize ls0" style="font-size: 50px;">Your Order</h1>
                    <table class="table" style="font-size: 20px">
                        <tr>
                            <td>Order No.</td>
                            <td>#<?php echo $order_data->order_no; ?></td>
                        </tr>

                        <tr>
                            <th >Total Payable Amount</th>
                            <th>{{"<?php echo $order_data->total_price; ?>"|currency:"<?php echo globle_currency; ?> "}} </th>
                        </tr>
                    </table>
                    <div class='col-md-12' style="margin-top: 10px;">
                        <div class="proceed-button" style="text-align: center;">
                            <a href="<?php echo site_url('Order/orderdetails/' . $order_data->order_key); ?>" class="btn-apply-coupon checkout_button_pre " style="background: #da0010;"><i class="fa fa-arrow-left"></i> Back To Order Details</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<script>
    var avaiblecredits = 0;
    function confirmOrder() {
        swal({
            title: 'Processing Order',
            onOpen: function () {
                swal.showLoading()
            }
        });
    }


    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();


        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the link: " + copyText.value);
    }
</script>
<?php
$this->load->view('layout/footer', array('custom_item' => 0, 'custom_id' => 0));
?>
