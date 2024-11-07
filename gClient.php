<?php

    // Here you need to call vendor/autoload.php from the google api client library file
    require_once "google-api/vendor/autoload.php";

    $gClient = new Google_Client();

    $gClient -> setClientId(" Enter your OAuth client here ");
    $gClient -> setClientSecret(" Enter your OAuth client secret here ");
    
    // Here is the page that capture credentials. You can replace with the url of your own device by running GetUserInfo.php
    $gClient -> setRedirectUri("http://localhost:3000/GetUserGInfo.php");
    // This scope is a suitable choice
    $gClient -> addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

    $GoogleUrl = $gClient->createAuthUrl(); // This is the url that brings user to google authentication
?>