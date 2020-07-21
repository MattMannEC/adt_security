<?php

Class LoginFormController
{
    public $message;
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

    public function validateLoginForm($password, $hash)
    {
        return $this->authenticator->verifyPassword($password, $hash);
    }

    
}