<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard || Mighty Finance </title>
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

  input[type="range"],
  input[type="range"]::-moz-range-track {
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 100%;
    border-radius: 5px;
    background: #c170ff38;
    outline: none;
    transition: opacity 0.2s;
  }

  input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #2b8aeb;
    cursor: pointer;
    outline: none;
    height: 0px;
  }

  input[type="range"]::-moz-range-thumb {
    -moz-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #662d91;
    cursor: pointer;
    outline: none;
    z-index: 10;

  }

  input[type="range"]:focus {
    outline: none;
  }
</style>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include 'components/constants_views/top_nav.php' ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <?php include 'components/constants_views/side_nav.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper p-0">
          <?php include 'components/note/note.php' ?>

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <div class="d-sm-flex justify-content-between align-items-center border-bottom">
            <div class="d-flex align-items-center">
              <ul class="nav nav-tabs home-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="Dashboards-tab" data-toggle="tab" href="#Dashboards-1" role="tab" aria-controls="Dashboards-1" aria-selected="true">Dashboard</a>
                </li>

              </ul>
              <div class="dropdown arrow-none d-lg-block d-none">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="profileDropdown5" aria-expanded="false">
                  <i class="mdi mdi-dots-horizontal"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-left custom-drop-down" aria-labelledby="profileDropdown5">
                  <a class="dropdown-item" href="vertical-default-light.html">
                    <i class="mdi mdi-calendar-blank"></i>Get Reports
                  </a>
                </div>
              </div>

            </div>

          </div>

          <div class="tab-content home-tab-content">
            <?php

            $quer = "SELECT COUNT(`id`) AS loanoverall FROM loans where client_id = $userid";
            $stmt = $con->prepare($quer);
            $stmt->execute();
            $queryResul = $stmt->get_result();
            $arrayResul = $queryResul->fetch_assoc();
            $loanoverall = number_format($arrayResul['loanoverall']);


            if ($eligibility != "disabled") {
              if ($loanoverall == 0) {
                if ($nrc == NULL || $status == NULL || $gender == NULL || $userphone == NULL || $doc_type == NULL || $birth_date == NULL) {
                  echo 'update profile';
                  # code...
                } else {
            ?><div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                    <div class="d-sm-flex justify-content-between align-items-center my-3">
                      <h3 class="text-dark font-weight-medium">loans dashboard process</h3>
                      <div class="link-btn-group d-flex justify-content-start align-items-start">
                        <button type="button" class="btn btn-link text-dark py-0 pl-0">Add info</button>
                        <button type="button" class="btn btn-link text-dark py-0">Get updated by email</button>
                        <button type="button" class="btn btn-link text-dark py-0">See more</button>
                      </div>
                    </div>
                    <?php if (isset($_SESSION['mobile_number'])) {
                      if (($_SESSION['mobile_number']) == $userphone) {
                        # code...
                      
                    ?><div class="row">

                        <div id="loan_editer" style="display:block" class="col-md-6 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Use this to show loan summary</h4>
                              <p class="card-description">noUiSlider will keep your values within the slider range, which saves you a bunch of validation. and after summary add documents to be dwnloaded depending on loan package</p>
                              <div class="template-demo">

                                <div id="value-range" class="ul-slider slider-success"></div>
                                <p class="mt-3">Amount: <span id="huge-value"><strong><?= $_SESSION['loan_amount'] ?></strong></span></p>
                                <p class="mt-3">Duration: <span id="huge-value"><strong><?= $_SESSION['duration'] ?></strong></span></p>
                                <p class="mt-3">Loan Package: <span id="huge-value"><strong><?= $_SESSION['Loan_type'] ?></strong></span></p>
                                <p class="mt-3">returning: <span id="huge-value"><strong><?= $_SESSION['age'] ?></strong></span></p>
                                <p class="mt-3"><button type="button" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Edit</button></p>

                              </div>
                              <div style="background: #fbf1ff;" class="card-body">
                                <h4 class="card-title">Use this to edit</h4>
                                <div class="template-demo">
                                  <div id="skipstep" class="ul-slider slider-success"></div>
                                  <div class="d-flex justify-content-between">
                                    <form class="form-sample">
                                      <p class="card-description">
                                        Personal info
                                      </p>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Amount</label>
                                            <div class="col-sm-9">
                                              <input step="500" min="500" value="1" max="5000" type="range" class="form-control">
                                            </div>
                                          </div>
                                        </div>

                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group row">
                                          <label class="col-sm-9 col-form-label">Loan type</label>
                                          <div class="col-sm-4">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked="">
                                                Salary Advance
                                                <i class="input-helper"></i></label>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                                Collateral
                                                <i class="input-helper"></i></label>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                                SML
                                                <i class="input-helper"></i></label>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                                SME
                                                <i class="input-helper"></i></label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Duration</label>
                                        <div class="col-sm-9">
                                          <input step="500" min="500" value="1" max="5000" type="range" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-success ml-lg-0 ml-xl-2 ml-2 ml-l mt-lg-2 mt-xl-0">Done</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><?php
                            }} ?>


<div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Complete Loans process</h4>
                        <form id="example-form" action="includes/logic/submit_loan.php">
                          <div>
                            <h3>Loan Details</h3>
                            <section>
                              <h3>Loan Details</h3>

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2">Loan Type</label>
                                        <select required class="form-control" name = "loan_typeid" id="exampleFormControlSelect2">
                                        
                                        <?php $result = mysqli_query($con, "SELECT * FROM loan_types");

while ($row = mysqli_fetch_assoc($result)) {
  $lid = $row['id'];

  $ltype =  $row['loan_type'];

echo <<<_iwe


<option value="$lid" > $ltype </option>
_iwe;
} ?>
                                        </select>
                                      </div>
                                    

                              <div class="form-group">
                                <label></label>
                                <input required type="number" id="amount" name="amount" class="form-control" aria-describedby="emailHelp" placeholder="Amount">
                                <small id="emailHelp" class="form-text text-muted">Please enter the amount you want to get</small>
                              </div>
                              <div class="form-group mb_5">
                                <label>Duration</label>
                                <input required type="number" name="duration" class="form-control" placeholder="duration">
                              </div>
                              <div class="form-group mb_5">
                                <label>Monthly Repaymentdate</label>
                                <input required type="number" name="monthlyr_date" class="form-control" placeholder="eg 24th">
                              </div>
                              <div class="form-group">
                                <label>Purpose</label>
                                <textarea class="form-control" name="purpose" rows="3" required></textarea>
                              </div>
                        <br>
                            </section>
                            <h3>Document</h3>
                            <section>
                              <h3>Document</h3>
                              <div class="form-group">
                                <label>Document Types </label>
                                <select required class="form-control" name="collateral_type" id="loan_type">
                              <option disabled selected>choose type</option>
                              <?php $result = mysqli_query($con, "SELECT * FROM collateral_types");

                                    while ($row = mysqli_fetch_assoc($result)) {


$cid = $row['id'];

$ctype =  $row['type'];

echo <<<_iwe
<option value="$cid" > $ctype </option>
_iwe;
} ?>


                          
                            </select>
                              </div>
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="desc" rows="3" required></textarea>
                              </div>

                              <div class="form-group">
                                <label>Document</label>
                                <input required type="file" class="form-control" id="file" name="col" placeholder="Profession">
                              </div>
                          

                              <br>
                            </section>
                            <h3>Guarantor</h3>
                            <section>
                              <h3>Guarantor</h3>
                              <div class="form-group"><label>Guarantor Names</label>
                              <div class="form-group row">
                                
                                  <div class="input-group col">  
                                                                    
                                    <input required type="text" placeholder="firstname" name="gfname" class="form-control"  aria-label="Username">
                                  </div>
                                  <div class="input-group col">
                                  <label></label>
                                    <input required type="text" name="glname" class="form-control" placeholder="lastname" aria-label="Username">
                                  </div>
                                </div>   
                              <div class="form-group mb_5">
                                <label>Date of birth</label>
                                <input required max="2000-01-02" type="date" name="dob" class="form-control" placeholder="duration">
                              </div>
                              <div class="form-group mb_5">
                                <label>Phone</label>
                                <input required type="tel"name="phone" minlength="10" maxlength="10" class="form-control" placeholder="phone">
                              </div>
                              <div class="form-group mb_5">
                                <label>NRC</label>
                                <input required type="text" name="nrc" class="form-control" placeholder="eg 1234/12/1">
                              </div>
                              <div class="form-group mb_5">
                                <label>Address</label>
                                <input required type="text" name="address" class="form-control" placeholder="eg house no1, street 2">
                              </div>
                              <div class="form-group mb_5">
                                <label>Relation</label>
                                <input required type="text" name="relation" class="form-control" placeholder="eg. brother/employee">
                              </div>
                              <br>
                              </div>
                            </section>
                            <h3>Finish</h3>
                            <section>
                              <h3>Finish</h3>
                              <br>
                        
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="checkbox" type="checkbox" required>
                                  I agree with the Terms and Conditions.
                                </label>
                              </div>
                              <div class="form-group">
                                <div class="card card-body">
                                <input required type="hidden" name="add_loan" value="Get_Loan" >
                                </div>
                              </div>

                            </section>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                      </div>
                  </div><?php
                      }
                    } else {

                      $result =  "SELECT * FROM loans WHERE client_id =  $userid";
                      $queryResults = $con->query($result);

                      if ($queryResults->num_rows > 0) {
                        $row = $queryResults->fetch_assoc();
                        # code... $row = $queryResults->fetch_assoc();
                        $loanstatus =  $row['status'];
                        $loanamount =  $row['amount'];
                        $loanramount =  $row['repayment_amount'];
                        $status = $row['status'];
                        $duration = $row['duration'];
                        $acquisition = $row['id_acquistion'];
                        //$acquisition_date = $row[''];
                        $release = $row['release_date'];
                        $officer_id = $row['officer_id'];
                        $repayment_amount = $row['repayment_amount'];
                        $interest = $row['interest'];
                        $loan_typeid = $row['loan_typeid'];
                        $esult =  "SELECT * FROM loan_types WHERE id =  $loan_typeid";
                        $queryesults = $con->query($esult);
                      } else {
                        echo 'error';
                      }


                      if ($loanstatus == 'pending') {
                        ?> <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                    <div class="row">


                      <div id="loan_status" class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="custom-fieldset mb-4">
                              <div class="clearfix">
                                <label class="">Amount Requested</label>
                              </div>
                              <div class="d-lg-flex align-items-center text-dark">
                                <i class="mdi mdi-inbox-arrow-up mr-3 mdi-36px animate-icon"></i>
                                <div>
                                  <h2 class="mb-0 mt-2 mt-sm-0">ZMW <?= $loanamount ?></h2>
                                  <div class="text-light d-flex align-items-center"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up mdi-18px"></i>+</span>avg. total loan you have requested for</div>
                                </div>
                              </div>
                            </div>
                            <div class="custom-fieldset mt-3">
                              <div class="clearfix">
                                <label>Amount to payback</label>
                              </div>
                              <div class="d-lg-flex align-items-center text-dark">
                                <i class="mdi mdi-cart-outline mr-3 mdi-36px animate-icon"></i>
                                <div>
                                  <h2 class="mb-0 mt-2 mt-sm-0">ZMW <?= $loanramount ?></h2>
                                  <div class="text-light d-flex align-items-center"><span class="text-danger mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-down mdi-18px"></i></span>avg. total you are to payback.</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="text-dark font-weight-medium">More Loan Details</p>
                                <h1 class="text-dark  mt-3">
                                  <>
                                </h1>
                                <p class="text-dark text-small"><span class="circle-arrow"><i class="mdi mdi-arrow-top-right"></i></span>Avg. laons per Day</p>
                              </div>
                              <div class="col-md-6">
                                <canvas id="earnings" class=" mt-3"></canvas>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-6 mb-4 mb-sm-0">
                                <p class="text-dark">Duration</p>
                                <h2 class="text-dark  mt-2"><?= $duration ?: "0" ?></h2>
                                <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i></span>loan duration requested for</div>
                              </div>
                              <div class="col-md-6">
                                <p class="text-dark">Acquisition</p>
                                <h2 class="text-dark  mt-2"><?= $acquisition ?: "0" ?></h2>
                                <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i></span>Acqusition of loan</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <div>
                              <img src="<?= $profile ?>" class="img-lg rounded-circle mb-2" alt="profile image" />
                              <h4><?= $userfname . " " . $userlname ?></h4>
                              <p class="text-muted mb-0"><?= $working_status ?></p>
                            </div>
                            <p class="mt-2 card-text"><?= $business ?: "" ?>
                            </p>
                            <button class="btn btn-info btn-sm mt-3 mb-4">Update profile</button>
                            <div class="border-top pt-3">
                              <div class="row">
                                <div class="col-4">
                                  <h6>mobile</h6>
                                  <p><?= $userphone ?></p>
                                </div>
                                <div class="col-4">
                                  <h6>ID</h6>
                                  <p><?= $nrc ?></p>
                                </div>
                                <div class="col-4">
                                  <h6>document type</h6>
                                  <p><?= $doc_type ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><?php
                      } elseif ($loanstatus == 'approved') {
                        ?> <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                    <div class="row">


                      <div id="loan_status" class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="custom-fieldset mb-4">
                              <div class="clearfix">
                                <label class="">Amount</label>
                              </div>
                              <div class="d-lg-flex align-items-center text-dark">
                                <i class="mdi mdi-inbox-arrow-up mr-3 mdi-36px animate-icon"></i>
                                <div>
                                  <h2 class="mb-0 mt-2 mt-sm-0">ZMW <?= $loanamount ?></h2>
                                  <div class="text-light d-flex align-items-center"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up mdi-18px"></i>+</span>avg. total loan you have requested for</div>
                                </div>
                              </div>
                            </div>
                            <div class="custom-fieldset mt-3">
                              <div class="clearfix">
                                <label>Amount to payback</label>
                              </div>
                              <div class="d-lg-flex align-items-center text-dark">
                                <i class="mdi mdi-cart-outline mr-3 mdi-36px animate-icon"></i>
                                <div>
                                  <h2 class="mb-0 mt-2 mt-sm-0">ZMW <?= $loanramount ?></h2>
                                  <div class="text-light d-flex align-items-center"><span class="text-danger mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-down mdi-18px"></i></span>avg. total you are to payback.</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <p class="text-dark font-weight-medium">Loan Status</p>
                                <h1 class="text-dark  mt-3">active</h1>
                                <p class="text-dark text-small"><span class="circle-arrow"><i class="mdi mdi-arrow-top-right"></i></span>current running loan</p>
                              </div>
                              <div class="col-md-6">
                                <canvas id="earnings" class=" mt-3"></canvas>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-6 mb-4 mb-sm-0">
                                <p class="text-dark">Duration</p>
                                <h2 class="text-dark  mt-2"><?= $duration ?: "0" ?></h2>
                                <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i></span>loan duration requested for</div>
                              </div>
                              <div class="col-md-6">
                                <p class="text-dark">Acquisition</p>
                                <h2 class="text-dark  mt-2"><?= $acquisition ?: "0" ?></h2>
                                <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i></span>Acqusition of loan</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <div>
                              <img src="<?= $profile ?>" class="img-lg rounded-circle mb-2" alt="profile image" />
                              <h4><?= $userfname . " " . $userlname ?></h4>
                              <p class="text-muted mb-0"><?= $working_status ?></p>
                            </div>
                            <p class="mt-2 card-text"><?= $business ?: "" ?>
                            </p>
                            <button class="btn btn-info btn-sm mt-3 mb-4">Update profile</button>
                            <div class="border-top pt-3">
                              <div class="row">
                                <div class="col-4">
                                  <h6>mobile</h6>
                                  <p><?= $userphone ?></p>
                                </div>
                                <div class="col-4">
                                  <h6>ID</h6>
                                  <p><?= $nrc ?></p>
                                </div>
                                <div class="col-4">
                                  <h6>document type</h6>
                                  <p><?= $doc_type ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><?php
                      } elseif ($loanstatus == 'denied') {
                        ?><div class="row">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="card-body">
                                  <button type="button" class="btn btn-warning">Previous Loan Has Been Denied please Contact Us</button>
        
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        
                  </div>
        
                </div><?php
                      }
                    }
                  } elseif ($eligibility == "disabled") {
                        ?><div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body">
                          <button type="button" class="btn btn-danger">Account Has Been Suspended please Contact Us</button>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>

        </div><?php

                  } ?>
      <footer class="footer">
        <div class="justify-content-center justify-content-sm-between">
          <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; 2019. All rights reserved.</span>
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
  <!-- inject:js -->
  <script src="js/js-off-canvas.js"></script>
  <script src="js/js-hoverable-collapse.js"></script>
  <script src="js/js-template.js"></script>
  <script src="js/js-settings.js"></script>
  <script src="js/js-todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="js/jquery-steps-jquery.steps.min.js"></script>
  <script src="js/jquery-validation-jquery.validate.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/js-wizard.js"></script>
  <!-- End custom js for this page-->
  <script src="js/js-formpickers.js"></script>
  <script src="js/js-form-addons.js"></script>
  <script src="js/js-x-editable.js"></script>
  <script src="js/js-dropify.js"></script>
  <script src="js/js-dropzone.js"></script>
  <script src="js/js-jquery-file-upload.js"></script>
  <script src="js/js-formpickers.js"></script>
  <script src="js/js-form-repeater.js"></script>
  <script src="js/js-inputmask.js"></script>
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
</body>

</html>