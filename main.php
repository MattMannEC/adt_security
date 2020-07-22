<?php

require 'config.php';

Class App
{
    public function contactModule()
    {
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
        return json_encode($formController->messages);
    }

    public function loginModule()
    {
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
}
