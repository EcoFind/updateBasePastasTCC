<?php 

class database {

    public $connection;

    public function __construct()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = "bd_tcc";

        $this->connection = new Mysqli($host, $username, $password, $dbName);
    }
}
