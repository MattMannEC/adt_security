<?php

require '../App.php';

$app = new App();

// handle AJAX request from contact form

if (
    (!empty($_POST['email'])) ||
    (!empty($_POST['fullName'])) ||
    (!empty($_POST['PostCode'])) ||
    (!empty($_POST['phoneNumber']))) {
        echo($app->contactModule());
    }

// handle login form request

if (
    (!empty($_POST['username'])) ||
    (!empty($_POST['password']))) {
        $app->loginModule();
    }


