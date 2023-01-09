<?php
include_once '../config.php';


if (isset($_POST['submit'])) {
  $fname = mysqli_real_escape_string($con, $_POST['first_name']);
  $purpose = mysqli_real_escape_string($con, $_POST['purpose']);
  $lname = mysqli_real_escape_string($con, $_POST['last_name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $msg = mysqli_real_escape_string($con, $_POST['message']);
 echo ($fname.$purpose.$lname.$email.$phone.$msg);
  $query = "INSERT INTO contact_page (fname, lname, email, phone, purpose, query) VALUES (?,?,?,?,?,?)";

  $stmt = $con->prepare($query);

  $stmt->bind_param('sssiss', $fname, $lname, $email, $phone, $purpose, $msg);

  if ($stmt->execute()) {

    $fname = mysqli_real_escape_string($con, $_POST['first_name']);
    $purpose = mysqli_real_escape_string($con, $_POST['purpose']);
    $lname = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $msg = mysqli_real_escape_string($con, $_POST['message']);
    $name = $fname .' '. $lname;

    echo json_encode(
      array(
        'ok' => true,
        'messages' => "database_success",
        'name' => $name

      )
    );
    //$alert = "your complaint has been recorded";
    //if yes create account
    //echo $alert;
   
    $to = "info@mightyfinance.co.zm, admin@mightyfinance.co.zm";
    
    $to = implode(", ", [
      "info@mightyfinance.co.zm",
      "admin@mightyfinance.co.zm"
    ]);
    
    //second email
    $from = $email;

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = $purpose.' You have a new message';

    $logo = '../../images/01-ft-logo.png';
    $link = '#';

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $body .= "<table style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $body .= "</tr>";
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong>You have a new subscriber or potential customer from {$name} , email addrress: {$from}</td></tr>";
    $body .= "<tr><td></td></tr>";
    //$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    if(mail($to, $subject, $body, $headers, $from)){
        echo json_encode(
            array(
                'ok' => true,
                'messages' => "email_sucesss",
                'name' => $name

            )
           );
    }
    else { 
        echo json_encode(
            array(
                'ok' => false,
                'messages' => "email_error",
                'name' => $name
            )
          );
    }
  } else {
    echo json_encode(
      array(
        'ok' => false,
        'name' => $name
      )
    );
    echo "failed to send messages";
  }
} else {
  echo "complete fail";
}
