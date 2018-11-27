<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = 'InsertGoogleClientID';
$clientSecret = '189124726554-c5s5hogd6nqepj3ae30tarsjdle80pd2.apps.googleusercontent.com';
$redirectURL = 'e0dUoTiu7hBfwyyOiODjz0_I';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
