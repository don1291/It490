<?php

ini_set("display_errors", 1);
ini_set("log_errors",1);
ini_set("error_log", "/tmp/error.log");
error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT);
error_log("Hello, errors!");
include ('client.php');
$fullname = $_POST['fullname'];
$user  = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['passw'];
$response = registration($fullname,$user,$email, $password);
if($response != true)
  {
    echo "Registration Failed. Please try a different email";
    header( "Refresh:2; url=register1.html", true, 303);
  }
  else
  {
    echo "Thank you for Registering!";
    header( "Refresh:2; url=register1.html", true, 303);
  }
?>
