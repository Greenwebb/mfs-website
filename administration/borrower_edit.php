<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Borrower || Mighty Finance </title>
    <!-- base:css -->
    <link rel="stylesheet" href="css/css-materialdesignicons.min.css">
    <link rel="stylesheet" href="css/css-vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="css/css-font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bars-1to10.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bars-horizontal.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bars-movie.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bars-pill.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bars-reversed.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bars-square.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-bootstrap-stars.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-css-stars.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-examples.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-fontawesome-stars-o.css">
    <link rel="stylesheet" href="css/jquery-bar-rating-fontawesome-stars.css">
    <link rel="stylesheet" href="css/css-asColorPicker.min.css">
    <link rel="stylesheet" href="css/x-editable-bootstrap-editable.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker-bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/dropify-dropify.min.css">
    <link rel="stylesheet" href="css/jquery-file-upload-uploadfile.css">
    <link rel="stylesheet" href="css/jquery-tags-input-jquery.tagsinput.min.css">
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4-tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="css/dropzone-dropzone.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light-style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png">
</head>
<style>
    .navbar .navbar-brand-wrapper .navbar-brand img {
        width: calc(290px - 130px);
        max-width: 68rem;
        height: 35px;
        margin: auto;
        vertical-align: middle;
    }

    .sidebar .nav .nav-item .nav-link .menu-title {
        color: rgba(255, 255, 255, 0.9);
        display: inline-block;
        font-size: 0.875rem;
        line-height: 1;
    }

    .panel-body.bg-gray.text-bold {
        background-color: gainsboro;
    }

    .popUpFundo.white {
        background-color: #7e25bb6b;
    }
    .select2-selection.select2-selection--single {
    Height: 2.7rem !important;
}
</style>

