<?php

//start the session for the user who is logged in
session_start();

//conect to the database on the server

require_once '../config.php';

require_once '../../externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);

if (isset($_SESSION['id'])) {

    $uid = $_SESSION['id'];

    $numbers = $hashids->decode($uid);

    $uid = $numbers[0];
}


if (isset($_POST['add_loan'])) {



    $target_dir = "../../collateral/";
    $target_file = $target_dir . basename($_FILES["col"]["name"]);
    $uploadOk = 1;

    $doc = "collateral/" . basename($_FILES["col"]["name"]);

    
     
     // Check file size
     if ($_FILES["col"]["size"] > 2000000) {
         
      //error to be displayed on page redirected to
      echo "Could not upload document, Files should be less than 10MB Failed!";
    
  
    }


    
      if (move_uploaded_file($_FILES["col"]["tmp_name"], $target_file)) {

    //////// insert document


extract($_POST);



        $insert = "INSERT INTO loans (client_id ,id_acquistion, amount, monthly_repaymentdate, purpose, duration, loan_typeid) VALUES('$uid', 'online','$amount', '$monthlyr_date', '$purpose', '$duration', '$loan_typeid')";

        if ( $stmt = $con->query($insert)) {

        $loan_id=$con->insert_id;

           //guarantor

           $insert ="INSERT INTO guarantor (lid, lname, fname, nrc, dob, phone, address, relation) VALUE(?, ?, ?, ?, ?, ?, ?, ?)";
    
           $stmt = $con->prepare($insert);
       
           $stmt->bind_param('isssssss', $loan_id, $glname, $gfname, $nrc, $dob, $phone, $address, $relation);
       
           $stmt->execute();

    //collateral
        $insert ="INSERT INTO collateral (lid, file, details, typeid) VALUE(?, ?, ?, ?)";
    
        $stmt = $con->prepare($insert);
    
        $stmt->bind_param('isss', $loan_id, $doc, $desc, $collateral_type);
    
        if($stmt->execute()){



            echo "<b>Success!</b> your loan has been added";

 


        }else{

            echo "Loan added but failed to add collateral into the database";

          }



         } else {
             //redirect back to the signin.php page

             echo "<b>Error!</b> System error";

         }

    }else{

        echo "Could not update your document";
        

    }    

    
} else {
 
    
    //redirect back to the signin.php page
     echo "<b>Failed!</b> Try again";

    
}
