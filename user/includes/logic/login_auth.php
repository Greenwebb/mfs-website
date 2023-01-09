<?php
session_start();

//connect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);
if (isset($_POST['login'])) {

  $cpassword = $con->real_escape_string(trim($_POST['password']));

  $phone = $con->real_escape_string(trim($_POST['phone']));



  //check if email exists query
  $checkPhone = "SELECT * FROM clients WHERE phone = ?";

  $stmt = $con->prepare($checkPhone);

  $stmt->bind_param('i', $phone);

  $stmt->execute();

  $queryResults = $stmt->get_result();

  if ($queryResults->num_rows > 0) {

    $arrayResults = $queryResults->fetch_assoc();
    $sys_pass = $arrayResults['password'];
    $sys_phone = ($arrayResults['phone']);

    $userid = $hashids->encode($arrayResults['id']);


    $password = md5($cpassword);

    if ($password == $sys_pass && $sys_phone == $phone ) {

      # session variables

      $_SESSION['phone'] =  $phone;

      $_SESSION['id'] =  $userid;
      $_SESSION['last_login_timestamp'] = time();





      //redirect back to the login.php page
      echo 'login_succces';
      exit();
    } //else($pass==null){create password for person}
    else {

      //redirect back to the login.php page
      echo "wrong number or password";
      exit();
    }
  } else {
    //account is not there
    echo "account does not exist";

    exit();
  }
} else {

  echo "system_error";
}
