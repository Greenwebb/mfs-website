<?php

//start the session for the user who is logged in
session_start();

//connect to the database on the server

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

if (isset($_POST['edit_loan'])) {





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

    //////// update document
         $update ="UPDATE collateral SET file = ?, details = ?, typeid = ? WHERE lid = ?";
         $stmt = $con->prepare($update);    
         $stmt->bind_param('sssi', $doc, $desc, $collateral_type, $lidd);    
         if($stmt->execute()){
        
          $insert = "UPDATE loans SET client_id = '$client_id', id_acquistion = 'loan officer', amount = '$amount', release_date = '$release_date', monthly_repaymentdate = '$monthlyr_date', officer_id = '$officer_id', purpose =  '$purpose', interest = '$interest', duration = '$duration', due_date = '$due_date', loan_typeid = '$loan_type' WHERE id = '$id'";
    
          if ( $stmt = $con->query($insert)) {
    
              $_SESSION['loan_success'] = "<b>Success!</b> your loan has been updated";
    
              header("Location:../../view_loans.php");
              exit(); 
    
           } else {
               //redirect back to the signin.php page
    
               $_SESSION['loan_error'] = "<b>Error!</b> System error";
    
               header("Location:../../view_loans.php");
               exit(); 
           }
    
    
         }else{
    
         $_SESSION['loan_error'] = "Could not update your document";
         
         header("Location:../../view_loans.php");
         exit();
     }
    

  
  
  }else{





    
    $insert = "UPDATE loans SET client_id = '$client_id', id_acquistion = 'loan officer', amount = '$amount', release_date = '$release_date', monthly_repaymentdate = '$monthlyr_date', officer_id = '$officer_id', purpose =  '$purpose', interest = '$interest', duration = '$duration', due_date = '$due_date', loan_typeid = '$loan_type' WHERE id = '$id'";
    
    if ( $stmt = $con->query($insert)) {

        $_SESSION['loan_success'] = "<b>Success!</b> your loan has been updated but the document has failed to upload";

        header("Location:../../view_loans.php");
        exit(); 

     } else {
         //redirect back to the signin.php page

         $_SESSION['loan_error'] = "<b>Error!</b> System error";

         header("Location:../../view_loans.php");
         exit(); 
     }

    }
    
} else {

     //redirect back to the signin.php page
     $_SESSION['loan_error'] = "<b>Failed!</b> Try again";

            header("Location:../../view_loans.php");
            exit(); 
 
}
