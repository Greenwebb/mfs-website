<?php
session_start();

//connect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);
if (isset($_POST['login'])) {

  $cpassword = $con->real_escape_string(trim($_POST['password']));

  $email = $con->real_escape_string(trim($_POST['email']));
  



  //check if email exists query
  $checkemail = "SELECT * FROM administrators WHERE email = ?";

  $stmt = $con->prepare($checkemail);

  $stmt->bind_param('s', $email);

  $stmt->execute();

  $queryResults = $stmt->get_result();

  if ($queryResults->num_rows > 0) {

    $arrayResults = $queryResults->fetch_assoc();
    $sys_pass = $arrayResults['password'];
    $sys_email = ($arrayResults['email']);
    $role = ($arrayResults['role']);
    $userid = $hashids->encode($arrayResults['id']);


    $password = md5($cpassword);

    if ($password == $sys_pass && $sys_email == $email ) {

      # session variables

      $_SESSION['email'] =  $email;

      $_SESSION['idadmin'] =  $userid;
      $_SESSION['last_login_timestamp'] = time();
      $_SESSION['role'] = $role;





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
