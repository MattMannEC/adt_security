<?php

class Db
{
    public function connect()
    {
        $db = new PDO(
            'mysql:host=127.0.0.1;dbname=modula', 
            'root', 
            '123'
        );
        return $db;
    }
}
