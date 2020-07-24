<?php

class ClientController
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create()
    {
        $q = $this->db->query("INSERT INTO client(email, full_name, post_code, phone_number) VALUES('dortwag@googlemail.com', 'Matt Mann', 'ex66az', '076445269')");

        // $q->bindvalue(':email', $client->email());
        // $q->bindvalue(':full_name', $client->fullName());
        // $q->bindvalue(':post_code', $client->postCode());
        // $q->bindvalue(':phone_number', $client->phoneNumber());

        $q->execute();
    }

}
