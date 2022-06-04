<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '34d87515fb9eab114bf5';
$clientSecret     = ' ae5ca1fb582ee863946664d615ad392efe046a53';
// $redirectURL     = 'http://localhost/signWithGithub/';
$redirectURL     = 'https://www.codexworld.com/github-login/';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}