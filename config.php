<?php

    session_start();
    require_once "vendor/autoload.php";

    /**
     *
     *
     */
    $client = new Google_Client();
    $client->setClientId("460567085087-47dcjmp1iasg5tcc82doe66lq957u77p.apps.googleusercontent.com");
    $client->setClientSecret("jhgbck9zl1d3KUhcl9kNo5Tk");
    $client->setApplicationName("Browling Reserve");
    $client->setRedirectUri("http://localhost/google/callback-google.php");
    $client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>