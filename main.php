<?php

require 'config.php';

if (
    (!empty($_POST['email'])) ||
    (!empty($_POST['fullName'])) ||
    (!empty($_POST['PostCode'])) ||
    (!empty($_POST['phoneNumber']))) {

    $formController = new FormController();
    $formController->validateForm();
    if (empty($formController->messages)) {
        $email = $formController->processForm();
        $emailer = new Emailer();
        $email = $emailer->compose($email);
        if ($email) {
            if($emailer->send($email)) {
                $formController->messages['success'] = true;
            }
        }
    }
    echo json_encode($formController->messages);
}

if (
    (!empty($_POST['username'])) ||
    (!empty($_POST['password']))) {
        $db = new Db();
        $loginFormController = new LoginFormController();
        $userController = new UserController($db->connect());
        $login = $loginFormController->processLoginForm();

        $user = $userController->read($login['username']);
        if ($loginFormController->validateLoginForm($login['password'], $user->password())) {
            header('Location: http://www.mikemosssecurity/admin');
            

        } else {
            echo('Invalid Credentials');
        }
    }