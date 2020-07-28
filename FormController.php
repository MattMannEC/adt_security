<?php

Class FormController
{
    public $messages;

    public function processForm()
    {
        $client['email'] = $_POST['email'];
        $client['fullName'] = $_POST['fullName'];
        $client['postCode'] = $_POST['postCode']; 
        $client['phoneNumber'] = $_POST['phoneNumber'];

        $client = new Client($client);

        return $client;
    }

    public function validateForm()
    {
        if ($_POST['email']) {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->messages['email'] = 'Invalid Email';
            }
        } else {
            $this->messages['email'] = 'Please enter an email';
        }

        if ($_POST['fullName']) {
            // keep space between first and last name by making 
            // copy before validation
            $fullName = str_replace(' ', '', $_POST['fullName']);
            if ((strlen($fullName) < 2) || 
                (strlen($fullName) > 30) || 
                (!ctype_alpha($fullName))) {
                    $this->messages['fullName'] = 'Invalid Name';
            }
        } else {
            $this->messages['fullName'] = 'Please enter name';
        }

        if ($_POST['postCode']) {
            $_POST['postCode'] = str_replace(' ', '', $_POST['postCode']);
            if ((strlen($_POST['postCode']) < 6) || 
                (strlen($_POST['postCode']) > 8) || 
                (!ctype_alnum($_POST['postCode']))) {
                    $this->messages['postCode'] = 'Invalid post code';
            }
        } else {
            $this->messages['postCode'] = 'Please enter a post code';
        }

        if ($_POST['phoneNumber']) {
            $_POST['phoneNumber'] = str_replace(' ', '', $_POST['phoneNumber']);
            if ((strlen($_POST['phoneNumber']) < 9) || 
                (strlen($_POST['phoneNumber']) > 12) || 
                (!ctype_digit($_POST['phoneNumber']))) {
                    $this->messages['phoneNumber'] = 'Invalid phone number';
            }
        } else {
            $this->messages['phoneNumber'] = 'Please enter a number';
        }
    }
}
