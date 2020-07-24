<?php

class ClientController
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create($client)
    {
        var_dump($client);
        $q = $this->db->prepare("INSERT INTO client(email, full_name, post_code, phone_number) VALUES(:email, :full_name, :post_code, :phone_number)");

        $q->bindValue(':email', $client->email());
        $q->bindValue(':full_name', $client->fullName());
        $q->bindValue(':post_code', $client->postCode());
        $q->bindValue(':phone_number', $client->phoneNumber());

        $q->execute();
    }

}
