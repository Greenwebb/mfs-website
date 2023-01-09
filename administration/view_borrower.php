<?php include "includes/logic/header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>View Borrowers|| Mighty Finance </title>
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
              if (isset($_SESSION['account_success'])) {

                $message = $_SESSION['account_success'];

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
              }

              ?>


              

              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Order #</th>
                          <th>clients_id</th>
                          <th>Customer</th>
                          <th>email</th>
                          <th>gender</th>
                          <th>birth_date</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>


                        <?php

                        //get accounts from the db
                        $result =  "SELECT * FROM clients";

                        $queryResults = $con->query($result);

                        if ($queryResults->num_rows > 0) {

                          $order = 1;
                          while ($row = $queryResults->fetch_assoc()) {



                            $customer = $row['id'];
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
                            $profile = $row['images'];

                            $quer = "SELECT COUNT(`id`) AS loanoverall FROM loans where client_id = $customer";
                            $stmt = $con->prepare($quer);
                            $stmt->execute();
                            $queryResul = $stmt->get_result();
                            $arrayResul = $queryResul->fetch_assoc();
                            $loanoverall = number_format($arrayResul['loanoverall']);
                           
                        ?>


                            <tr role="row" class="even">
                              <td class="sorting_1"><?= $order ?></td>
                              <td><?= $customer ?></td>
                              <td><a class="btn btn-sm btn-default " data-toggle="modal" data-target="#viewperson<?= $h_id ?>"><?= $fname . ' ' . $lname ?></a></td>
                              <td><?= $email ?></td>
                              <td><?= $gender ?></td>
                              <td><?= $birth_date ?></td>


                              <td>
                                <?php switch ($role_id) {
                                  case '1':
                                ?>

<?php

if ($eligibility == "active") {

 ?><div class="dropdown">
  <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">deactivate account</a>

    <a class="dropdown-item" href="tel:<?='0'.$phone?>">contact user</a>
  </div>
</div><?php
}elseif($eligibility == 'disabled'){
?>

<div class="dropdown">
      <button class="btn btn-sm mdi mdi-cancel btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModall<?= $h_id ?>">activate account</a>

        <a class="dropdown-item" href="#">contact user</a>
      </div>
    </div>
<?php
}
else{

                                            
                                              ?><div class="dropdown">
                                          <button class="btn btn-sm mdi mdi mdi-file-check btn-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">deactivate account</a>

                                            <a class="dropdown-item" href="#">contact user</a>
                                          </div>
                                        </div><?php
                                           
                                          } ?>

                                    <a href="borrower_edit.php?bid=<?= $h_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>
                                    <a class="btn btn-sm btn-outline-danger mdi mdi-trash-can-outline" data-toggle="modal" data-target="#deleteuser<?= $h_id ?>"></a><?php
                                                                                                                                                                    break;
                                                                                                                                                                  case '2':
                                                                                                                                                                    ?><div class="dropdown">
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">contact user</a>
                                      </div>
                                    </div>

                                  <?php
                                                                                                                                                                    break;
                                                                                                                                                                  case '3':
                                  ?><div class="dropdown">
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">contact user</a>
                                      </div>
                                    </div>

                                  <?php
                                                                                                                                                                    break;
                                                                                                                                                                  case '4':
                                  ?><div class="dropdown">
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">contact user</a>
                                        <a class="dropdown-item" href="#">request deactivation</a>
                                      </div>
                                    </div>

                                  <?php
                                                                                                                                                                    break;
                                                                                                                                                                  case '5':
                                  ?><div class="dropdown">
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">deactivate account</a>
                                        <a class="dropdown-item" href="#">contact user</a>
                                        <a class="dropdown-item" href="#">request deletion</a>
                                      </div>
                                      <a href="borower_edit.php?lid=<?= $h_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>
                                    </div>

                                  <?php
                                                                                                                                                                    break;
                                                                                                                                                                  case '6':
                                  ?><div class="dropdown">
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">contact user</a>
                                        <a class="dropdown-item" href="#">request deletion</a>
                                      </div>
                                    </div>

                                  <?php
                                                                                                                                                                    break;

                                                                                                                                                                  default:
                                  ?><div class="dropdown">
                                      <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        view
                                      </button>
                                    </div>

                                <?php
                                                                                                                                                                    break;
                                                                                                                                                                } ?>

                              </td>

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
                                      Are you sure, you want to deactivate <?= $fname . ' ' . $lname ?>'s account
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <form action="includes/logic/update_account.php" method="post">

                                        <input type="hidden" name="lid" value="<?= $h_id ?>">
                                        <button type="submit" name="deactivate" class="btn btn-primary">Confirm</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal fade" id="exampleModall<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Actions</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Are you sure, you want to activate <?= $fname . ' ' . $lname ?>'s account
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <form action="includes/logic/update_account.php" method="post">

                                        <input type="hidden" name="lid" value="<?= $h_id ?>">
                                        <button type="submit" name="activate" class="btn btn-primary">Confirm</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!--delete Modal -->
                              <div class="modal fade" id="deleteuser<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content ">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="deleteLabel">Actions</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Are you sure, you want to delete <?= $fname . ' ' . $lname ?>'s account
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <form action="includes/logic/delete_account.php" method="get">

                                        <input type="hidden" name="lid" value="<?= $h_id ?>">
                                        <button type="submit" name="delete_account" class="btn btn-primary">Confirm</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- MORE DETAILS MODAL -->

                              <div class="modal fade" id="viewperson<?= $h_id ?>" tabindex="-1" role="dialog" aria-labelledby="view<?= $h_id ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header text-center">
                                      <h5 class="modal-title text-uppercase " id="view<?= $h_id ?>"><?= $fname . ' ' . $lname ?>'s profile</h5>

                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="card">
                                        <div class="card">
                                          <div class="card-body text-center">
                                            <div>
                                              <img src="<?= $profile ?>" class="img-lg rounded-circle mb-2" alt="profile image">
                                              <h4><?= $fname . ' ' . $lname ?></h4>
                                              <p class="text-muted mb-0"><?= $employee ?></p>
                                            </div>
                                            <p class="mt-2 card-text">
                                              <?= $description ?>
                                            </p>
                                            
                                            <button class="btn btn-info btn-sm mt-3 mb-4">Contact</button>
                                            <button class="btn btn-success btn-sm mt-3 mb-4"><?=$loanoverall?> loans</button>
                                            <div class="border-top pt-3">
                                              <div class="row">
                                                <div class="col-4">
                                                  <h6><?= '0' . $phone ?></h6>
                                                  <p>phone number</p>
                                                </div>
                                                <div class="col-4">
                                                  <h6><?= $gender ?></h6>
                                                  <p>Gender</p>
                                                </div>

                                                <div class="col-4">
                                                  <h6><?= $birth_date ?></h6>
                                                  <p>DOB</p>
                                                </div>
                                                <div class="col-4">
                                                  <h6><?= $status ?></h6>
                                                  <p>Status</p>
                                                </div>
                                                <div class="col-4">
                                                  <h6><?= $country ?></h6>
                                                  <p>Nationality</p>
                                                </div>
                                                <div class="col-4">
                                                  <h6><?= $business ?></h6>
                                                  <p>Business Name</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="user.php?lid=<?= $h_id ?>"><button type="button" class="btn btn-primary">Get Statement</button></a>
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
</body>

</html>