<?php  



//start the session for the user who is logged in
session_start();

//conect to the database on the server
extract($_POST);
require_once '../config.php';
require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

$numbers  = $hashids->decode($_SESSION['id']);

$userid = $numbers[0];


if (isset($_POST['update_profile'])) {


    //check if gl exists query
    $check = "UPDATE clients SET fname=?, lname=?, email=?, gender=?, address=?, phone=?, nrc_no=?, doc=?, country=?, status= ? WHERE id=?";

    $stmt = $con->prepare($check);
    //echo $fname. $lname. $email. $gender. $address. $phone. $nrc. $doc_type. $country. $status;
    $stmt->bind_param('sssssissssi', $fname, $lname, $email, $gender, $address, $phone, $nrc, $doc_type, $country, $status, $userid);

    

    if ($stmt->execute()) {
        //redirect back to the signin.php page
        echo "update succesfull";
        exit();
    } else {
        
            //redirect back to the signin.php page
          echo "update error";
            exit();
        }

} else {

    //redirect back to the signin.php page
   echo "failed  to send!";
    exit();
}
 ?>