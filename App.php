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
        $loginFormController->validateForm();
        if (empty($loginFormController->messages)) {
            $login = $loginFormController->processLoginForm();
            if ($user = $userController->read($login['username'])) {
                if ($loginFormController->checkPassword($login['password'], $user->password())) {
                    $loginFormController->messages['success'] = true;
                    $this->adminModule();
                } else {
                    header('Location: /login');
                    echo('Invalid Credentials');
                }
            }
        }
        return json_encode($loginFormController->messages);
    }

    public function adminModule()
    {
    }

}
