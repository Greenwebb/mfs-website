<?php
session_start();

require_once 'includes/config.php';

require_once 'externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);
?>

<?php
//check if user is logged in

if(!isset($_SESSION['id'])){

header('location:includes/logic/logout.php');

exit();

}

?>
<?php

$numbers  = $hashids->decode($_SESSION['id']);

$userid = $numbers[0];

 //get user details

$query_user = "SELECT * FROM clients WHERE id = ?";

$stmt = $con->prepare($query_user);

$stmt->bind_param('i', $userid);

$stmt->execute();

$queryResults = $stmt->get_result();

if($queryResults->num_rows>0){

   $arrayResults = $queryResults->fetch_assoc();
    $userfname = $arrayResults['fname'];
    $userlname = $arrayResults['lname'];
    $useremail = $arrayResults['email'];
    $nrc = $arrayResults['nrc_no'];
    $status = $arrayResults['status'];
    $doc_type = $arrayResults['doc'];
    $address = $arrayResults['address'];    
    $gender = $arrayResults['gender'];
    $eligibility = $arrayResults['eligibility']; 
    $userphone = $arrayResults['phone'];
    $country = $arrayResults['country'];  
    $birth_date = $arrayResults['birth_date'];
    $profile = $arrayResults['profile'];
    //$business = $arrayResults['business'];
    $working_status = $arrayResults['working_status'];
    


}

?>
