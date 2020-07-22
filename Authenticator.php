<?php

Class Authenticator
{
    public function encryptPassword($password)
    {
        return password_hash($password, PASSWORD_ARGON2I);
    }

    public function verifyPassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public function startSession()
    {
        return session_start();
    }

    // verify session

    // end session
}