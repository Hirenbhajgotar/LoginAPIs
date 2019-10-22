<?php
// # clint id = 519198308063-b86fjq4ovbehcinm27nu174mguqjl23p.apps.googleusercontent.com
// # secrate id = ahnHdlqQOmEwAUKcvNMSknTc

// * include autoload file
require_once "config.php";

if (isset($_SESSION['access_token'])) {
    $gClient->setAccessToken($_SESSION['access_token']);
} else if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
} else {
    header('Location: login.php');
    exit();
}


$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();


$_SESSION['id'] = $userData['id'];
$_SESSION['email'] = $userData['email'];
$_SESSION['gender'] = $userData['gender'];
$_SESSION['picture'] = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName'] = $userData['givenName'];

// * insert query - insert user data into database
$insQuery = "INSERT INTO 
    `users` (clintId, gEmail, gender, imageLink, lastName, name)
    VALUES (
        '".$userData['id']."', 
        '".$userData['email']."', 
        '".$userData['gender']."', 
        '".$userData['picture']."',
        '".$userData['familyName']."',
        '".$userData['givenName']."'
        )";
$con->query($insQuery);

// * redirect to the index file
header('LOCATION: index.php');
exit();
// echo '<pre>';
// print_r($userData);
// echo '</pre>';
// exit;
