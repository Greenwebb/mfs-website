<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile Settings|| Mighty Finance </title>
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
</style>

<body>

  <div class="container-scroller">    
    <!-- partial:partials/_navbar.html -->

    <?php include 'components/constants_views/top_nav.php' ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include 'components/constants_views/side_nav.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="images/faces-face1.jpg" alt="profile" class="img-lg rounded-circle mb-3">
                        <div class="mb-3">
                          <h3> <?= $userfname . ' ' . $userlname ?></h3>
                          <div class="d-flex align-items-center justify-content-center">
                            <h5 class="mb-0 mr-2 text-muted">Zambia</h5>

                          </div>
                        </div>
                        <p class="w-75 mx-auto mb-3">You could request for deactivation if inactive. </p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-success mr-1">Deactivate Account</button>
                        </div>
                      </div>
                      <div class="border-bottom py-4">
                        <p>Profession</p>
                        <div>
                          <label class="badge badge-outline-dark">Information Design</label>
                        </div>
                      </div>

                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            Active
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                          <span class="float-right text-muted">
                            <?= $userphone ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                          <span class="float-right text-muted">
                            <?= $useremail ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Facebook
                          </span>
                          <span class="float-right text-muted">
                            <a href="#">Database null</a>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Twitter
                          </span>
                          <span class="float-right text-muted">
                            <a href="#">Database null</a>
                          </span>
                        </p>
                      </div>
                      <button class="btn btn-primary btn-block mb-2">Preview All</button>
                    </div>
                    <div class="col-lg-8">
                      <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                        <div class="text-center mt-4 mt-md-0">
                          <a href="tel:+260972827372"><button class="btn btn-outline-primary">Send us a message</button></a>
                          <a href="tel:+260972827372"><button class="btn btn-primary">Call us</button></a>
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <i class="mdi mdi-account-outline"></i>
                              Info
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="profile-feed">

                        <div class="d-flex align-items-start profile-feed-item">
                          <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <form id="settings_form" method="post">
                                <h4 class="card-title">Edit credentials</h4>
                                <p class="card-description">
                                Update your details
                                </p>
                                <div class="form-group row">
                                  <div class="input-group col">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><em class="fa fa-user"></em></span>
                                    </div>
                                    <input required type="text" id="fname" class="form-control" value=" <?= $userfname ?>" aria-label="Username">
                                  </div>
                                  <div class="input-group col">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><em class="fa fa-user"></em></span>
                                    </div>
                                    <input required type="text" id="lname" class="form-control" value=" <?=  $userlname ?>" aria-label="Username">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">@</span>
                                    </div>
                                    <input required type="email" id="email" class="form-control" value="<?= $useremail  ?>" placeholder="email" aria-label="Username">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Gender</span>
                                    </div>
                                      <select required class="form-control" name="gender" id="gender">
                                      <?php if ($gender == NULL){
                                      echo("<option selected disabled='select' value='select'>select option</option>");}else if($gender != NULL){
                                          echo("<option disabled selected value='$gender'>$gender</option>");
                                      } else{
                                        ?>
                                        <?php }?>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                      
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Address</span>
                                    </div>
                                      <input required class="form-control" value="<?= $address?>" placeholder="address" id="address">
                                      
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><em class="fa fa-phone"></em></span>
                                    </div>
                                    <input minlength="10" maxlength="10" required type="tel" id="phone" class="form-control" value="<?= $userphone ?>" aria-label="Username">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><em class="fa fa-id-card"></em>&nbsp ID</span>
                                    </div>
                                    <input required id="nrc" type="text" class="form-control" value="<?= $nrc?>" placeholder="ID" aria-label="Username">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Nationality</span>
                                    </div>
                                    <select required class="form-control" id="country">
                                    <option id="country" selected disabled value="select">select country</option>
                                      <option value="zambia">Zambian</option>
                                      <option value="sa">SA</option>
                                      <option value="malawi">Malawi</option>
                                      <option value="algeria">Algeria</option>
                                      <option value="bostwana">Botswana</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">ID TYPE</span>
                                    </div>

                                    <select id="doc_type" required class="form-control" id="exampleFormControlSelect2">
                                    <?php if ($doc_type == NULL){
                                      echo("<option selected disabled='select' value='select'>select option</option>");}else if($doc_type != NULL){
                                          echo("<option disabled selected value='$doc_type'>$doc_type</option>");
                                      } else{
                                        ?>
                                        <?php }?>
                                      <option value="National_ID">National ID</option>
                                      <option value="passport">Passport</option>
                                      <option value="driver_license">Drivers License</option>
                               
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">STATUS</span>
                                    </div>
                                    <select id="status" required class="form-control" id="exampleFormControlSelect2">
                                     
                                      <?php if ($status == NULL){
                                      echo("<option selected disabled='select' value='select'>select option</option>");}else if($status != NULL){
                                          echo("<option disabled selected value='$status'>$status</option>");
                                      } else{
                                        ?>
                                      <?php }?>
                                      <option value="married" >Married</option>
                                      <option value="single">Single</option>
                                      <option value="devorced" >Devorced</option>
                                      <option value="widowed">Widowed</option>
                                     
                                     
                                      
                                    </select>
                                  </div>
                                </div>
                                 <button  id="update" name="update_profile" type="submit" class="btn btn-primary btn-block mb-2">Submit</button>
                    
                                       
                              </div></form>
                            </div>
                          </div>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="justify-content-center justify-content-sm-between">
            <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; 2021. All rights reserved.</span>
          </div>
        </footer>
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
  <script src="js/custom/settings.js"></script>
  <script src="js/js-off-canvas.js"></script>
  <script src="js/js-hoverable-collapse.js"></script>
  <script src="js/js-template.js"></script>
  <script src="js/js-settings.js"></script>
  <script src="js/js-todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
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
  <!-- endinject -->
  <!-- plugin js for this page -->

</body>

</html>