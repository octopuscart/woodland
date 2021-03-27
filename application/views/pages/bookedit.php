<?php
$this->load->view('layout/header');
?>


<section id="content" style="overflow: visible;" ng-controller="bookControllerEdit" >
    <div class="content-wrap nopadding" style="background: url(<?php echo base_url(); ?>assets/theme2/res/images/food-pattern.png) center center repeat rgb(245, 245, 245);">
        <div class="container">
            <div class="tabs tabs-justify clear-bottommargin clearfix" id="tab-1">

                <div class="tab-container mt-5 mb-4" >
                    <div class="tab-content clearfix" id="tabs-restaurant">
                        <center style="width:100%;">
                            <div class="row clearfix" style="    width: fit-content;">

                                <div class="p-5rounded bg-white" style="width: 600px;">
                                    <h3 class="1 color">Update or Cancel your booking</h3>

                                    <div class=" mt-4 mt-lg-0" >
                                        <div class="form-result"></div>
                                        <form class="mb-0 row"  action="#" method="post" >
                                            <div class="form-process"></div>
                                            <div class="col-sm-4 mb-3">
                                                <label class='text-left pull-left'>Name</label>
                                                <input type="text" id="name" name="name" value="" class="sm-form-control border-form-control required" placeholder="Name" readonly="">
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <label class='text-left pull-left'>Email</label>
                                                <input type="email" id="email" name="email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" readonly="">
                                            </div>

                                            <div class="col-sm-4 mb-3">
                                                <label class='text-left pull-left'>Contact No.</label>
                                                <input type="text" id="contact" name="contact" value="" class="sm-form-control border-form-control required" placeholder="Contact No." readonly="">
                                            </div>
                                            <div class="col-md-12 mb-5"></div>


                                            <div class="clear"></div>
                                            <div class="col-sm-4 mb-3 input-daterange travel-date-group">
                                                <label class='text-left pull-left'>Select Date</label>
                                                <input type="text" id="select_date" name="select_date" value="" class="sm-form-control border-form-control tleft required datepicker" placeholder="Select Reservation Date" required="" min="<?php echo date("Y-m-d") ?>" autocomplete="off">
                                            </div>

                                            <div class="col-4 mb-3">
                                                <label class='text-left pull-left'>Select Time</label>
                                                <select id="select_time" class="custom-select sm-form-control border-form-control" name="select_time" required="">
                                                    <option value="disabled" disabled="" selected="">Select Time</option>
                                                    <optgroup label="Lunch">
                                                        <option value="<?php echo "11:30"; ?>"><?php echo "11:30"; ?></option>
                                                        <option value="<?php echo "11:45"; ?>"><?php echo "11:45"; ?></option>

                                                        <?php
                                                        $timelist = [12, 13, 14];
                                                        foreach ($timelist as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value . ":00" ?>"><?php echo $value . ":00" ?></option>
                                                            <option value="<?php echo $value . ":15" ?>"><?php echo $value . ":15" ?></option>
                                                            <option value="<?php echo $value . ":30" ?>"><?php echo $value . ":30" ?></option>
                                                            <option value="<?php echo $value . ":45" ?>"><?php echo $value . ":45" ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                        <option value="<?php echo "15:00"; ?>"><?php echo "15:00"; ?></option>

                                                    </optgroup>
                                                    <optgroup label="Dinner">

                                                        <option value="18:30">18:30</option>
                                                        <option value="18:45">18:45</option>

                                                        <?php
                                                        $timelist = [19, 20];
                                                        foreach ($timelist as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value . ":00" ?>"><?php echo $value . ":00" ?></option>
                                                            <option value="<?php echo $value . ":15" ?>"><?php echo $value . ":15" ?></option>
                                                            <option value="<?php echo $value . ":30" ?>"><?php echo $value . ":30" ?></option>
                                                            <option value="<?php echo $value . ":45" ?>"><?php echo $value . ":45" ?></option>
                                                            <?php
                                                        }
                                                        ?>

                                                        <option value="21:00">21:00</option>
                                                        <option value="21:15">21:15</option>
                                                        <option value="21:30">21:30</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <label class='text-left pull-left'>No. Of Persons</label>
                                                <select id="people" class="custom-select sm-form-control border-form-control" name="people" required="">
                                                    <option value="1">1</option>
                                                    <option value="2" selected="">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6+">6+</option>
                                                </select>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="col-md-12 mb-3"></div>

                                            <div class="col-sm-12 mb-3">
                                                <label class='text-left pull-left'>Remark</label>
                                                <input type="text" id="extra_remark" name="extra_remark" value="" class="sm-form-control border-form-control required" placeholder="Write reason or remark here..." >
                                            </div>

                                            <div class="col-12 nobottommargin">
                                                <button class="button button-circle button-large text-white ml-0 mt-3 colordarkgreen" type="submit" name="booknow" value="submit">Update Booking</button>

                                                <button class="button button-circle button-large text-white ml-0 mt-3 " type="submit" name="cancel" value="submit">Cancel Booking</button>
                                            </div>
                                            <div class="clear"></div>

                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </center>
                    </div>

                </div>
            </div>
        </div>
        <div class="line clear"></div>


    </div>

    <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url('<?php echo base_url(); ?>assets/theme2/res/images/sketch-header.png') repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
</section>
<script>
    var listofbookeddate = <?php echo json_encode($datelist); ?>;
    var editOptions = <?php echo json_encode($bookingdata); ?>;</script>

<?php
$this->load->view('layout/footer');
?>

<!--<script src="<?php echo base_url(); ?>assets/jqlib/jquery-3.4.1.slim.min.js"></script>-->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jqlib/jquery-ui.css">

<!--<script src="<?php echo base_url(); ?>assets/jqlib/jquery-1.12.4.js"></script>-->
<script src="<?php echo base_url(); ?>assets/jqlib/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/jqlib/moment.js"></script>
<script>

<?php
$redirecturl = site_url("book-now");


if (isset($_POST["booknow"])) {
    ?>

        swal({
            title: 'Your booking has been modified',
            type: 'success',
            imageWidth: 100,
            timer: 2500,
            showConfirmButton: false,
            animation: true

        }).then(
                function () {
                    window.location = "<?php echo $redirecturl; ?>";
                },
                function (dismiss) {
                    if (dismiss === 'timer') {
                        window.location = "<?php echo $redirecturl; ?>";
                    }
                }
        );
    <?php
}
if (isset($_POST["cancel"])) {
    ?>

        swal({
            title: 'Your booking has been cancelled',
            type: 'success',
            imageWidth: 100,
            timer: 2500,
            showConfirmButton: false,
            animation: true

        }).then(
                function () {
                    window.location = "<?php echo $redirecturl; ?>";
                },
                function (dismiss) {
                    if (dismiss === 'timer') {
                        window.location = "<?php echo $redirecturl; ?>";
                    }
                }
        );
    <?php
}
?>


</script>