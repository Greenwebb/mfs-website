<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mighty finance Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="css/css-materialdesignicons.min.css">
    <link rel="stylesheet" href="css/css-vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light-style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png">
</head>

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

                            </ul>
                            <div class="dropdown arrow-none d-lg-block d-none">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="profileDropdown5" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-left custom-drop-down" aria-labelledby="profileDropdown5">
                                    <a class="dropdown-item" href="view_borrower.php">
                                        <i class="mdi mdi-calendar-blank"></i> Customers
                                    </a>
                                    <a class="dropdown-item" href="vertical-default-light.html">
                                        <i class="mdi mdi-calendar-blank"></i> Reports
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="mr-3 pr-1 ml-3 pl-1 mb-3 mb-lg-0">
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
                        </div>-->

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
                                <div class="col-xl-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="card-title mb-0">Clientele</h4>
                                                <button type="button" class="btn btn-link btn-md text-light p-0">14 Jan 2021</button>
                                            </div>
                                            <h2 id="clientele_total" class="text-dark font-weight-bold my-3">loading..</h2>
                                            <canvas></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="custom-fieldset mb-4">
                                                <div class="clearfix">
                                                    <label class="">Given Loans</label>
                                                </div>
                                                <div class="d-lg-flex align-items-center text-dark">
                                                    <i class="mdi mdi-inbox-arrow-up mr-3 mdi-36px animate-icon"></i>
                                                    <div>
                                                        <h2 id="total_given" class="mb-0 mt-2 mt-sm-0">loading..</h2>
                                                        <div class="text-light d-flex align-items-center"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up mdi-18px"></i><span id="active_given_loans"></span></span>active given loans</div>
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
                                                        <h2 id="loans_payedback" class="mb-0 mt-2 mt-sm-0">loading..</h2>
                                                        <div class="text-light d-flex align-items-center"><span class="text-danger mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-down mdi-18px"></i><span id="fully_paidback"></span></span>fully paid back</div>
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
                                                    <p class="text-dark font-weight-medium">Total Earnings</p>
                                                    <h1 id="total_earnings" class="text-dark  mt-3">loading..</h1>
                                                    <p class="text-dark text-small"><span class="circle-arrow"><i class="mdi mdi-arrow-top-right"></i><span id="net_earnings"></span></span>.Net Earnings</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <canvas class=" mt-3"></canvas>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6 mb-4 mb-sm-0">
                                                    <p class="text-dark">Total Income</p>
                                                    <h2 id="total_income" class="text-dark  mt-2">loading..</h2>
                                                    <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i><span id="last_week"></span></span>Last week</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-dark">Total Expenses</p>
                                                    <h2 id="total_expense" class="text-dark mt-2">loading..</h2>
                                                    <div class="text-light d-flex align-items-center text-extra-small"><span class="text-success mr-2 font-weight-medium d-flex align-items-center"><i class="mdi mdi-menu-up  mdi-18px"></i><span id="one_month">loading..</span></span></span>Last month</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <h4 class="card-title">Revenue Statistics</h4>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-outline-light dropdown-toggle my-2 my-lg-0" data-toggle="dropdown" id="profileDropdown2">
                                                        <i class="mdi mdi-calendar-blank text-extra-small"></i> Jan 12,2019 - Mar 12,2019
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-left custom-drop-down" aria-labelledby="profileDropdown2">
                                                        <a class="dropdown-item" href="vertical-default-light.html">
                                                            <i class="mdi mdi-calendar-blank"></i> Sep 12,2018 - Dec 12,2018
                                                        </a>
                                                        <a class="dropdown-item" href="vertical-default-light.html">
                                                            <i class="mdi mdi-calendar-blank"></i> Jun 12,2018 - Aug 12,2018
                                                        </a>
                                                    </div>
                                                    <button type="button" class="btn btn-warning ml-sm-3 my-2 my-lg-0">Download Report</button>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <span class="pr-2">Sales</span><span class="pr-2"><i class="mdi mdi-chevron-right"></i></span><span>Revenue statistics</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row chart-legends-revenue-statistics">
                                                        <div class="col-sm-6 mb-4 mb-sm-0">
                                                            <div class="legend-label d-flex align-items-center">
                                                                <span class="bg-secondary"></span>
                                                                <h5 class="mb-0 font-weight-normal">Gross Earnings</h5>
                                                            </div>
                                                            <h3 class="text-dark font-weight-medium mt-2">ZMW 00.00</h3>
                                                        </div>
                                                        <div class="col-sm-6  mb-4 mb-sm-0">
                                                            <div class="legend-label d-flex align-items-center">
                                                                <span class="bg-info"></span>
                                                                <h5 class="mb-0 font-weight-normal">Net Profit</h5>
                                                            </div>
                                                            <h3 class="text-dark font-weight-medium mt-2">ZMW 000.00</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="text-dark font-weight-normal">Summary</h5>
                                                    <p>A comparison of people who mark themeselves of their interest based from the date range given above. <a href="#" class="text-success">Learn More</a></p>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-12">
                                                    <canvas id="revenue-statistics"></canvas>
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
                                            <h4 class="card-title mb-0">Loan Officers</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">Mar 28 - <?php echo date("jS \of F Y");?>
                                                </h6>
                                                <button type="button" class="btn btn-outline-primary">Details</button>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9 mb-4 mb-sm-0">
                                                    <h2 id="officer_total" class="text-dark font-weight-bold my-3">loading..<span class="text-danger text-small font-weight-normal">live monitor</span></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="total-conversion"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Other Income</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">Mar 28 - <?php echo date("jS \of F Y");?></h6>
                                                <button type="button" class="btn btn-outline-primary">Details</button>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9  mb-4 mb-sm-0">
                                                    <h2 id="other_income" class="text-dark font-weight-bold my-3">loading..<span class="text-success text-small font-weight-normal">live monitor</span></h1>
                                                </div>

                                                <div class="col-xl-3"><canvas id="avrg-order-quantity"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Percentage of licenses used</h4>
                                            <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                                                <h6 class="font-weight-normal">Mar 28 - Apr 28.2019</h6>
                                                <button type="button" class="btn btn-outline-primary">Details</button>
                                            </div>
                                            <div class="row mt-4 mb-4 mb-sm-0 d-flex align-items-center">
                                                <div class="col-xl-9 mb-4 mb-sm-0">
                                                <h2 id="officers_total" class="text-dark font-weight-bold my-3">loading..</h2>
                                                </div>

                                                <div class="col-xl-3"><canvas id="percentage"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>

                            <!--<div class="row">
                                <div class="col-md-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <h4 class="card-title">Recent Transaction History</h4>
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
                                                                        K342.00
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
                                                                        K244.00
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
                                                                        K575.00
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
                                                                        K664.00
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
                                                                        K123.00
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
                            </div>-->
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
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/js-dashboard.js"></script>
    <script src="js/custom/dashboard.js"></script>
    <script src="js/custom/safe.js"></script>
    <!-- End custom js for this page-->
</body>

</html>