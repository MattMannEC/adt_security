<?php

Class Client 
{
    public $id;
    public $email;
    public $fullName;
    public $postCode;
    public $phoneNumber;

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
        return $this->id;
    }

    public function email()
    {
        return $this->email;
    }


    public function fullName()
    {
        return $this->fullName;
    }

    public function postCode()
    {
        return $this->postCode;
    }

    public function phoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function setFullName($fullName)
    {
        return $this->fullName = $fullName;
    }

    public function setPostCode($postCode)
    {
        return $this->postCode = $postCode;
    }

    public function setPhoneNumber($phoneNumber)
    {
        return $this->phoneNumber = $phoneNumber;
    }
}

