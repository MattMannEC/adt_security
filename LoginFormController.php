<?php

Class LoginFormController
{
    public $messages;
    public $authenticator;
    public $login;

    public function __construct()
    {
        $this->authenticator = new Authenticator();
    }

    public function processLoginForm()
    {
        $login['username'] = $_POST['username'];
        $login['password'] = $_POST['password'];

        return $login;
    }

    public function validateForm()
    {
        if (!$_POST['username']) {
            $this->messages['username'] = 'Please enter a username';
        }
        if (!$_POST['password']) {
            $this->messages['password'] = 'Please enter a password';
        }
    }

    public function checkPassword($password, $hash)
    {
        return $this->authenticator->verifyPassword($password, $hash);
    }
}