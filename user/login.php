<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login || Mighty Finance Solution</title>
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
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
              </center>
              <form method="post" id="login_form" class="pt-3">
              <div class="form-group row">                                               
                                               
                                               <t class="btn btn-block" style="font-size: 14px;" id="pass_notification"></t>
                              
                                           </div>
               <div class="mt-3">
                <div class="form-group">
                  <input required type="tel" minlength="9" maxlength="10" oninput="login_check()" class="form-control form-control-lg" id="phone_no" placeholder="mobile">
                </div>
                <div class="form-group">
                  <input required type="password" oninput="login_check()" class="form-control form-control-lg" id="password" placeholder="password">
                </div>
                <div class="form-group row">                                               
                                               
                                                <t class="btn btn-block" id="message"></t>
                               
                                            </div>
                <div class="mt-3">
                  <button type="submit" name="login" id="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="forgot.php" class="auth-link text-black">Forgot password?</a>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
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
  <script src="js/custom/login.js"></script>
  <!-- endinject -->
</body>

</html>