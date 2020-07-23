<?php

class UserController
{
    public $db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function create(User $user)
    {
        $q = $this->_db->prepare('INSERT INTO user(username, password) VALUES(:username, :password)');

        $q->bindvalue(':username', $user->username());
        $q->bindvalue(':password', $user->password());

        $q->execute();
    }

    public function read($username)
    {
        $q = $this->_db->prepare('SELECT * FROM user WHERE username = :username');
        $q->bindValue(':username', $username);
        $q->execute();

        // Un comment to show errors
        // if (!$q) {
        //     echo "\nPDO::errorInfo():\n";
        //     print_r($this->_db->errorInfo());
        // }

        $data = $q->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new User($data);
        }
    }

    public function readAll()
    {
        $users = [];
        $q = $this->db->query('SELECT id, username, password FROM user ORDER BY id');

        while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($data);
        }

        return $users;
    }

    public function delete(User $user)
    {
        $this->db->exec('DELETE FROM user WHERE id = ' . $user->id());
    }
}
