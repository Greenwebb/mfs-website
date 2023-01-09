<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reset Password || Mighty Finance Solution</title>
  <!-- base:css -->
  <link rel="stylesheet" href="css/css-materialdesignicons.min.css">
  <link rel="stylesheet" href="css/css-vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light-style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.jpg">
</head>
<style>
  .auth .brand-logo img {
    width: 13rem;
  }.content-wrapper.user-pages {
    background-image: linear-gradient(to right, #662d91, #912d73);
}
</style>

<?php include "../components/preloader.php" ?>

<body>
  
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper user-pages d-flex align-items-center auth px-0">
        
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <center>
                <div class="brand-logo">
                  <img src="../images/logo.png" alt="logo">
                </div>
                <h4>Password otp! Hope you Remember you confirmation code.</h4>
                <h6 class="font-weight-light">Input confirmation code sent to your email.</h6>
              </center>
              <form method="post" action="includes/logic/reset.php" id="otp_form" class="pt-3">
                 <center>
             <?php    if (isset($_SESSION['account_success'])) {

$message = $_SESSION['account_success'];

echo <<<_END

<!-- ALERT-->

<div class="alert alert-success alert-success-style1 alert-success-stylenone">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">&times;</span>
</button>Enter OTP code sent to
<i class="fa fa-check adminpro-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
<p class="message-alert-none text-center"><strong>$message</strong></p>
</div>

<!-- END ALERT-->

_END;

unset($_SESSION['account_success']);
}



//check if there is an error message to be displayded on this page
if (isset($_SESSION['account_error'])) {

$message = $_SESSION['account_error'];

echo <<<_END

<!-- ALERT-->

<div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">&times;</span>
</button>
<i class="fa fa-times adminpro-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
<p class="message-alert-none text-center"><strong>$message</strong></p>
</div>

<!-- END ALERT-->

_END;

unset($_SESSION['account_error']);
} ?></center>
               <div class="mt-3">
                <div class="form-group">
                  <input required type="number" name="otp" class="form-control form-control-lg" id="otp" placeholder="Enter Confirmation Code">
                </div>
              
               
                <div class="mt-3">
                  <button type="submit" name="confirm" id="confirm" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SEND</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  do you want to cancel? <a href="login.php" class="text-primary">Go Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="js/js-vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/js-off-canvas.js"></script>
  <script src="js/js-hoverable-collapse.js"></script>
  <script src="js/js-template.js"></script>
  <script src="js/js-settings.js"></script>
  <script src="js/js-todolist.js"></script>
  <script src="js/custom/confirm.js"></script>
  <!-- endinject -->
</body>

</html>