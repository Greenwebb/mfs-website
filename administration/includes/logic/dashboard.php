<?php 
include '../config.php';

$array= array('ok:'=> 'false');

//clientele
if (isset($_POST['clientele'])) {

    $client_query = "SELECT COUNT(`id`) AS total_clientele FROM clients";

$stmt = $con->prepare($client_query);
$stmt->execute();
$client_queryResults = $stmt->get_result();
if($client_queryResults->num_rows > 0 ){
    while($arrayResults = $client_queryResults->fetch_assoc()){    
            $total_clientele = number_format($arrayResults['total_clientele']);

            $type = "total_clients";
            $value = $total_clientele;
            $okay = true;
    }
}

}else{   
        echo json_encode(
            array(
                'ok' => false,
                'error' =>  'failed_to_get_clientele'
            )
          );
}
////total_given_loans
if (isset($_POST['total_given_loans'])) {
    $given_query = "SELECT SUM(`amount`) AS total_given_loans FROM loans WHERE status = 'active'";

    $stmt = $con->prepare($given_query);
    $stmt->execute();
    $total_given_loans_queryResults = $stmt->get_result();
    if($total_given_loans_queryResults->num_rows > 0 ){
        while($arrayResults = $total_given_loans_queryResults->fetch_assoc()){    
            $total_given_loans = number_format($arrayResults['total_given_loans']);

            $type0 = "total_given_loans";
            $value0 = $total_given_loans;
            $okay0 = true;
    }
    
}

}else{   
        echo json_encode(
            array(
                
                'okay' => false,
                'error' =>  'failed_to_get_clientele'
            )
          );
}
//


////active give count
if (isset($_POST['active_given'])) {
    $active_given_query = "SELECT COUNT(`id`) AS active_given FROM loans WHERE status = 'active' ";

    $stmt = $con->prepare($active_given_query);
    $stmt->execute();
    $active_given_queryResults = $stmt->get_result();
    if($active_given_queryResults->num_rows > 0 ){
        while($arrayResults = $active_given_queryResults->fetch_assoc()){    
            $active_given = number_format($arrayResults['active_given']);

            $type1 = "active_given";
            $value1 = $active_given;
            $okay1= true;
    }
    
}

}else{   
        echo json_encode(
            array(
                
                'okay' => false,
                'error' =>  'failed_to_get_clientele'
            )
          );
}
////

if (isset($_POST['loans_payedback'])) {
    $loans_payedback_query = "SELECT SUM(`amount`) AS loans_payedback FROM repayments where status = 'full'";

    $stmt = $con->prepare($loans_payedback_query);
    $stmt->execute();
    $loans_payedback_queryResults = $stmt->get_result();
    if($loans_payedback_queryResults->num_rows > 0 ){
        while($arrayResults = $loans_payedback_queryResults->fetch_assoc()){    
            $loans_payedback = number_format($arrayResults['loans_payedback']);

            $type2 = "loans_payedback";
            $value2 = $loans_payedback;
            $okay2 = true;
    }
}

}else{   
        echo json_encode(
            array(
                'okay' => false,
                'error' =>  'failed_to_get_clientele'
            )
          );
}
//


////

if (isset($_POST['fully_paidback'])) {
    $loans_payedback_query = "SELECT COUNT(`amount`) AS fully_paidback FROM repayments where status = 'full'";

    $stmt = $con->prepare($loans_payedback_query);
    $stmt->execute();
    $fully_paidback_queryResults = $stmt->get_result();
    if($fully_paidback_queryResults->num_rows > 0 ){
        while($arrayResults = $fully_paidback_queryResults->fetch_assoc()){    
            $fully_paidback = number_format($arrayResults['fully_paidback']);

            $type02 = "fully_paidback";
            $value02 = $fully_paidback;
            $okay02 = true;
    }
}

}else{   
        echo json_encode(
            array(
                'okay' => false,
                'error' =>  'failed_to_get_clientele'
            )
          );
}
//

