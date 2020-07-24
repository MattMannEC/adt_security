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
        var_dump($client);
        $q = $this->db->prepare("INSERT INTO client(email, full_name, post_code, phone_number) VALUES(:email, :full_name, :post_code, :phone_number)");

        $q->bindValue(':email', $client->email());
        $q->bindValue(':full_name', $client->fullName());
        $q->bindValue(':post_code', $client->postCode());
        $q->bindValue(':phone_number', $client->phoneNumber());

        $q->execute();
    }
    public function readAll()
    {
        $users = [];
        $q = $this->db->query('SELECT id, username, password FROM user ORDER BY id');

        $data = $q->fetch(PDO::FETCH_ASSOC);

        var_dump($data);
        die();

        return $users;
    }

}
