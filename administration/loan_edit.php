<?php include "includes/logic/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Loan || Mighty Finance </title>
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

  .panel-body.bg-gray.text-bold {
    background-color: gainsboro;
  }

  .popUpFundo.white {
    background-color: #7e25bb6b;
  }

.select2-selection.select2-selection--single {
    Height: 2.7rem !important;
}
</style>

<body>
  <?php include 'components/constants_views/messages.php' ?>


  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <?php include 'components/constants_views/top_nav.php' ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include 'components/constants_views/side_nav.php' ?>
      <!-- partial -->


      <?php

if (isset($_GET['lid'])) {

    $numbers = $hashids->decode($_GET['lid']);

    $lidd = $numbers[0];

}
//get loans from the db
$result =  "SELECT * FROM loans WHERE id = '$lidd'";

$queryResults = $con->query($result);

if($queryResults->num_rows>0){

$row = $queryResults->fetch_assoc();
$loan_id = $row['id'];
$h_id = $hashids->encode($row['id']);
$customer = $row['client_id'];
$amount = $row['amount'];

$status = $row['status'];
$duration = $row['duration'];
$acquisition = $row['id_acquistion'];
$release = $row['release_date'];

$loan_type = $row['loan_typeid'];
$interest = $row['interest'];
$purpose = $row['purpose'];
$monthlyr_date = $row['monthly_repaymentdate'];
$officer = $row['officer_id'];
}

?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Edit Loan</h4>
                  <p class="card-description">
                    fill or change the information below to edit
                  </p>
                  <form action="includes/logic/loan_edit.php" class="forms-sample"  method="post" enctype="multipart/form-data">
                    <div class="panel panel-default form-group"><br>
                      <div class="panel-body bg-gray text-bold">Required Fields: </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1"> loan type</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                            </div>
                            <select class="form-control" name="loan_type" id="loan_type">
   <?php $result = mysqli_query($con, "SELECT * FROM loan_types");
while ($row = mysqli_fetch_assoc($result)) {
  $lid = $row['id'];
  $ltype =  $row['loan_type'];
  if ($lid == $loan_type) {   
   $result = mysqli_query($con, "SELECT * FROM loan_types where id = '$loan_type'");
    $row = mysqli_fetch_assoc($result);    
      $lid = $row['id'];    
      $ltype =  $row['loan_type'];
echo <<<_iwe

<option value="$lid" selected> $ltype </option>

_iwe;


}else{
echo <<<_iwe
<option value="$lid" > $ltype </option>
_iwe;


} 
}

