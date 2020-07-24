<?php

class ClientController
{
    public $db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function create(Client $client)
    {
        $q = $this->_db->prepare('INSERT INTO client(id, email, full_name, post_code, phone_number) VALUES(:id, :email, :full_name, :post_code, :phone_number)');

        $q->bindvalue(':id', $client->id());
        $q->bindvalue(':email', $client->email());
        $q->bindvalue(':full_name', $client->fullName());
        $q->bindvalue(':post_code', $client->postCode());
        $q->bindvalue(':phone_number', $client->phoneNumber());

        $q->execute();
    }

}
