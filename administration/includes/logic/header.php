<?php
session_start();

require_once 'includes/config.php';

require_once 'externalLibraries/vendor/autoload.php';


use Hashids\Hashids;

$hashids = new Hashids("sprints", 10);
?>

<?php
//check if user is logged in

if(!isset($_SESSION['idadmin'])){

header('location:includes/logic/logout.php');

exit();

}

?>
<?php

if(!isset($_SESSION['idadmin'])){

    header('location:includes/logic/logout.php');
    
    exit();
    
    }else{

$numbers  = $hashids->decode($_SESSION['idadmin']);

$userid = $numbers[0];

 //get user details

$query_user = "SELECT * FROM administrators WHERE id = ?";

$stmt = $con->prepare($query_user);

$stmt->bind_param('i', $userid);

$stmt->execute();

$queryResults = $stmt->get_result();

if($queryResults->num_rows>0){

   $arrayResults = $queryResults->fetch_assoc();
 
    $useraddress = $arrayResults['address'];

    $userfname = $arrayResults['fname'];

    $userlname = $arrayResults['lname'];

    $useremail = $arrayResults['email'];

  

    $userphone = $arrayResults['phone'];
    $role = $arrayResults['role'];
    $role_id = $arrayResults['roleid'];
    $profile = $arrayResults['profile'];



}
    }


// Class Name: Session

class Session{
  // Session Start Method
  public static function init(){

    if (version_compare(phpversion(), '5.4.0', '<')) {
      if (session_id() == '') {
        session_start();
      }
    }else{
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }
    }



  }


  // Session Set Method
  public static function set($key, $val){
    $_SESSION[$key] = $val;
  }



  // Session Get Method
  public static function get($key){
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }else{
      return false;
    }
  }

  // User logout Method
  public static function destroy(){
    session_destroy();
    session_unset();
    header('Location:login.php');
  }


  // Check Session Method
  public static function CheckSession(){
    if (self::get('login') == FALSE) {
      session_destroy();
      header('Location:login.php');
    }
  }


  // Check Login Method
  public static function CheckLogin(){
    if (self::get("login") == TRUE) {
      header('Location:index.php');
    }
  }
}

?>
