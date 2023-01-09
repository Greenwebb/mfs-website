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
                <div class="content-wrapper p-0">

                    <?php include 'components/note/note.php' ?>

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
                                        <i class="mdi mdi-calendar-blank"></i> Customers
                                    </a>
                                    <a class="dropdown-item" href="vertical-default-light.html">
                                        <i class="mdi mdi-calendar-blank"></i> Reports
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="mr-3 pr-1 ml-3 pl-1 mb-3 mb-lg-0">
                            <div class="dropdown">
                                <button type="button" class="btn btn-outline-light btn-icon-text dropdown-toggle" data-toggle="dropdown" id="profileDropdown3" aria-expanded="false">
                                    <i class="mdi mdi-calendar-blank btn-icon-prepend"></i>
                                    Last 30 days
                                </button>
                                <div class="dropdown-menu dropdown-menu-left custom-drop-down" aria-labelledby="profileDropdown3">
                                    <a class="dropdown-item" href="vertical-default-light.html">
                                        <i class="mdi mdi-calendar-blank"></i> Last 2 weeks
                                    </a>
                                    <a class="dropdown-item" href="vertical-default-light.html">
                                        <i class="mdi mdi-calendar-blank"></i> Last 7 days
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-content home-tab-content">
                        <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">
                            <div class="d-sm-flex justify-content-between align-items-center my-3">
                                <h3 class="text-dark font-weight-medium">laons dashboard overview</h3>
                                <div class="link-btn-group d-flex justify-content-start align-items-start">
                                    <button type="button" class="btn btn-link text-dark py-0 pl-0">Add info</button>
                                    <button type="button" class="btn btn-link text-dark py-0">Get updated by email</button>
                                    <button type="button" class="btn btn-link text-dark py-0">See more</button>
                                </div>
                            </div>
                            <div class="row">


                                <div id="loan_status" style="display:none" class="col-xl-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="custom-fieldset mb-4">
                                                <div class="clearfix">
                                                    <label class="">Loan Status</label>
                                                </div>
                                                <div class="d-lg-flex align-items-center text-dark">
                                                    <i class="mdi mdi-inbox-arrow-up mr-3 mdi-36px animate-icon"></i>
                                                    <div>
                                                        <h2 class="mb-0 mt-2 mt-sm-0">ZMW45300</h2>
                                                        <div class="text-light d-flex align-items-center"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up mdi-18px"></i>+4531</span>avg. laons per day</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-fieldset mt-3">
                                                <div class="clearfix">
                                                    <label>Loans PaidBack</label>
                                                </div>
                                                <div class="d-lg-flex align-items-center text-dark">
                                                    <i class="mdi mdi-cart-outline mr-3 mdi-36px animate-icon"></i>
                                                    <div>
                                                        <h2 class="mb-0 mt-2 mt-sm-0">ZMW61404</h2>
                                                        <div class="text-light d-flex align-items-center"><span class="text-danger mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-down mdi-18px"></i>-231.33</span>avg. laons per day</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="loan_editer" style="display:none" class="col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Values range</h4>
                                            <p class="card-description">noUiSlider will keep your values within the slider range, which saves you a bunch of validation.</p>
                                            <div class="template-demo">
                                                <div id="value-range" class="ul-slider slider-success"></div>
                                                <p class="mt-3">Value: <span id="huge-value"></span></p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Slider handles</h4>
                                            <div class="template-demo">
                                                <div id="skipstep" class="ul-slider slider-success"></div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mt-3">Value: <span id="skip-value-lower"></span></p>
                                                    <p class="mt-3">Value: <span id="skip-value-upper"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 grid-margin stretch-card">
                                    
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">jquery-steps wizard</h4>
                                            <form id="example-form" action="#">
                                                <div role="application" class="wizard clearfix" id="steps-uid-0">
                                                    <div class="steps clearfix">
                                                        <ul role="tablist">
                                                            <li role="tab" class="first done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="number">1.</span> Account</a></li>
                                                            <li role="tab" class="current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="current-info audible">current step: </span><span class="number">2.</span> Profile</a></li>
                                                            <li role="tab" class="done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Comments</a></li>
                                                            <li role="tab" class="last done" aria-disabled="false" aria-selected="false"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Finish</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content clearfix">
                                                        <h3 id="steps-uid-0-h-0" tabindex="-1" class="title">Account</h3>
                                                        <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body" aria-hidden="true" style="left: -225.266px; display: none;">
                                                            <h3>Account</h3>
                                                            <div class="form-group">
                                                                <label>Email address</label>
                                                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Confirm Password</label>
                                                                <input type="password" class="form-control" placeholder="Confirm password">
                                                            </div>
                                                        </section>
                                                        <h3 id="steps-uid-0-h-1" tabindex="-1" class="title current">Profile</h3>
                                                        <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body current" aria-hidden="false" style="left: 0px;">
                                                            <h3>Profile</h3>
                                                            <div class="form-group">
                                                                <label>First name</label>
                                                                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter first name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Last name</label>
                                                                <input type="password" class="form-control" placeholder="Last name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Profession</label>
                                                                <input type="password" class="form-control" placeholder="Profession">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Profession</label>
                                                                <input type="password" class="form-control" placeholder="Profession">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Profession</label>
                                                                <input type="password" class="form-control" placeholder="Profession">
                                                            </div>
                                                            
                                                            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Jquery file upload</h4>
                  <div class="file-upload-wrapper">
                    <div id="fileuploader">Upload</div>
                  </div>
                </div>
              </div>
            </div>
            
              <br>
                                                        </section>
                                                        <h3 id="steps-uid-0-h-2" tabindex="-1" class="title">Comments</h3>
                                                        <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="left: 225.266px; display: none;">
                                                            <h3>Comments</h3>
                                                            <div class="form-group">
                                                                <label>Comments</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </section>
                                                        <h3 id="steps-uid-0-h-3" tabindex="-1" class="title">Finish</h3>
                                                        <section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="left: 225.266px; display: none;">
                                                            <h3>Finish</h3>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="checkbox" type="checkbox">
                                                                    I agree with the Terms and Conditions.
                                                                    <i class="input-helper"></i></label>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="actions clearfix">
                                                        <ul role="menu" aria-label="Pagination">
                                                            <li class="" aria-disabled="false"><a href="#previous" role="menuitem">Previous</a></li>
                                                            <li aria-hidden="false" aria-disabled="false" class="" style=""><a href="#next" role="menuitem">Next</a></li>
                                                            <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="text-dark font-weight-medium">Today Earnings</p>
                                                    <h1 class="text-dark  mt-3">ZMW2850</h1>
                                                    <p class="text-dark text-small"><span class="circle-arrow"><i class="mdi mdi-arrow-top-right"></i></span>Avg. laons per Day</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <canvas id="earnings" class=" mt-3"></canvas>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6 mb-4 mb-sm-0">
                                                    <p class="text-dark">Total Income</p>
                                                    <h2 class="text-dark  mt-2">ZMW2850</h2>
                                                    <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i>+43.54%</span>Last week</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-dark">Total Expenses</p>
                                                    <h2 class="text-dark  mt-2">ZMW54345</h2>
                                                    <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i>0.7% </span>Last month</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div>
                                                <img src="https://www.bootstrapdash.com/demo/wagondash/template/images/faces/face5.jpg" class="img-lg rounded-circle mb-2" alt="profile image" />
                                                <h4>George Munganga</h4>
                                                <p class="text-muted mb-0">Developer</p>
                                            </div>
                                            <p class="mt-2 card-text">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                Aenean commodo ligula eget dolor. Lorem
                                            </p>
                                            <button class="btn btn-info btn-sm mt-3 mb-4">Update profile</button>
                                            <div class="border-top pt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>5896</h6>
                                                        <p>Post</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <h6>1596</h6>
                                                        <p>Followers</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <h6>7896</h6>
                                                        <p>Likes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Total Conversion Rate</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">Mar 28 - Apr 28.2019</h6>
                                                <button type="button" class="btn btn-outline-primary">Details</button>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9 mb-4 mb-sm-0">
                                                    <h1 class="font-weight-medium m-0 text-dark">ZMW2345.00 <span class="text-danger text-small font-weight-normal">-11.45% (1.2%)</span></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="total-conversion"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Avg. Order Quantity</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">Mar 28 - Apr 28.2019</h6>
                                                <button type="button" class="btn btn-outline-primary">Details</button>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9  mb-4 mb-sm-0">
                                                    <h1 class="font-weight-medium m-0 text-dark">4,356 <span class="text-success text-small font-weight-normal">+54.34 (1.2%)</span></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="avrg-order-quantity"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Percentage of licenses used</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">Mar 28 - Apr 28.2019</h6>
                                                <button type="button" class="btn btn-outline-primary">Details</button>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9 mb-4 mb-sm-0">
                                                    <h1 class="font-weight-medium m-0 text-dark">45.34% <span class="text-success text-small font-weight-normal">+24.18 (2.6%)</span></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="percentage"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <h4 class="card-title">Purchase History</h4>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-icon-text my-2 my-lg-0">
                                                        <i class="mdi mdi-printer text-extra-small btn-icon-prepend"></i>
                                                        Print
                                                    </button>
                                                    <button type="button" class="btn btn-outline-primary btn-icon-text ml-3  my-2 my-lg-0">
                                                        <i class="mdi mdi-email-outline text-extra-small btn-icon-prepend"></i>
                                                        Email
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-3  my-2 my-lg-0">Generate Report</button>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <span class="pr-2">Sales</span><span class="pr-2"><i class="mdi mdi-chevron-right"></i></span><span>Purchase history</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Product
                                                                    </th>
                                                                    <th>
                                                                        Order ID
                                                                    </th>
                                                                    <th>
                                                                        Date
                                                                    </th>
                                                                    <th>
                                                                        Price
                                                                    </th>
                                                                    <th>
                                                                        Status
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><img src="images/products-1.jpg" class="product-icon" alt="image">
                                                                            <div> Reebok Running Shoes</div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        #4200
                                                                    </td>
                                                                    <td>
                                                                        28 Dec 2019
                                                                    </td>
                                                                    <td>
                                                                        $342.00
                                                                    </td>

                                                                    <td>
                                                                        <span class="text-danger">Pending</span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-outline-primary btn-rounded">Details</button>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><img src="images/products-2.jpg" class="product-icon" alt="image">
                                                                            <div>Puma Women's Shoes</div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        #4202
                                                                    </td>
                                                                    <td>
                                                                        04 Jan 2019
                                                                    </td>
                                                                    <td>
                                                                        $244.00
                                                                    </td>

                                                                    <td>
                                                                        <span class="text-success">Completed</span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-outline-primary btn-rounded">Details</button>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><img src="images/products-3.jpg" class="product-icon" alt="image">
                                                                            <div>Acteo Men's Loafers</div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        #4210
                                                                    </td>
                                                                    <td>
                                                                        09 Jul 2019
                                                                    </td>
                                                                    <td>
                                                                        $575.00
                                                                    </td>

                                                                    <td>
                                                                        <span class="text-warning">Shipping</span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-outline-primary btn-rounded">Details</button>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><img src="images/products-4.jpg" class="product-icon" alt="image">
                                                                            <div>ADL Headphones </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        #4232
                                                                    </td>
                                                                    <td>
                                                                        16 May 2019
                                                                    </td>
                                                                    <td>
                                                                        $664.00
                                                                    </td>

                                                                    <td>
                                                                        <span class="text-danger">Pending</span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-outline-primary btn-rounded">Details</button>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><img src="images/products-5.jpg" class="product-icon" alt="image">
                                                                            <div>Vuhom Sunglasses </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        #4290
                                                                    </td>
                                                                    <td>
                                                                        22 Feb 2019
                                                                    </td>
                                                                    <td>
                                                                        $123.00
                                                                    </td>

                                                                    <td>
                                                                        <span class="text-danger">Pending</span>
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-outline-primary btn-rounded">Details</button>

                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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