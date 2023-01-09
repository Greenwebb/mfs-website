<?php
include '../config.php';

$array = array('ok:' => 'false');
if (isset($_POST['todayexpense'])) {
    $tdate = date('Y-m-d');
    $query = mysqli_query($con, "SELECT SUM(amount) as todaysexpense FROM expenses WHERE exp_date = '$tdate'");
    if ($result = mysqli_fetch_array($query)) {
        $sum_today_expense = number_format($result['todaysexpense']);

        $type = "todayexpense";
        $value = $sum_today_expense;
        $okay = true;
    } else {
        echo json_encode(
            array(
                'okay' => false,
                'error' =>  'failed_to_get_expense',
                'value' => 1,
            )
        );
    };
} else {
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_get_expense',
            'value' => 0,
        )
    );
}

if (isset($_POST['yestadayexpense'])) {
  
    $ydate = date('Y-m-d', strtotime("-1 days"));
    $query1 = mysqli_query($con, "SELECT SUM(amount) as yesterdayexpense FROM expenses WHERE exp_date = '$ydate'");
    $result1 = mysqli_fetch_array($query1);
    $sum_yesterday_expense = number_format($result1['yesterdayexpense']);


    $type0 = "yestadayexpense";
    $value0 = $sum_yesterday_expense;
    $okay0 = true;
} else {
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_get_expense',
            'value' => 0,
        )
    );
}

if (isset($_POST['weekexpense'])) {

    $pastdate =  date("Y-m-d", strtotime("-1 week"));
    $crrntdte = date("Y-m-d");
    $query2 = mysqli_query($con, "SELECT SUM(amount) AS weeklyexpense FROM expenses WHERE ((exp_date) BETWEEN '$pastdate' AND '$crrntdte')");
    $result2 = mysqli_fetch_array($query2);
    $sum_weekly_expense = number_format($result2['weeklyexpense']);

    $type1 = "weekexpense";
    $value1 =  $sum_weekly_expense;
    $okay1 = true;
} else {
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_get_expense',
            'value' => 0,
        )
    );
}

if (isset($_POST['monthexpense'])) {


    $monthdate =  date("Y-m-d", strtotime("-1 month"));
    $crrntdte = date("Y-m-d");
    $query3 = mysqli_query($con, "SELECT SUM(amount) AS monthlyexpense FROM expenses WHERE ((exp_date) BETWEEN '$monthdate' AND '$crrntdte')");
    $result3 = mysqli_fetch_array($query3);
    $sum_monthly_expense = number_format($result3['monthlyexpense']);

    $type2 = "monthexpense";
    $value2 = $sum_monthly_expense;
    $okay2 = true;
} else {
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_get_expense',
            'value' => 0,
        )
    );
}

if (isset($_POST['yearexpense'])) {

    $cyear = date("Y");
    $query4 = mysqli_query($con, "SELECT SUM(amount) AS yearlyexpense FROM expenses WHERE (year(exp_date)='$cyear')");
    $result4 = mysqli_fetch_array($query4);
    $sum_yearly_expense = number_format($result4['yearlyexpense']);

    $type02 = "yearexpense";
    $value02 = $sum_yearly_expense;
    $okay02 = true;
} else {
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_get_expense',
            'value' => 0,
        )
    );
}

if (isset($_POST['totalexpense'])) {

    $query5 = mysqli_query($con, "SELECT SUM(amount) AS totalexpense FROM expenses");
    $result5 = mysqli_fetch_array($query5);
    $sum_total_expense = number_format($result5['totalexpense']);


    $type03 = "totalexpense";
    $value03 =  $sum_total_expense;
    $okay03 = true;
} else {
    echo json_encode(
        array(
            'okay' => false,
            'error' =>  'failed_to_get_expense',
            'value' => 0,
        )
    );
}



echo json_encode(
    array(
        'type' => $type,
        'value' => $value,
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
    )
);
