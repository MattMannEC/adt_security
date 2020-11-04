<?php

class Db
{
    public function connect()
    {
        return new PDO(
            'mysql:host=127.0.0.1;dbname=adt_security', 
            'root', 
            '123'
        );
        
    }
}
