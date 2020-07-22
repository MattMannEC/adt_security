<?php

Class AdminController
{
    public $authenticator;

    public function __contruct()
    {
        $this->authenticator = new Authenticator();
        // check authentication
    }

    public function checkAuthentication()
    {
        // use authenticaot to check session
        // message on fail
    }

    public function renderPage()
    {
        // call read all from client controller
    }

}