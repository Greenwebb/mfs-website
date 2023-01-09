<?php  



//start the session for the user who is logged in
session_start();

//conect to the database on the server

require_once '../config.php';

if (isset($_POST['register'])) {

    
    
    $email = $con->real_escape_string(trim($_POST['email']));
    

    $phone = $con->real_escape_string(trim($_POST['phone']));


    //check if gl exists query
    $check = "SELECT * FROM clients WHERE phone = ? OR email = ?";

    $stmt = $con->prepare($check);

    $stmt->bind_param('is', $phone, $email);

    $stmt->execute();

    $queryResults = $stmt->get_result();

    if ($queryResults->num_rows > 0) {
        //redirect back to the signin.php page
        echo "user is already registered";
        exit();
    } else {
        
        $first_name = $con->real_escape_string(trim($_POST['fname']));
        $last_name = $con->real_escape_string(trim($_POST['lname']));
        $phone = $con->real_escape_string(trim($_POST['phone']));
        $cpassword = $con->real_escape_string(trim($_POST['password']));    
        $email = $con->real_escape_string(trim($_POST['email']));        

        $password = md5($cpassword);

        $insert = "INSERT INTO clients (fname, lname, phone, password, email) VALUES(?, ?, ?, ?, ?)";

        $stmt = $con->prepare($insert);

        $stmt->bind_param('ssiss', $first_name, $last_name, $phone, $password, $email);
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
 ?>