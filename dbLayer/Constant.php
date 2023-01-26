<?php
session_start();
class MyDatabase
{
    public $connection;
    function __construct()
    {
        $this->connection = mysqli_connect("localhost", "root", '', "projectdb");
        if (!$this->connection) {
            die("<p>The database server is not available.</p>");
        }
    }
    public function GetConnection()
    {
        return $this->connection;
    }

 
}
