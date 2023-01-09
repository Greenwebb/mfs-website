<?php
session_start();

//connect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

if (isset($_POST['deactivate'])) {

 
  $lid = $con->real_escape_string(trim($_POST['lid']));

  $numbers = $hashids->decode($lid);
  
  $id = $numbers[0];

  //check if email exists query
  $update = "UPDATE clients SET eligibility = 'disabled' WHERE id = ?";

  $stmt = $con->prepare($update);

  $stmt->bind_param('s', $id);

  if($stmt->execute()){


    $_SESSION['account_success'] = "<b>Success!</b> account has been successfully disabled";

    header("Location:../../view_borrower.php");
    exit(); 

      //redirect back to the login.php page
 
    } //else($pass==null){create password for person}
    else {

      //redirect back to the login.php page

      $_SESSION['account_error'] = "<b>Error!</b> Failed to update";

      header("Location:../../view_borrower.php");
      exit(); 
  

    }
  }elseif (isset($_POST['activate'])) {

    $lid = $con->real_escape_string(trim($_POST['lid']));
  
    $numbers = $hashids->decode($lid);
    
    $lid = $numbers[0];
  
    //check if email exists query
    $update = "UPDATE clients SET eligibility = 'active' WHERE id = ?";
  
    $stmt = $con->prepare($update);
  
    $stmt->bind_param('s', $lid);
  
    if($stmt->execute()){
  
  
      $_SESSION['account_success'] = "<b>Success!</b> account has been successfully activated";
  
      header("Location:../../view_borrower.php");
      exit(); 
  
        //redirect back to the login.php page
   
      } //else($pass==null){create password for person}
      else {
  
        //redirect back to the login.php page
  
        $_SESSION['account_error'] = "<b>Error!</b> Failed to update";
  
        header("Location:../../view_borrower.php");
        exit(); 
    
  
      }
    } else {
  
        //redirect back to the login.php page
  
        $_SESSION['account_error'] = "<b>Error!</b> Failed to update";
  
        header("Location:../../view_borrower.php");
        exit(); 
    
  
      }

