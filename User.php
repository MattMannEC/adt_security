<?php

class User 
{
    private $_id;
    private $_username;
    private $_password;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function id()
    {
        return $this->_id;
    }

    public function username()
    {
        return $this->_username;
    }


    public function password()
    {
        return $this->_password;
    }

    public function setId($setId)
    {
        return $this->_id = $setId;
    }

    public function setUsername($setUsername)
    {
        return $this->_username = $setUsername;
    }

    public function setPassword($setPassword)
    {
        return $this->_password = $setPassword;
    }
}

