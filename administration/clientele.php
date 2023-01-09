<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clientele || Mighty Finance Solution</title>
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
<style>
.icon-md {
    font-size: 3.10rem;
}</style>
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
                <div class="content-wrapper">
          <div class="row">
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
									<i class="mdi text-dark mdi-cash-multiple text-white icon-md img-lg rounded"></i>		
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<h6 class="mb-0">All Loans</h6>
											<p class="text-muted mb-1">full list of all loans</p>
											<p class="mb-0 text-success font-weight-bold">open</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
                            <div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
									<i class="mdi text-dark mdi-calendar-clock text-white icon-md img-lg rounded"></i>		
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<h6 class="mb-0">Due Loans</h6>
											<p class="text-muted mb-1">Due Loans</p>
											<p class="mb-0 text-success font-weight-bold">open</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
                            <div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
									<i class="mdi text-dark mdi-plus-box text-white icon-md img-lg rounded"></i>		
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<h6 class="mb-0">Add Loans</h6>
											<p class="text-muted mb-1">Create new Loan</p>
											<p class="mb-0 text-success font-weight-bold">open</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
                            <div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
									<i class="text-dark mdi mdi-chart-areaspline text-white icon-md img-lg rounded"></i>		
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<h6 class="mb-0">Loan Arrears</h6>
											<p class="text-muted mb-1">Create new Loan</p>
											<p class="mb-0 text-success font-weight-bold">open</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
                            <div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
									<i class="text-dark mdi mdi-clock-alert text-white icon-md img-lg rounded"></i>
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<h6 class="mb-0">Missed Repayments</h6>
											<p class="text-muted mb-1">Create new Loan</p>
											<p class="mb-0 text-success font-weight-bold">open</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
                            <div class="card-body">
									<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
									<i class="text-dark mdi-clipboard-alert mdi	text-white icon-md img-lg rounded"></i>	
										<div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
											<h6 class="mb-0">Upaid Loans Repayments</h6>
											<p class="text-muted mb-1">Create new Loan</p>
											<p class="mb-0 text-success font-weight-bold">open</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                        
					</div>
					<div class="row">
            
          </div>
			
            
          <div class="row">
            <div class="col-md-4 grid-margin">
							<div style="background-color: #1daf2f !important;" class="card bg-success d-flex align-items-center">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										<i class="mdi mdi-marker-check text-white icon-md"></i>
										<div class="ml-3">
											<h6 class="text-white">Approve Loans</h6>
											<p class="mt-2 text-white card-text">approve loan requests</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin">
							<div class="card bg-linkedin d-flex align-items-center">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										<i class="mdi mdi-linkedin text-white icon-md"></i>
										<div class="ml-3">
											<h6 class="text-white">Clients</h6>
											<p class="mt-2 text-white card-text">Full list of clients</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin">
							<div class="card bg-twitter d-flex align-items-center">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										<i class="mdi mdi-twitter text-white icon-md"></i>
										<div class="ml-3">
											<h6 class="text-white">Pending Registration</h6>
											<p class="mt-2 text-white card-text">You main list growing</p>
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
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/js-dashboard.js"></script>
     <script src="js/custom/safe.js"></script>
    <!-- End custom js for this page-->
</body>

</html>