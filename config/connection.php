<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
class Connection 
{
    private $localhost;
    private $userName;
    private $password;
    private $db; // Corrected variable name
    private $conn;

    public function __construct() 
    {
        $this->localhost = $_ENV["BD_localhost"];
        $this->userName = $_ENV["BD_userName"];
        $this->db = $_ENV["BD_db"]; 
        $this->password = $_ENV["BD_password"];
    }

    public function connect() { 
        $this->conn = mysqli_connect($this->localhost, $this->userName, $this->password, $this->db);

        if (!$this->conn) {
            echo "Connection failed: " . mysqli_connect_error();
        } else {
            echo "Connected!";
        }
    }

    public function getConn() {
        return $this->conn;
    }
}
