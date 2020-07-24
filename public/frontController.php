<?php

require '../App.php';

$app = new App();

// handle AJAX request from forms

if (
    (!empty($_POST['email'])) ||
    (!empty($_POST['fullName'])) ||
    (!empty($_POST['PostCode'])) ||
    (!empty($_POST['phoneNumber']))) {
        echo($app->contactModule());
}