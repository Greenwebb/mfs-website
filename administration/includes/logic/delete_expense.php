<?php
session_start();

//connect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

if (isset($_GET['delete_expense'])) {

  $eid = $con->real_escape_string(trim($_GET['eid']));

  $numbers = $hashids->decode($eid);
  
  $id = $numbers[0];

  //check if email exists query
  $delete = "delete FROM expenses WHERE id = ?";

  $stmt = $con->prepare($delete);

  $stmt->bind_param('s', $id);

  if($stmt->execute()){


    $_SESSION['expense_success'] = "<b>Success!</b> expense has been successfully deleted";

    header("Location:../../manage_expenses.php");
    exit(); 

      //redirect back to the login.php page
 
    } //else($pass==null){create password for person}
    else {

      //redirect back to the login.php page

      $_SESSION['expense_error'] = "<b>Error!</b> Failed to delete";

      header("Location:../../manage_expenses.php");
      exit(); 
  

    }
  } else {
    //account is not there

    $_SESSION['expense_error'] = "<b>Error!</b> System error. Try again!";

    header("Location:../../manage_expenses.php");
    exit(); 

  }

