<?php

//start the session for the user who is logged in
session_start();

//conect to the database on the server

require_once '../../includes/config.php';

require_once '../../externalLibraries/vendor/autoload.php';

/*
use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

if (isset($_SESSION['id'])) {

    $uid = $_SESSION['id'];

    $numbers = $hashids->decode($uid);
    $uid = $numbers[0];
}
*/

if (isset($_POST['admin_loan'])) {





  //collateral


  $target_dir = "../../file_uploads/collateral/";
  $target_file = $target_dir . basename($_FILES["col"]["name"]);
  $uploadOk = 1;

  $doc = "file_uploads/collateral" . basename($_FILES["col"]["name"]);

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["col"]["size"] > 2000000) {

    //error to be displayed on page redirected to
    $_SESSION['loan_error'] = "Could not upload document, Files should be less than 10MB Failed!";

    header("Location:../../view_loans.php");
    exit();
  }

  if (move_uploaded_file($_FILES["col"]["tmp_name"], $target_file)) {



    extract($_POST);



    $insert = "INSERT INTO loans (client_id ,id_acquistion, amount, release_date, monthly_repaymentdate, officer_id, purpose, interest, duration, due_date, loan_typeid) VALUES('$client_id', 'loan officer','$amount', '$release_date', '$monthlyr_date', '$officer_id', '$purpose', '$interest','$duration', '$due_date', '$loan_type')";

    if ($stmt = $con->query($insert)) {
      $idd = $con->insert_id;
      //////// insert document    
      $insert = "INSERT INTO collateral (file, details, typeid, lid) VALUE(?, ?, ?, ?)";
      $stmt = $con->prepare($insert);
      $stmt->bind_param('ssss', $doc, $desc, $collateral_type, $idd);
      if ($stmt->execute()) {
        $_SESSION['loan_success'] = "<b>Success!</b> your loan has been added";
        header("Location:../../view_loans.php");
        exit();
      } else {

        $_SESSION['loan_success'] = "Loan Successfully added, but Failed to add files into the database";

        header("Location:../../view_loans.php");
        exit();
      }
    } else {
      //redirect back to the signin.php page

      $_SESSION['loan_error'] = "<b>Error!</b> Failed to add loan";

      header("Location:../../view_loans.php");
      exit();
    }
  } else {



    extract($_POST);



    $insert = "INSERT INTO loans (client_id ,id_acquistion, amount, release_date, monthly_repaymentdate, officer_id, purpose, interest, duration, due_date, loan_typeid) VALUES('$client_id', 'loan officer','$amount', '$release_date', '$monthlyr_date', '$officer_id', '$purpose', '$interest','$duration', '$due_date', '$loan_type')";

    if ($stmt = $con->query($insert)) {
      $idd = $con->insert_id;
      //////// insert document    
      $insert = "INSERT INTO collateral (details, typeid, lid) VALUE(?, ?, ?)";
      $stmt = $con->prepare($insert);
      $stmt->bind_param('sss',$desc, $collateral_type, $idd);
      if ($stmt->execute()) {
        $_SESSION['loan_success'] = "<b>Loan Successfully added<b>, but Failed to add files into the database";
        header("Location:../../view_loans.php");
        exit();
      } else {

        $_SESSION['loan_success'] = "Loan Successfully added, but Failed to add files into the database";

        header("Location:../../view_loans.php");
        exit();
      }
    }
  }
} else {

  //redirect back to the signin.php page
  $_SESSION['loan_error'] = "<b>Failed!</b> Try again";

  header("Location:../../view_loans.php");
  exit();
}
