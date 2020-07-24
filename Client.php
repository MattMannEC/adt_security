<?php

Class Client 
{
    public $_id;
    public $_email;
    public $_fullName;
    public $_postCode;
    public $_phoneNumber;

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

    public function email()
    {
        return $this->_email;
    }


    public function fullName()
    {
        return $this->_fullName;
    }

    public function postCode()
    {
        return $this->_postCode;
    }

    public function phoneNumber()
    {
        return $this->_phoneNumber;
    }

    public function setEmail($email)
    {
        return $this->_email = $email;
    }

    public function setFullName($fullName)
    {
        return $this->_fullName = $fullName;
    }

    public function setPostCode($postCode)
    {
        return $this->_postCode = $postCode;
    }

    public function setPhoneNumber($phoneNumber)
    {
        return $this->_phoneNumber = $phoneNumber;
    }
}

