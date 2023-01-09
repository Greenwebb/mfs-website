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
if (isset($_POST['add_borrower'])) {

 $phone = $con->real_escape_string(trim($_POST['phone']));
    

   



    //check if gl exists query
    $check_borrower = "SELECT * FROM clients WHERE phone = ?";

    $stmt = $con->prepare($check_borrower);

    $stmt->bind_param('i', $phone);

    $stmt->execute();

    $queryResults = $stmt->get_result();

    if ($queryResults->num_rows > 0) {
        echo "user is already registered";
        exit();
    } else {
        
        $fname = $con->real_escape_string(trim($_POST['fname']));
        $lname = $con->real_escape_string(trim($_POST['lname']));
        $email = $con->real_escape_string(trim($_POST['email']));
        $nationality = $con->real_escape_string(trim($_POST['country']));
        $business_name = $con->real_escape_string(trim($_POST['bname']));
        $gender = $con->real_escape_string(trim($_POST['gender']));
        $new_password = $con->real_escape_string(trim($_POST['password']));
        $city = $con->real_escape_string(trim($_POST['city']));
        $physical_address= $con->real_escape_string(trim($_POST['address']));
        $birth_date = $con->real_escape_string(trim($_POST['bdate']));
        $status = $con->real_escape_string(trim($_POST['status']));
        $eligibility = $con->real_escape_string(trim($_POST['eligibility']));
        $nrc = $con->real_escape_string(trim($_POST['nrc']));
        $description = mysqli_real_escape_string($con, $_POST['description']);
        $working_status = $con->real_escape_string(trim($_POST['working_status']));
        
        

        $password = md5($new_password);

        $insert = "INSERT INTO clients (fname, lname, password, email, gender, phone, birth_date, country, address, city, working_status, status, description, nrc_no, eligibility) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $con->prepare($insert);

        $stmt->bind_param('sssssisssssssss', $fname, $lname, $password, $email, $gender, $phone, $birth_date, $country, $physical_address, $city, $working_status, $status,  $description, $nrc, $eligibility);
        if ($stmt->execute()) {
            echo "Successfully added client";
             exit();
         } else {
             //redirect back to the signin.php page
           echo "system_error";
             exit();
         }
    }
} else {

     //redirect back to the signin.php page
     echo "failed  to send!";
     exit();
 
}
