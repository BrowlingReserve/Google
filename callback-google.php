<?php

    /**
     *
     */
	 require_once "config.php";

	 if(isset($_SESSION['access_token'])){
	 	$client->fetchAccessTokenWithAuthCode($_GET['code']);
	 }else if(isset($_SESSION['code'])){
         $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
	     $_SESSION['access_token'] = $token;
	 }else{
	    header('Location: index.php');
	    exit();
	 }

    $OAuth = new Google_Service_Oauth2($client);
    $userData = $OAuth->userinfo_v2_me->get();

    $_SESSION['email'] = $userData['email'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['picture'] = $userData['picture'];
    $_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];

    header('Location: index.php');
    exit();
