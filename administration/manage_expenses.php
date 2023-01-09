<?php include "includes/logic/header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Expenses || Mighty Finance </title>
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
                            <h4 class="card-title">All Expenses</h4>
                            <?php

                            //check if there is a success property_enquiry to be displayded on this page
                            if (isset($_SESSION['expense_success'])) {

                                $message = $_SESSION['expense_success'];

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

                                unset($_SESSION['expense_success']);
                            }



                            //check if there is an error message to be displayded on this page
                            if (isset($_SESSION['expense_error'])) {

                                $message = $_SESSION['expense_error'];

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

                                unset($_SESSION['expense_error']);
                            }

                            ?>




                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Expenditure_date</th>
                                                    <th>Name </th>
                                                    <th> Cost Amount</th>
                                                    <th>Type</th>
                                                    <th>description</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php

                                                //get expenses from the db
                                                $result =  "SELECT * FROM expenses";

                                                $queryResults = $con->query($result);

                                                if ($queryResults->num_rows > 0) {

                                                    $order = 1;
                                                    while ($row = $queryResults->fetch_assoc()) {

                                                        $expense =  $row['item'];
                                                        $cost = $row['amount'];
                                                        $date = $row['exp_date'];
                                                        $type = $row['type'];
                                                        $description = $row['description'];
                                                        $recuring = $row['recurring'];
                                                        $e_id = $hashids->encode($row['id']);

                                                ?>


                                                        <tr role="row" class="even">
                                                            <td class="sorting_1"><?= $order ?></td>
                                                            <td><?= $date ?></td>
                                                            <td><a class="btn btn-sm btn-default " data-toggle="modal" data-target="#viewperson<?= $e_id ?>"><?= $expense ?></a></td>
                                                            <td>ZMW <?= $cost ?></td>
                                                            <td><?= $type ?></td>
                                                            <td><?= $description ?></td>


                                                            <td>
                                                                <?php switch ($role_id) {
                                                                    case '1':
                                                                ?>

                                                                        <?php

                                                                        if ($recuring == "active") {

                                                                        ?><div class="dropdown">
                                                                                <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                                                </button>
                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $e_id ?>">recurring expense</a>
                                                                                </div>
                                                                            </div><?php
                                                                                } elseif ($recuring == 'disabled') {
                                                                                    ?>

                                                                        <?php
                                                                                } else {


                                                                        ?><div class="dropdown">
                                                                                
                                                                            </div><?php

                                                                                } ?>

                                                                        <a href="expense_edit.php?eid=<?= $e_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>
                                                                        <a class="btn btn-sm btn-outline-danger mdi mdi-trash-can-outline" data-toggle="modal" data-target="#deleteexpense<?= $e_id ?>"></a><?php
                                                                                                                                                                                                            break;
                                                                                                                                                                                                        case '2':
                                                                                                                                                                                                            ?><div class="dropdown">
                                                                            <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                                            </button>

                                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                <a class="dropdown-item" href="#">request expense deletion</a>
                                                                            </div>
                                                                        </div>
                                    </div>

                                <?php
                                                                                                                                                                                                            break;
                                                                                                                                                                                                        case '3':
                                ?><div class="dropdown">
                                        <button class="btn btn-sm mdi mdi-check btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">request expense deletion</a>
                                        </div>
                                    </div>

                                <?php
                                                                                                                                                                                                            break;
                                                                                                                                                                                                        case '4':
                                ?>
                                <?php
                                                                                                                                                                                                            break;
                                                                                                                                                                                                        case '5':
                                ?><div class="dropdown">
                                        <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                           

                                            <a class="dropdown-item" href="#">request deletion</a>
                                        </div>
                                        <a href="expense_edit.php?eid=<?= $e_id ?>" class="btn btn-sm btn-outline-primary mdi mdi-pencil"></a>
                                    </div>

                                <?php
                                                                                                                                                                                                            break;
                                                                                                                                                                                                        case '6':
                                ?><div class="dropdown">
                                        <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

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
                            <div class="modal fade" id="exampleModal<?= $e_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure, you want to deactivate <?= $fname . ' ' . $lname ?>'s expense
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="includes/logic/update_expense.php" method="post">

                                                <input type="hidden" name="eid" value="<?= $e_id ?>">
                                                <button type="submit" name="deactivate" class="btn btn-primary">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModall<?= $e_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Actions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure, you want to activate <?= $fname . ' ' . $lname ?>'s expense
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="includes/logic/update_expense.php" method="post">

                                                <input type="hidden" name="eid" value="<?= $e_id ?>">
                                                <button type="submit" name="activate" class="btn btn-primary">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--delete Modal -->
                            <div class="modal fade" id="deleteexpense<?= $e_id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteLabel">Actions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure, you want to delete <strong><?= $expense ?> </strong>expense
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="includes/logic/delete_expense.php" method="get">

                                                <input type="hidden" name="eid" value="<?= $e_id ?>">
                                                <button type="submit" name="delete_expense" class="btn btn-primary">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- MORE DETAILS MODAL -->

                            <div class="modal fade" id="viewperson<?= $e_id ?>" tabindex="-1" role="dialog" aria-labelledby="view<?= $e_id ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h1>Description</h1>
                                                        <p class="mt-2 card-text">
                                                            <?= $description ?>
                                                        </p>

                                                        <button class="btn btn-info btn-sm mt-3 mb-4"><?= $expense ?></button>
                                                        <button class="btn btn-success btn-sm mt-3 mb-4">K<?= $cost ?></button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="expense.php?eid=<?= $e_id ?>"><button type="button" class="btn btn-primary">Get Statement</button></a>
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