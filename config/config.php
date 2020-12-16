<?php

/*
FileName: config
Author: Keith Blackwelder
Description: The database connection for the project_tracker database.
*/

class config
{
    private $host;
    private $username;
    private $password;
    private $database;

    function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "project_tracker";
    }

    public function Connect()
    {
        try {
            $conn = new PDO("mysql: host=$this->host; dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Error connecting to database: " . $e->getMessage();
        }
    }
}