?>
  
                            </select>

                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Borrower</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                          </div>
                          <select required name="client_id" id="borrower_search" class="form-control">
                         

                            <?php $result = mysqli_query($con, "SELECT * FROM clients");

                            while ($row = mysqli_fetch_assoc($result)) {

                              $bid = $row['id'];

                              $bname =  $row['fname'].' '.$row['lname'];

       if ($bid == $customer  ) {
          
        $result = mysqli_query($con, "SELECT * FROM clients WHERE id = '$customer' ");

$row = mysqli_fetch_assoc($result);

          $bid = $row['id'];

          $bname =  $row['fname'].' '.$row['lname'];

echo <<<_iwe
                

    <option value="$bid" selected> $bname </option>

_iwe; 

       } else {
         
                              
echo <<<_iwe
                        

        <option value="$bid" > $bname </option>
_iwe;        


       }

                       } 
                       
                       
                       ?>

                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Amount</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class=" mdi mdi-cash-multiple"></em></span>
                            </div>
                            <input required type="number" class="form-control" min="500" step="500" id="amount" name="amount" value="<?=$amount?>" placeholder="amount" aria-label="amount">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Release Date</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-calendar"></em></span>
                            </div>
                            <input class="form-control" type="date" id="realese_date" name="release_date">

                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Interest</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class=" mdi mdi-cash-multiple"></em></span>
                            </div>
                            <input required type="text" class="form-control" value="<?=$interest?>" id="interest" name="interest" placeholder="interest" aria-label="interest">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Monthly Repayment Date</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-calendar"></em></span>
                            </div>
                            <input class="form-control" type="text" id="realese_date" value="<?=$monthlyr_date?>" name="monthlyr_date">

                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Purpose of Loan<b><u style="text-decoration: none;" class="text-warning ">(required)</u></b></label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-account-multiple"></em></span>
                            </div>
                            <textarea class="form-control" type="text" id="purpose" name="purpose"><?=$purpose?></textarea> 
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Date of Full repayment</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-calendar"></em></span>
                            </div>
                            <input class="form-control" type="date" id="due_date" name="due_date">

                          </div>
                        </div>
                      </div>

                    </div>
                    <br>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputName1"> Duration</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                            </div>
                            <input class="form-control" name="duration" type="text" placeholder="duration" value="<?=$duration?>">
                         

                          </div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputName1">Loan Officer</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                          </div>
                          <select required name="officer_id" id="borrower_search" class="form-control">
                        

                            <?php $result = mysqli_query($con, "SELECT * FROM employee");

                            while ($row = mysqli_fetch_assoc($result)) {

                                    $cid = $row['id'];

                                   $cname =  $row['fname'].' '.$row['lname'];
        if ($cid == $officer) {

        $result = mysqli_query($con, "SELECT * FROM employee WHERE id = '$officer' ");

$row = mysqli_fetch_assoc($result);

$cid = $row['id'];

            $cname =  $row['fname'].' '.$row['lname'];

echo <<<_iwe
                

    <option value="$cid" selected> $cname </option>

_iwe; 

        } else {
            
                                
echo <<<_iwe
                        

        <option value="$cid" > $cname</option>
_iwe;        


        }

                        } 
                            
                            
                            
                            ?>

                          </select>
                        </div>
                      </div>
                    </div>
          
                    <br>
          
          <div class="card">
              <div class="card-header text-center h5">
                Collateral
              </div>
                 <div class="row">
                 <div class="form-group col-4">
                        <label for="exampleInputName1">Document Type</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><em class="mdi mdi-account-box-outline"></em></span>
                          </div>
                            <select class="form-control" name="collateral_type" id="loan_type">
                              <option disabled selected>choose type</option>
                              <?php

                                $result = mysqli_query($con, "SELECT * FROM collateral WHERE lid = '$lidd'");

                                  $row = mysqli_fetch_assoc($result);
                             
                                  $cidt = $row['typeid'];

                                  $collname = $row['name'];

                                  $colldetails = $row['details'];

                               $result = mysqli_query($con, "SELECT * FROM collateral_types");


                                    while ($row = mysqli_fetch_assoc($result)) {

                                      $idt = $row['id'];

                                      $ctyp = $row['type'];

if($cidt ==$idt){


echo <<<_iwe
              

<option value="$idt" selected> $ctyp </option>

_iwe; 

}else{

  echo  "<option value=''.$idt.'' > $ctyp</option>";


}

                                      

                                    } ?>
                            </select>
                            </div>
                          </div>
                       
                      <div class="form-group col-4">
                        <label for="exampleInputName1">file</label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-file"></em></span>
                            </div>
                            <input class="form-control" type="file" id="file" name="col">

                          </div>
                        </div>


                      </div>
                      <div class="form-group col-4">
                        <label for="exampleInputName1">Description<b><u style="text-decoration: none;" class="text-warning ">(required)</u></b></label>
                        <div class="input-group ">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><em class="mdi mdi-account-multiple"></em></span>
                            </div>
                            <textarea class="form-control" type="text" id="desc" name="desc"><?=$colldetails?></textarea> 
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
                                <input type="hidden" name="id" value="<?=$lidd?>">

                    <button type="submit" name="edit_loan" id="resultloans" class="btn btn-primary btn-block btn-lg mr-2">Submit Changes</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'components/constants_views/footer.php' ?>
        <script>
          function close() {
            event.preventDefault();
            document.getElementById('popy').style.display = "none"
          }
        </script>
       
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
  <script src="js/custom/add_loan.js"></script>
  <script src="js/js-off-canvas.js"></script>
  <script src="js/js-hoverable-collapse.js"></script>
  <script src="js/js-template.js"></script>
  <script src="js/js-settings.js"></script>
  <script src="js/js-todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="js/sweetalert-sweetalert.min"></script>
  <script src="js/jquery.avgrund-jquery.avgrund.min.js"></script>
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
  <script src='js/jquery-3.2.1.min.js' type='text/javascript'></script>
  <script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
  <script src="js/custom/safe.js"></script>
  <link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>

  <script>
    $(document).ready(function() {

      // Initialize select2
      $("#borrower_search").select2();

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