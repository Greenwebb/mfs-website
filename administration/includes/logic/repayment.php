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

if (isset($_POST['lid'])) {


extract($_POST);



        $insert = "INSERT INTO repayment (lid, amount) VALUES( '$lid', '$amount')";

        if ( $stmt = $con->query($insert)) {

            echo "<b>Success!</b> Your repayment was successfully added";

         } else {
             //redirect back to the signin.php page

             echo "<b>Error!</b> Failed to add repayment";

         
         }


    
} else {

     //redirect back to the signin.php page
     echo "<b>Failed!</b> Try again";

       
 
}
