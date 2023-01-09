<?php
session_start();

$_SESSION['Age'] = $_POST["Age"];
$_SESSION['Duration'] = $_POST["Duration"];
$_SESSION['First_Name'] = $_POST["First_Name"];
$_SESSION['Last_Name'] = $_POST["Last_Name"];
$_SESSION['Loan_Amount'] = $_POST["LoanAmount"];
$_SESSION['LoanType'] = $_POST["LoanType"];
$_SESSION['Mobile_Number'] = $_POST["Mobile_Number"];
$_SESSION['Nationality'] = $_POST["Nationality"];
$_SESSION['Personal_Loan'] = $_POST["Personal_Loan"];
$_SESSION['isNewCustomer'] = $_POST["isNewCustomer"];









//get javascript data from client loan application form


//set the data as super globals in a session


//redirect to register or login(AUTHENTICATE)
 
echo json_encode($_POST)
?>