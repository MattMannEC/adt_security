<?php

class ClientController
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create(Client $client)
    {
        $q = $this->db->prepare("INSERT INTO client(email, full_name, post_code, phone_number, email_sent) VALUES(:email, :full_name, :post_code, :phone_number, :email_sent)");

        $q->bindValue(':email', $client->email());
        $q->bindValue(':full_name', $client->fullName());
        $q->bindValue(':post_code', $client->postCode());
        $q->bindValue(':phone_number', $client->phoneNumber());
        $q->bindValue(':email_sent', $client->emailSent());

        $q->execute();
    }

}
