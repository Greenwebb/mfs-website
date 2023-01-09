<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Expenses || Mighty Finance </title>
  <!-- base:css -->
  <link rel="stylesheet" href="css/css-materialdesignicons.min.css">
  <link rel="stylesheet" href="css/css-vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="css/css-font-awesome.min.css">
 
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
    <?php include 'components/constants_views/messages.php' ?>
      <!-- partial -->
      <?php

if (isset($_GET['eid'])) {

    $numbers = $hashids->decode($_GET['eid']);

    $eidd = $numbers[0];

}
//get expenses from the db
$result =  "SELECT * FROM expenses WHERE id = '$eidd'";

$queryResults = $con->query($result);

if ($queryResults->num_rows > 0) {
    $row = $queryResults->fetch_assoc();
    $expense =  $row['item'];
    $cost = $row['amount'];
    $date = $row['exp_date'];
    $type = $row['type'];
    $description = $row['description'];
    $recuring = $row['recurring'];
    $e_id = $hashids->encode($row['id']);
}

?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Expenses</h4>
                  <p class="card-description">
                    expense details
                  </p>
                  <form id="edit_expense" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <select required aria-placeholder="Expense type" placeholder="Expense type" class="form-control" name="expense_type" id="expense_type">                          
                          <?php $result = mysqli_query($con, "SELECT * FROM expense_types");

while ($row = mysqli_fetch_assoc($result)) {

    $etype =  $row['expense'];
    if ($etype == $type) {
        $result = mysqli_query($con, "SELECT * FROM expense_types where expense = '$type'");
        $row = mysqli_fetch_assoc($result);
        $etype =  $row['expense'];
        echo <<<_iwe

<option value="$etype" selected> $etype</option>

_iwe;
    } else {
        echo <<<_iwe


<option value="$etype" > $etype </option>
_iwe;
    }
}

?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="mdi mdi-note-text"></i></span>
                        </div>
                        <input name="item" required type="text" value="<?=$expense?>" class="form-control" placeholder="Item/Service" aria-label="item">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="mdi mdi-calendar-today"></i></span>
                        </div>
                        <input required type="date" value="<?php echo date('Y-m-d',strtotime($date)) ?>" class="form-control" name="date" placeholder="date" aria-label="date">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="mdi mdi-clipboard-text"></i></span>
                        </div>
                        <textarea type="text" aria-valuetext="<?=$description?>" value="<?=$description?>" name="description" class="form-control" placeholder="Description" aria-label="description"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">K</span>
                        </div>
                        <input min="0" required placeholder="cost" type="number" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <button type="submit" name="submit" class="btn col-12 btn-primary btn-sm">Submit</button>
                    </div>


                  </form>

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
  <script src="js/custom/edit_expenses.js"></script>
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
  <script src="js/js-formpickers.js"></script>
 
  <script src="js/js-inputmask.js"></script>
  <script src="js/custom/safe.js"></script>
  <script src='js/jquery-3.2.1.min.js' type='text/javascript'></script>
  <script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
  <script src="js/custom/safe.js"></script>
  <link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>

  <!-- endinject -->
  <!-- plugin js for this page -->
  <script>
    $(document).ready(function() {

      // Initialize select2
      $("#expense_type").select2();

      // Read selected option
      $('#but_read').click(function() {
        var username = $('#selUser option:selected').text();
        var userid = $('#selUser').val();

        $('#result').html("id : " + userid + ", name : " + username);
      });
    });
  </script>
</body>

</html>