<body>
    <?php include 'components/constants_views/messages.php' ?>


    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <?php include 'components/constants_views/top_nav.php' ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <?php include 'components/constants_views/side_nav.php' ?>
            <!-- partial -->
            <?php

            if (isset($_GET['bid'])) {

                $numbers = $hashids->decode($_GET['bid']);

                $bidd = $numbers[0];
            }
            //get borrowers from the db
            $result =  "SELECT * FROM clients WHERE id = '$bidd'";

            $queryResults = $con->query($result);

            if ($queryResults->num_rows > 0) {

                $row = $queryResults->fetch_assoc();
                $borrower_id = $row['id'];
                $h_id = $hashids->encode($row['id']);
                $status = $row['status'];
                $duration = $row['gender'];
                $email = $row['email'];
                $birth_date = $row['birth_date'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $country = $row['country'];
                $gender = $row['gender'];
                $employee = $row['working_status'];
                $business = $row['business'];
                $phone = $row['phone'];
                $address = $row['address'];
                $eligibility = $row['eligibility'];
                $nrc = $row['nrc_no'];
                $city = $row['city'];
                $working_status = $row['working_status'];
                $description = $row['description'];

            }

            ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Add Borrower</h4>
                                    <p class="card-description">
                                        edit client details
                                    </p>
                                    <form method="post" id="add_borrower_form" class="forms-sample">
                                        <div class="panel panel-default form-group"><br>
                                            <div class="panel-body bg-gray text-bold">Required Fields: </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Name</label>
                                                <div class="input-group ">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                                                        </div>
                                                        <input required type="text" class="form-control" id="fname" name="fname" value="<?=$fname?>" placeholder="First Name" aria-label="fname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Last Name</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                                                    </div>
                                                    <input required type="text" class="form-control" id="lname" name="lname" value="<?=$lname?>" placeholder="Last Name" aria-label="lname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Email Address</label>
                                                <div class="input-group ">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><em class="mdi mdi-email "></em></span>
                                                        </div>
                                                        <input required type="email" class="form-control" id="email" value="<?= $email ?>" name="email" placeholder="email" aria-label="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Country</label>
                                                <div class="input-group ">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><em class="mdi mdi-flag-variant"></em></span>
                                                        </div>


                                                        <select class="form-control" name="country" id="country">



                                                            <?php $result = mysqli_query($con, "SELECT * FROM country");

                                                            while ($row = mysqli_fetch_assoc($result)) {

                                                                $cid = $row['id'];
                                                                $ctype =  $row['country'];
                                                                if ($ctype == $country) {
                                                                    $result = mysqli_query($con, "SELECT * FROM country where country = '$country'");
                                                                    $row = mysqli_fetch_assoc($result);
                                                                    $cid = $row['id'];
                                                                    $ctype =  $row['country'];
                                                                    echo <<<_iwe
                        
                        <option value="$country" selected> $country</option>
                        
                        _iwe;
                                                                } else {
                                                                    echo <<<_iwe
                        
                        
                        <option value="$ctype" > $ctype </option>
                        _iwe;
                                                                }
                                                            }

                                                            ?>

                                                        </select>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Buiness Name:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                                                <div class="input-group ">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><em class="mdi mdi-account-multiple"></em></span>
                                                        </div>
                                                        <input type="text" id="bname" class="form-control" name="bname" value="<?= $business ?>" placeholder="Business Name" aria-label="bname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Gender</label>
                                                <div class="input-group ">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><em class=" mdi mdi-cellphone "></em></span>
                                                        </div>
                                                        <select class="form-control" name="gender" id="gender">
                                                            <?php $result2 = mysqli_query($con, "SELECT * FROM gender");
                                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                                $gid = $row2['id'];
                                                                $gtype =  $row2['gender'];
                                                                //fixing
                                                                if ($gtype == $gender) {
                                                                    $result3 = mysqli_query($con, "SELECT * FROM gender where gender = '$gender'");
                                                                    $row3 = mysqli_fetch_assoc($result3);
                                                                    $gid = $row3['id'];
                                                                    $gtype =  $row3['gender'];
                                                                    echo <<<_iwe
                        
                        <option value="$gtype" selected> $gtype </option>
                        
                        _iwe;
                                                                } else {
                                                                    echo <<<_iwe
                        
                        
                        <option value="$gtype" > $gtype </option>
                        _iwe;
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Phone: <b><u>Do not</u> put country code or spaces</b> in the below mobile otherwise you won't be able to send SMS to the mobile.</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><em class="mdi mdi-phone"></em></span>
                                                </div>
                                                <input required pattern="[0-9]{1}[0-9]{9}" type="tel" maxlength="10" required name="phone" class="form-control" id="phone" value="<?= '0'.$phone?>" placeholder="Phone">
                                            </div>

                                        </div>
                                        <div class="form-group"><label for="password">New Password</label>
                                            <div class="input-group">

                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">***</span>
                                                </div>

                                                <input required type="password" class="form-control" name="password" min="8" id="password"  placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">City</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><em class="mdi mdi-flag"></em></span>
                                                </div>
                                                <input required placeholder="city" name="city" id="city" value="<?=$city?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Physical address</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><em class="mdi mdi-flag"></em></span>
                                                </div>
                                                <input required placeholder="physical address" name="address" id="address" value="<?=$address?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Employement Status :&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><em class="mdi mdi-book-multiple-variant"></em></span>
                                                    </div>
                                                    <select class="form-control" name="working_status" id="working_status">
                                                            <?php $result4 = mysqli_query($con, "SELECT * FROM working_status");
                                                            while ($row4 = mysqli_fetch_assoc($result4)) {
                                                                $wid = $row4['id'];
                                                                $wtype =  $row4['working_status'];
                                                                //fixing
                                                                if ($wtype == $working_status) {
                                                                    $result5 = mysqli_query($con, "SELECT * FROM working_status where working_status = $working_status");
                                                                    $row5 = mysqli_fetch_assoc($result5);
                                                                    $wid = $row5['id'];
                                                                    $wtype =  $row5['working_status'];
                                                                    echo <<<_iwe
                        
                        <option value="$working_status" selected> $working_status </option>
                        
                        _iwe;
                                                                }else {
                                                                    echo <<<_iwe
                        
                        
                        <option value="$wtype" > $wtype </option>
                        _iwe;
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">birth date</label>
                                                <div class="input-group ">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><em class="mdi mdi-calendar"></em></span>
                                                        </div>
                                                        <input required type="date" value="<?php echo date('Y-m-d',strtotime($birth_date)) ?>" max="2003-01-01" class="form-control" name="bdate" id="bdate">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Status</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><em class="class mdi mdi-account-circle"></em></span>
                                                    </div>
                                                    <select class="form-control" name="status" id="status">
                                                    <?php $result9 = mysqli_query($con, "SELECT * FROM personal_status");
                                                            while ($row4 = mysqli_fetch_assoc($result9)) {
                                                                $wid = $row4['id'];
                                                                $wstatus =  $row4['statuss'];
                                                                //fixing
                                                                if ($wstatus == $status) {
                                                                    $result8 = mysqli_query($con, "SELECT * FROM personal_status where statuss = $status");
                                                                    $row11 = mysqli_fetch_assoc($result8);
                                                                    $wid = $row11['id'];
                                                                    $wstatus =  $row11['statuss'];
                                                                    echo <<<_iwe
                        
                        <option value="$status" selected> $status </option>
                        
                        _iwe;
                                                                }else {
                                                                    echo <<<_iwe
                        
                        
                        <option value="$wstatus" > $wstatus </option>
                        _iwe;
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Eligibility</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><em class="mdi mdi-bookmark-check"></em></span>
                                                    </div>
                                                    <select class="form-control" name="eligibility" id="eligibility">



                                                            <?php $result = mysqli_query($con, "SELECT * FROM eligibility");

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $eid = $row['id'];
                                                                $etype =  $row['eligibility'];
                                                                if ($eid == $eligibility) {
                                                                    $result = mysqli_query($con, "SELECT * FROM eligibility where id = $eligibility");
                                                                    $row = mysqli_fetch_assoc($result);
                                                                    $eid = $row['id'];
                                                                    $etype =  $row['eligibility'];
                                                                    echo <<<_iwe
                        
                        <option value="$etype" selected> $etype </option>
                        
                        _iwe;
                                                                } else {
                                                                    echo <<<_iwe
                        
                        
                        <option value="$etype" > $etype </option>
                        _iwe;
                                                                }
                                                            }

                                                            ?></select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">NRC</label>
                                                <div class="input-group ">
                                                    <input required type="text" value="<?=$nrc?>" class="form-control" name="nrc" id="nrc" placeholder="eg..1234/33/3">
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputName1">Short Description:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                                                <div class="input-group ">
                                                    <input type="text" value="<?=$description?>" class="form-control" name="description" id="description" placeholder="Descripion">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>File upload:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>File upload:&nbsp &nbsp<b><u style="text-decoration: none;" class="text-warning ">(Optional)</u></b></label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>

                                        <input type="hidden" id="id_value" name="id_value" value="<?=$bidd?>">

                                        <button type="submit" name="edit_borrower" id="add_borrower" class="btn btn-primary mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include 'components/constants_views/footer.php' ?>
                <script>
                    function close() {
                        event.preventDefault();
                        document.getElementById('popy').style.display = "none"
                    }
                </script>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->

    <!-- base:js -->
    <script src="js/js-vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="js/chart.js-Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/custom/edit_borrower.js"></script>
    <script src="js/js-off-canvas.js"></script>
    <script src="js/js-hoverable-collapse.js"></script>
    <script src="js/js-template.js"></script>
    <script src="js/js-settings.js"></script>
    <script src="js/js-todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="js/sweetalert-sweetalert.min"></script>
    <script src="js/jquery.avgrund-jquery.avgrund.min.js"></script>
    <script src="js/jquery-steps-jquery.steps.min.js"></script>
    <script src="js/jquery-validation-jquery.validate.min.js"></script>
    <script src="js/jquery-bar-rating-jquery.barrating.min.js"></script>
    <script src="js/jquery-asColor-jquery-asColor.min.js"></script>
    <script src="js/jquery-asGradient-jquery-asGradient.min.js"></script>
    <script src="js/jquery-asColorPicker-jquery-asColorPicker.min.js"></script>
    <script src="js/x-editable-bootstrap-editable.min.js"></script>
    <script src="js/moment-moment.min.js"></script>
    <script src="js/tempusdominus-bootstrap-4-tempusdominus-bootstrap-4.js"></script>
    <script src="js/bootstrap-datepicker-bootstrap-datepicker.min.js"></script>
    <script src="js/dropify-dropify.min.js"></script>
    <script src="js/jquery-file-upload-jquery.uploadfile.min.js"></script>
    <script src="js/jquery-tags-input-jquery.tagsinput.min.js"></script>
    <script src="js/dropzone-dropzone.js"></script>
    <script src="js/jquery.repeater-jquery.repeater.min.js"></script>
    <script src="js/inputmask-jquery.inputmask.bundle.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/js-formpickers.js"></script>
    <script src="js/js-form-addons.js"></script>
    <script src="js/js-x-editable.js"></script>
    <script src="js/js-dropify.js"></script>
    <script src="js/js-dropzone.js"></script>
    <script src="js/js-jquery-file-upload.js"></script>
    <script src="js/js-formpickers.js"></script>
    <script src="js/js-form-repeater.js"></script>
    <script src="js/js-inputmask.js"></script>
    <script src="js/custom/safe.js"></script>
    <script src='js/jquery-3.2.1.min.js' type='text/javascript'></script>
  <script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
  <script src="js/custom/safe.js"></script>
  <link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>


    <!-- endinject -->
    <!-- plugin js for this page -->
    <div class="avgrund-overlay "></div>
    <script>
    $(document).ready(function() {

      // Initialize select2
      $("#country").select2();

      // Read selected option
      $('#but_read').click(function() {
        var username = $('#selUser option:selected').text();
        var userid = $('#selUser').val();

        $('#result').html("id : " + userid + ", name : " + username);
      });
    });
  </script>


</body>

</html>