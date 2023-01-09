<?php
session_start();

//connect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

if (isset($_GET['delete'])) {

  $lid = $con->real_escape_string(trim($_GET['lid']));

  $numbers = $hashids->decode($lid);
  
  $id = $numbers[0];

  //check if email exists query
  $delete = "delete FROM loans WHERE id = ?";

  $stmt = $con->prepare($delete);

  $stmt->bind_param('s', $id);

  if($stmt->execute()){


    $_SESSION['loan_success'] = "<b>Success!</b> loan has been successfully deleted";

    header("Location:../../view_loans.php");
    exit(); 

      //redirect back to the login.php page
 
    } //else($pass==null){create password for person}
    else {

      //redirect back to the login.php page

      $_SESSION['loan_error'] = "<b>Error!</b> Failed to delete";

      header("Location:../../view_loans.php");
      exit(); 
  

    }
  } else {
    //account is not there

    $_SESSION['loan_error'] = "<b>Error!</b> System error. Try again!";

    header("Location:../../view_loans.php");
    exit(); 

  }

