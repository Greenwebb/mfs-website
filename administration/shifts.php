<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shifts || Mighty Finance </title>
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

  .select2-selection.select2-selection--single {
    Height: 2.7rem !important;
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
                    <span><b>Attendance List</b></span>
                    <button class="btn btn-primary btn-sm btn-block col-md-3 float-right" type="button" id="new_attendance_btn"><span class="fa fa-plus"></span> Add Attendance</button>
                  </div>
                  <div class="card-body">
                    <table id="table" class="table table-bordered table-striped">
                      <colgroup>
                        <col width="10%">
                        <col width="20%">
                        <col width="30%">
                        <col width="30%">
                        <col width="10%">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Employee No</th>
                          <th>Name</th>
                          <th>Time Record</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $att = $con->query("SELECT a.*,e.id, concat(e.lname,', ',e.fname,' ',e.middlename) as ename FROM attendance a inner join employee e on a.employee_id = e.id order by UNIX_TIMESTAMP(datetime_log) asc  ");
                        $lt_arr = array(1 => " Time-in AM", 2 => "Time-out AM", 3 => " Time-in PM", 4 => "Time-out PM");
                        while ($row = $att->fetch_array()) {
                          $date = date("Y-m-d", strtotime($row['datetime_log']));
                          $attendance[$row['employee_id'] . "_" . $date]['details'] = array("eid" => $row['employee_id'], "name" => $row['ename'], "eno" => $row['id'], "date" => $date);
                          if ($row['log_type'] == 1 || $row['log_type'] == 3) {
                            if (!isset($attendance[$row['employee_id'] . "_" . $date]['log'][$row['log_type']]))
                              $attendance[$row['employee_id'] . "_" . $date]['log'][$row['log_type']] = array('id' => $row['id'], "date" =>  $row['datetime_log']);
                          } else {
                            $attendance[$row['employee_id'] . "_" . $date]['log'][$row['log_type']] = array('id' => $row['id'], "date" =>  $row['datetime_log']);
                          }
                        }
                        foreach ($attendance as $key => $value) {
                        ?>
                          <tr>
                            <td><?php echo date("M d,Y", strtotime($attendance[$key]['details']['date'])) ?></td>
                            <td><?php echo $attendance[$key]['details']['eno'] ?></td>
                            <td><?php echo $attendance[$key]['details']['name'] ?></td>
                            <td>
                              <div class="row">

                                <?php
                                $att_ids = array();
                                foreach ($attendance[$key]['log'] as $k => $v) :
                                ?>
                                  <div class="col-sm-6" style="">
                                    <p>
                                      <small><b><?php echo $lt_arr[$k] . ": <br/>" ?>


                                          <?php echo (date("h:i A", strtotime($attendance[$key]['log'][$k]['date'])))  ?> </b>
                                        <span class="badge badge-danger rem_att" data-id="<?php echo $attendance[$key]['log'][$k]['id'] ?>"><i class="fa fa-trash"></i></span>
                                      </small>
                                    </p>
                                  </div>
                                <?php endforeach; ?>
                              </div>

                            </td>
                            <td>
                              <center>
                                <button class="btn btn-sm btn-outline-danger mdi mdi-trash-can-outline" data-id="<?php echo $key ?>" type="button"><i class="fa fa-trash"></i></button>
                              </center>
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
  <script>
       window.start_load = function(){
    var preloader = document.getElementById('loadery');
    preloader.style.display = "block";
  }
  window.end_load = function(){
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
  <script src="js/custom/safe.js"></script>
  <script src="js/custom/shifts.js"></script>
  <script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
  <script src="js/custom/safe.js"></script>
  <link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
  <!-- endinject -->
  <!-- plugin js for this page -->

</body>

</html>