if (isset($_POST['total_earnings'])) {
    $total_earnings = "SELECT SUM(`amount`) AS total_earnings FROM repayments";

    $stmt = $con->prepare($total_earnings);
    $stmt->execute();
    $total_earnings_queryResults = $stmt->get_result();
    if($total_earnings_queryResults->num_rows > 0 ){
        while($arrayResults = $total_earnings_queryResults->fetch_assoc()){    
            $total_given_loans = number_format($arrayResults['total_earnings']);

            $type03 = "total_earnings";
            $value03 = $total_given_loans;
            $okay03 = true;
    }
}

}else{   
        echo json_encode(
            array(
                'okay' => false,
                'error' =>  'failed_to_get_payedback'
            )
          );
}

if (isset($_POST['net_earnings'])) {
    $net_earnings_query = "SELECT SUM(`amount`) AS net_earnings FROM repayments where status = 'full' ";

    $stmt = $con->prepare($net_earnings_query);
    $stmt->execute();
    $net_earnings_queryResults = $stmt->get_result();
    if($net_earnings_queryResults->num_rows > 0 ){
        while($arrayResults = $net_earnings_queryResults->fetch_assoc()){    
            $net_earnings = number_format($arrayResults['net_earnings']);

            $type3 = "net_earnings";
            $value3 = $net_earnings;
            $okay3= true;
    }
}
}else{   
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_net earnings'
        )
      );
}



if (isset($_POST['total_expenses'])) {
    $total_expenses_query = "SELECT SUM(`amount`) AS total_expenses FROM expenses";

    $stmt = $con->prepare($total_expenses_query);
    $stmt->execute();
    $total_expenses_queryResults = $stmt->get_result();
    if($total_expenses_queryResults->num_rows > 0 ){
        while($arrayResults = $total_expenses_queryResults->fetch_assoc()){    
            $total_expenses = number_format($arrayResults['total_expenses']);

            $type05 = "total_expenses";
            $value05 = $total_expenses;
            $okay05= true;
    }

}


if (isset($_POST['officer_total'])) {
    $employee_query = "SELECT COUNT(`id`) AS employee FROM employee";

    $stmt = $con->prepare($employee_query);
    $stmt->execute();
    $employee_queryResults = $stmt->get_result();
    if($total_expenses_queryResults->num_rows > 0 ){
        while($arrayResults = $employee_queryResults->fetch_assoc()){    
            $employee = number_format($arrayResults['employee']) - 1;

            $type6 = "employee";
            $value6 = $employee;
            $okay6= true;
    }

}
}
//
$one_month_query = "SELECT SUM(`amount`) AS one_month FROM expenses";

$stmt = $con->prepare($one_month_query);
$stmt->execute();
$one_month_queryResults = $stmt->get_result();
if($one_month_queryResults->num_rows > 0 ){
    while($arrayResults = $one_month_queryResults->fetch_assoc()){    
        $one_month = number_format($arrayResults['one_month']);
        $type5 = "one_month";
        $value5 = $one_month;
        $okay5= true;
}
}else{   
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_net earnings'
        )
      );
} 

}else{   
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_net earnings'
        )
      );
} 


echo json_encode(
    array(
        'type' => $type,
        'value' =>$value,
        'okay' => $okay,

        'type0' => $type0,
        'value0' =>  $value0,
        'okay0' => $okay0,

        'type1' => $type1,
        'value1' =>  $value1,
        'okay1' => $okay1,
        
        'type2' => $type2,
        'value2' =>  $value2,
        'okay2' => $okay2,

        'type02' => $type02,
        'value02' =>  $value02,
        'okay02' => $okay02,

        'type03' => $type03,
        'value03' =>  $value03,
        'okay03' => $okay03,

        'type3' => $type3,
        'value3' =>  $value3,
        'okay3' => $okay3,

        'type05' => $type05,
        'value05' =>  $value05,
        'okay05' => $okay05,

        'type5' => $type5,
        'value5' =>  $value5,
        'okay5' => $okay5,

        'type6' => $type6,
        'value6' =>  $value6,
        'okay6' => $okay6
    )
  );
