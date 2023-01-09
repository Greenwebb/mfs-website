<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login || Mighty Finance Admin</title>
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
    /*background-image: linear-gradient(to right, #662d91, #912d73);*/
}
.auth .login-half-bg {
    background: url(images/login-bg.jpg);
    background-size: cover;
}
</style>

<?php include "../components/preloader.php" ?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper user-pages d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
            <center><div class="brand-logo">
                <img src="../images/logo.png" alt="logo">
              </div>
              <h4>Welcome!</h4>
              <h6 class="font-weight-light">Happy to see you Admin!</h6></center>
              <form method="post" id="login_form" class="pt-3">
              <div class="form-group row">
                                               <t class="btn btn-block" style="font-size: 14px;" id="pass_notification"></t>
             </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Email ID</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input required type="email" oninput="login_check()" class="form-control form-control-lg" id="email" placeholder="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input required type="password" oninput="login_check()" class="form-control form-control-lg" id="password" placeholder="password">                       
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    <i class="input-helper"></i></label>
                  </div>
                  <a href="forgot.php" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                <button type="submit" name="login" id="login" class="btn btn-block text-white btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div> 
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © 2021  All rights reserved.</p>
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