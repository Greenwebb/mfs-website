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

    
    extract($_POST);
if (isset($edit_borrower)) {
    
    //check if gl exists query
    $check_borrower = "SELECT * FROM clients WHERE id = ?";

    $stmt = $con->prepare($check_borrower);

    $stmt->bind_param('i', $bid);

    $stmt->execute();

    $queryResults = $stmt->get_result();

    if ($queryResults->num_rows > 0) {

        $nationality = $con->real_escape_string(trim($_POST['country']));
        $business_name = $con->real_escape_string(trim($_POST['bname']));
        $new_password = $con->real_escape_string(trim($_POST['password']));
        $physical_address= $con->real_escape_string(trim($_POST['address']));
        $birth_date = $con->real_escape_string(trim($_POST['bdate']));
        $phone_n = (int)$phone;
        
        
        
       
        $password = md5($new_password);
        $insert = "UPDATE clients SET fname = '$fname', business = '$bname', lname = '$lname', business = '$bname', password = '$password', email = '$email', gender = '$gender', phone = '$phone_n', birth_date = ' $birth_date', country = '$country', address = '$physical_address', city = '$city', working_status = '$working_status', status = '$status', description = '$description', nrc_no = '$nrc', eligibility = '$eligibility' WHERE id = '$bid'";

       
       // $stmt->bind_param('ssssssisssssssss',, , $email, $gender, $phone, $birth_date, $country, $physical_address, $city, $working_status, $status,  $description, $nrc, $eligibility);
        if ( $stmt = $con->query($insert)) {
            echo "Successfully edited client";
             exit();
         } else {
             //redirect back to the signin.php page
           echo "system_error";
             exit();
         }
        
        exit();
    } else {
        echo "user has not been updated";
    }
} else {

     //redirect back to the signin.php page
     echo "failed  to send!";
     exit();
 
}
