<?php include "includes/logic/header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>View Loans || Mighty Finance </title>
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
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">All Loans</h4>

              <?php

              //check if there is a success property_enquiry to be displayded on this page
              if (isset($_SESSION['loan_success'])) {

                $message = $_SESSION['loan_success'];

                echo <<<_END

<!-- ALERT-->

<div class="alert alert-success alert-success-style1 alert-success-stylenone">
  <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
      <span class="icon-sc-cl" aria-hidden="true">&times;</span>
    </button>
  <i class="fa fa-check adminpro-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
  <p class="message-alert-none text-center"><strong>$message</strong></p>
</div>

<!-- END ALERT-->

_END;

                unset($_SESSION['loan_success']);
              }



              //check if there is an error message to be displayded on this page
              if (isset($_SESSION['loan_error'])) {

                $message = $_SESSION['loan_error'];

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

                unset($_SESSION['loan_error']);
              }

              ?>

              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Order #</th>

                          <th>Customer</th>
                          <th>acquisition</th>
                          <th>default duration</th>
                          <th>amount</th>
                          <th>release date</th>

                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>


                        <?php

                        //get loans from the db
                        $result =  "SELECT * FROM loans";

                        $queryResults = $con->query($result);

                        if ($queryResults->num_rows > 0) {

                          $order = 1;
                          while ($row = $queryResults->fetch_assoc()) {
                            $loan_id = $row['id'];
                            $h_id = $hashids->encode($row['id']);
                            $customer = $row['client_id'];
                            $amount = $row['amount'];

                            $status = $row['status'];
                            $duration = $row['duration'];
                            $acquisition = $row['id_acquistion'];
                            //$acquisition_date = $row[''];
                            $release = $row['release_date'];
                            $officer_id = $row['officer_id'];
                            $repayment_amount = $row['repayment_amount'];
                            $interest = $row['interest'];
                            

                            $query_trans =  "SELECT * FROM clients where id = '$customer'";

                            $queryResults1 = $con->query($query_trans);

                            if ($queryResults1->num_rows > 0) {

                              $arrayResults1 = $queryResults1->fetch_assoc();
                             
                              $cbname = $arrayResults1['fname'] . ' ' . $arrayResults1['lname'];
                              $profile = $arrayResults1['images'];
                              $employee = $arrayResults1['working_status'];

                              $query_off =  "SELECT * FROM employee where id = '$officer_id'";

                              $queryResults3 = $con->query($query_off);

                              if ($queryResults3->num_rows > 0) {

                                $arrayResults3 = $queryResults3->fetch_assoc();
                                $ofname = $arrayResults3['fname'];
                                $olname = $arrayResults3['lname'];
                              }
                            }

                            if ($status == 'approved') {

                              $btn = "  <label class='badge badge-success'>Approved</label>";
                            } elseif ($status == 'pending') {

                              $btn = "<label class='badge badge-warning'>Pending</label>";
                            } elseif ($status == 'denied') {

                              $btn = "<label class='badge badge-danger'>Denied</label>";
                            } else {

                              $btn = "";
                            }


                        ?>


                            <tr role="row" class="even">
                              <td class="sorting_1"><?= $order ?></td>

                              <td> <a class="btn btn-sm btn-default " data-toggle="modal" data-target="#view<?= $h_id ?>"> <?= $cbname ?></a></td>
                              <td><?= $acquisition ?></td>
                              <td><?= $duration ?></td>
                              <td><?= 'ZMW' . $amount ?></td>
                              <td><?= $release ?></td>

                              <td>
                                <?= $btn ?>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <?php switch ($role_id) {
                                    case '1':
                                  ?>
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">Approve</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deny<?= $h_id ?>">Deny</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                </div>

                                <a href="loan_edit.php?lid=<?= $h_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>
                                <a class="btn btn-sm btn-outline-danger mdi mdi-trash-can-outline" data-toggle="modal" data-target="#delete<?= $h_id ?>"></a>
                              <?php
                                      break;
                                    case '2':
                              ?>
                                <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                  <a class="dropdown-item" href="#">view</a>
                                </div>
                  </div>
                <?php
                                      break;
                                    case '3':
                ?>
                  <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <a class="dropdown-item" href="#">view</a>
                  </div>
                </div>
              <?php
                                      break;
                                    case '4':
              ?>
                <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  <a class="dropdown-item" href="#">request deletion</a>
                </div>
              </div>

              <a href="loan_edit.php?lid=<?= $h_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>

            <?php
                                      break;
                                    case '5':
            ?>
              <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">Approve</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deny<?= $h_id ?>">Deny</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <a href="loan_edit.php?lid=<?= $h_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>

          <?php
                                      break;
                                    case '6':
          ?>
            <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">Approve</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deny<?= $h_id ?>">Deny</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

          <a href="loan_edit.php?lid=<?= $h_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>
      <?php
                                      break;


                                    default:
                                      echo 'please login';
                                      break;
                                  } ?>
      </td>
      <!-- modal -->


      <!-- approve Modal -->
      <div class="modal fade" id="exampleModal<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actions</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure, you want to approve <?= $cbname ?>'s loan

              <form action="includes/logic/loan_update.php" method="post" enctype="multipart/form-data">
              <div class="form-group form-control">
                       <label for="repo">Submit report</label>
                     <div class="input-group">
                       <input type="file" name="repo" id="repo" class="form-control">
                     </div>
              </div>
                      
                <input type="hidden" name="lid" value="<?= $h_id ?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           
                <button type="submit" name="approve" class="btn btn-primary">Confirm</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!--deny Modal -->
      <div class="modal fade" id="deny<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="denyLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="denyLabel">Actions</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure, you want to deny <?= $cbname ?>'s loan
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form action="includes/logic/loan_update.php" method="post">

                <input type="hidden" name="lid" value="<?= $h_id ?>">
                <button type="submit" name="deny" class="btn btn-primary">Confirm</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!--delete Modal -->
      <div class="modal fade" id="delete<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteLabel">Actions</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure, you want to delete <?= $cbname ?>'s loan
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form action="includes/logic/loan_delete.php" method="get">

                <input type="hidden" name="lid" value="<?= $h_id ?>">
                <button type="submit" name="delete" class="btn btn-primary">Confirm</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- MORE DETAILS MODAL -->

      <div class="modal fade" id="view<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="view<?= $h_id ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title text-uppercase " id="view<?= $h_id ?>"><?= $cbname ?>'s Loan</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">

                <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                  <img src="<?= $profile ?>" class="img-lg rounded" alt="profile image">
                  <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
                    <h6 class="mb-0"><?= $cbname ?></h6>
                    <p class="text-muted mb-1">Loan acqiured <?= $acquisition =='online'? 'online': 'through '.$ofname.' '.$olname?></p>
                    <p class="mb-0 text-success font-weight-bold"><?=$employee?></p>
                  </div>
                </div><br>
                <h4 class="card-title">Updates</h4>
                <ul class="bullet-line-list">
                  <li>
                    <h6>amount <?= $customer?></h6>
                    <p>ZMW <?= $amount ?></p>
                    <?php $kuwery= "SELECT * FROM loans LEFT JOIN guarantor ON loans.id = guarantor.lid WHERE loans.client_id = '$customer'";
                   $queryResults3 = $con->query($kuwery);
                  
                   if ($queryResults3->num_rows > 0) {

                    $arrayResults3 = $queryResults3->fetch_assoc();
                    $fguarantor= $arrayResults3['fname'];
                    $lguarantor= $arrayResults3['lname'];
                    $release_date = $arrayResults3['release_date'];
                    $trepayment = $arrayResults3['repayment_amount'];}?>
                    <p class="text-muted mb-4">
                      <i class="mdi mdi-clock-outline"></i>
                      <?= $acquisition ?>.
                      <?= $release?>
                    </p>
                  </li>
                  <li>
                    <h6>Continuous evaluation</h6>
                    <p>no activity or repayments</p>
                    <p class="text-muted mb-4">
                      <i class="mdi mdi-clock-outline"></i>
                      <?=isset($release_date) ? $release_date." ".$release_date: "no date"?>
                    </p>
                  </li>
                  <li>
                 
                    <h6>Detail</h6>
                   
                    <p>due date: <?= isset($due_date) ? $due_date: "no due date"?></p>
                    <p>guarantor: <?= isset($fguarantor) ? $fguarantor." ".$lguarantor: "no guarantor"?></p>
                    <p>total repayment: <?=$trepayment ?? "no amount"?></p>
                
                    <p class="text-muted">
                      <i class="mdi mdi-clock-outline"></i>
                      <?= isset($release_date) ? $release_date: "no release date"?>
                    </p>
                  </li>
                  <li>
                    <h6>Documents</h6>
                    <p>Report</p>
                    <p class="text-muted mb-4">
                      
                      <ul>
                      <?php
                      $get = "SELECT * FROM reports WHERE lid = '$loan_id'";
                      $query= $con->query($get);
               
                      if($query->num_rows>0){

                     while($la =  $query->fetch_assoc()){

                      $file = $la['file'];

                        echo '<li><i class="mdi mdi-file"></i><a href="'.$file.'" target="_blank">Open File</a></li>';

                     }
                      }else{

                        echo "<li>No files to show</li>";
                      }
                        ?>
                      </ul>
                      
                    </p>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <!--<button type="button" data-dismiss="modal" class="btn btn-primary">ok</button>-->
            </div>
          </div>
        </div>
      </div>
      <!--end-->

      </tr>
  <?php

                            $order++;
                          }
                        }
  ?>


  </tbody>
  </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <?php include 'components/constants_views/footer.php' ?>
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
  <script src="js/datatables.net-jquery.dataTables.js"></script>
  <script src="js/datatables.net-bs4-dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/js-data-table.js"></script>
  <script src="js/datatables.min.js"></script>
  <script src="js/custom/safe.js"></script>
  <script src="js/custom/view_loans.js"></script>




</body>

</html>