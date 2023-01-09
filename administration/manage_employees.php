<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Manage officers || Mighty Finance </title>
  <!-- base:css -->
  <link rel="stylesheet" href="css/css-materialdesignicons.min.css">
  <link rel="stylesheet" href="css/css-vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="css/css-font-awesome.min.css">

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
          <div class="row">

            <div class="container-fluid ">
              <div class="col-lg-12">

                <br />
                <br />
                <div class="card">
                  <div class="card-header">
                    <span><b>Employee List</b></span>
                    <button class="btn btn-primary btn-sm btn-block col-md-3 float-right" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add Employee</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="order-listing" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Employee No</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
                            <th>Lastname</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $d_arr[0] = "Unset";
                          $p_arr[0] = "Unset";
                          $dept = $con->query("SELECT * from department order by name asc");
                          while ($row = $dept->fetch_assoc()) :
                            $d_arr[$row['id']] = $row['name'];
                          endwhile;
                          $pos = $con->query("SELECT * from tbl_roles");
                          while ($row = $pos->fetch_assoc()) :
                            $p_arr[$row['id']] = $row['role'];
                          endwhile;
                          $employee_qry = $con->query("SELECT * FROM employee");
                          while ($row = $employee_qry->fetch_array()) {
                          ?>
                            <tr>
                              <td><?php echo $row['id'] ?></td>
                              <td><a class="btn btn-sm btn-default  view_employee" data-id="<?php echo $row['id'] ?>"><?php echo $row['fname'] ?></a></td>
                              <td><?php echo $row['middlename'] ?></td>
                              <td><?php echo $row['lname'] ?></td>
                              <td><?php echo $d_arr[$row['department_id']] ?></td>
                              <td><?php echo $p_arr[$row['role_id']] ?></td>
                              <td>
                                <?php

                                if ($p_arr[$row['acc_status']] == "active") {

                                ?><div class="dropdown">
                                    <button class="btn btn-sm mdi mdi-check btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">deactivate account</a>

                                      <a class="dropdown-item" href="tel:<?= '0' . $phone ?>">contact employee</a>
                                    </div>
                                  </div><?php
                                      } elseif ($p_arr[$row['acc_status']] == 'disabled') {
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
                                      } else {


                                ?><div class="dropdown">
                                    <a class="btn btn-sm btn-outline-primary mdi mdi-check" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                      </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $h_id ?>">deactivate account</a>

                                      <a class="dropdown-item" href="#">contact user</a>
                                    </div>
                                  </div><?php

                                      } ?>

                                <a class="btn btn-sm btn-outline-primary mdi mdi-pencil edit_employee" data-id="<?php echo $row['id'] ?>" type="button"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-outline-danger mdi mdi-trash-can-outline remove_employee" data-id="<?php echo $row['id'] ?>" type="button"><i class="fa fa-trash"></i></a>
                                



                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="uni_modal" role='dialog'>
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"></h5>
                  </div>
                  <div class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
  <script>
    window.start_load = function() {
      var preloader = document.getElementById('loadery');
      preloader.style.display = "block";
    }
    window.end_load = function() {
      var preloader = document.getElementById('loadery');
      preloader.style.display = "none";
    }

    window.uni_modal = function($title = '', $url = '', $size = "") {
      start_load()
      $.ajax({
        url: $url,
        error: err => {
          console.log()
          alert("An error occured")
        },
        success: function(resp) {
          if (resp) {
            $('#uni_modal .modal-title').html($title)
            $('#uni_modal .modal-body').html(resp)
            if ($size != '') {
              $('#uni_modal .modal-dialog').addClass($size)
            } else {
              $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
            }
            $('#uni_modal').modal({
              show: true,
              backdrop: 'static',
              keyboard: false,
              focus: true
            })
            end_load()
          }
        }
      })
    }
    $(document).ready(function() {
      /*$('#loadery').fadeOut('fast', function() {
          $(this).remove();
        })*/
    })
    $('.datetimepicker').datetimepicker({
      format: 'Y/m/d H:i',
      startDate: '+3d'
    })
    $('.select2').select2({
      placeholder: "Please select here",
      width: "100%"
    })
  </script>
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

  <script src="js/datatables.net-jquery.dataTables.js"></script>
  <script src="js/datatables.net-bs4-dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->

  <script src="js/js-data-table.js"></script>
  <script src="js/datatables.min.js"></script>
  <script src="js/custom/employees.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->

</body>

</html>