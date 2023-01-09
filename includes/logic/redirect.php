<?php
session_start();
 
extract($_POST);


if(isset($_POST['values'])){
$_SESSION['age'] = $age;
$_SESSION['duration'] = $duration;
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['loan_amount'] = $amount;
$_SESSION['Loan_type'] = $loan_type;
$_SESSION['mobile_number'] = $phone;
$_SESSION['nationality'] = $nationality;
$_SESSION['returns'] = $returns;
$_SESSION['isNewCustomer'] = $customer_type;





echo 'session_succes';
}else{
    echo 'system_error';
}