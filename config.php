<?php
session_start();

// * include autoload file
require_once "vendor/autoload.php";
$gClient = new Google_Client();

$gClient->setClientId("519198308063-b86fjq4ovbehcinm27nu174mguqjl23p.apps.googleusercontent.com");
$gClient->setClientSecret("ahnHdlqQOmEwAUKcvNMSknTc");
$gClient->setApplicationName("Hiren");
// $gClient->setRedirectUri("http://localhost:80/Google_API/g-callback.php");
$gClient->setRedirectUri("http://localhost/googleLoginApi/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


// * set db connection
$con = new mysqli('localhost', 'root', '', 'loginApi');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// echo '<pre>';
// print_r($gClient);
// echo '</pre>';
// exit;