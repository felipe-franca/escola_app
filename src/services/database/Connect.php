<?php

class Connect
{
    protected $dbHost;
    protected $dbPassword;
    protected $dbUser;
    protected $dbName;

    public function __construct()
    {
        $this->dbHost = 'localhost';
        $this->dbPassword = 'root';
        $this->dbName = 'escola';
        $this->dbUser = 'root';
    }

    public function connect()
    {
        try {
            $DBC = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPassword);
            $DBC->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $DBC;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
