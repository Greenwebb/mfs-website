<?php


//start session which is just continuing
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();


header("Location:../../login.php");
exit();