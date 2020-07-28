<?php

require 'config.php';

Class App
{
    public function contactModule()
    {
        $formController = new FormController();
        $formController->validateForm();
        if (empty($formController->messages)) {
            $client = $formController->processForm();
            $emailer = new Emailer();
            $email = $emailer->compose($client);
            if ($email) {
                if($emailer->send($email)) {
                    $formController->messages['success'] = true;
                }
            }
        }
        return json_encode($formController->messages);
    }
    
}

$data = [
    "email" => "dortwag@gmail.com",
    "fullName" => "MattMann",
    "postCode" => "ex66az",
    "phoneNumber" => "0758932498",];

$client = new Client($data);

$db = new Db();
$clientController = new ClientController($db->connect());

$clientController->create($client);

