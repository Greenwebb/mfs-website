<?php
session_start();

//connect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

if (isset($_POST['approve'])) {

  $lid = $con->real_escape_string(trim($_POST['lid']));

  $numbers = $hashids->decode($lid);
  
  $id = $numbers[0];

  //get report

    //collateral


    $target_dir = "../../file_uploads/reports/";
    $target_file = $target_dir . basename($_FILES["repo"]["name"]);
    $uploadOk = 1;
  
    $doc = "file_uploads/reports/" . basename($_FILES["repo"]["name"]);
  
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
  
    // Check file size
    if ($_FILES["repo"]["size"] > 2000000) {
  
      //error to be displayed on page redirected to
      $_SESSION['loan_error'] = "Could not upload document, Files should be less than 10MB Failed!";
  
      header("Location:../../view_loans.php");
      exit();
    }
  
    if (move_uploaded_file($_FILES["repo"]["tmp_name"], $target_file)) {

      $insert = "INSERT INTO reports (lid, file) VALUES( ?, ?)";

      $query = $con->prepare($insert);

      $query->bind_param('is', $id, $doc);

      if($query->execute()){

  
        $_SESSION['loan_success'] = "<b>Success!</b> report successsfully uploaded";

      }
  
    }
  //check if email exists query
  $update = "update loans set status = 'approved' WHERE id = ?";

  $stmt = $con->prepare($update);

  $stmt->bind_param('s', $id);

  if($stmt->execute()){


    $_SESSION['loan_success'] = "<b>Success!</b> loan has been successfully approved";

    header("Location:../../view_loans.php");
    exit(); 

      //redirect back to the login.php page
 
    } //else($pass==null){create password for person}
    else {

      //redirect back to the login.php page

      $_SESSION['loan_error'] = "<b>Error!</b> Failed to update";

      header("Location:../../view_loans.php");
      exit(); 
  

    }
  } 
  if (isset($_POST['deny'])) {

    $lid = $con->real_escape_string(trim($_POST['lid']));
  
    $numbers = $hashids->decode($lid);
    
    $id = $numbers[0];
  
    //check if email exists query
    $update = "update loans set status = 'denied' WHERE id = ?";
  
    $stmt = $con->prepare($update);
  
    $stmt->bind_param('s', $id);
  
    if($stmt->execute()){
  
  
      $_SESSION['loan_success'] = "<b>Success!</b> loan has been successfully denied";
  
      header("Location:../../view_loans.php");
      exit(); 
  
        //redirect back to the login.php page
   
      } //else($pass==null){create password for person}
      else {
  
        //redirect back to the login.php page
  
        $_SESSION['loan_error'] = "<b>Error!</b> Failed to update";
  
        header("Location:../../view_loans.php");
        exit(); 
    
  
      }
    } else {
  
        //redirect back to the login.php page
  
        $_SESSION['loan_error'] = "<b>Error!</b> Failed to update";
  
        header("Location:../../view_loans.php");
        exit(); 
    
  
      }

