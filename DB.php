<?php


class DB
{

    public  $servername;
    public  $username;
    public  $password;
    public  $dbname;


    public function __construct($servername, $dbname, $username, $password)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connection()
    {
        try {
            $conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
            // echo 'connection successfully';
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

$crud = new DB('localhost', 'tasks_php', 'root', '');
$conn = $crud->connection();