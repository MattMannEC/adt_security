<?php

require 'config.php';

Class App
{
    public function contactModule()
    {
        $formController = new FormController();
        $formController->validateForm();
        if (empty($formController->messages)) {
            // $client is instance of Client entity.
            $client = $formController->processForm();
            $formController->messages['success'] = true;

            if($this->emailerModule($client)) {
                // make email send failures visible in the database
                // but not to the client
                $client->setEmailSent(true);
            }
            $this->dbModule($client);
        }
        return json_encode($formController->messages);
    }

    public function emailerModule($client)
    {
        $emailer = new Emailer();
        if ($emailer->compose($client)) {
            return $emailer->send($emailer->compose($client));
        }
    }

    public function dbModule($client)
    {
        $db = new Db();
        $clientController = new ClientController($db->connect());

        return $clientController->create($client);
    }
}






