<?php

$serverName = "127.0.0.1";

$userName = "mfsl";

$password = "";

$con = new mysqli($serverName, $userName, $password, "mfsl");
 if ($con->connect_error) die($con->connect_error);
