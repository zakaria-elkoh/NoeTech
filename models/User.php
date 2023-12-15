<?php

    require_once '../../config/Database.php';


class User {

    private $Database;

    public function __construct () {
        $this->Database = new Database();
    }

    public function create($full_name, $email, $role, $password) {

        $sql1 = "SELECT * FROM user WHERE email = ?";  
        $stmt = $this->Database->getConn()->prepare($sql1); 
        $stmt->bind_param("s", $email);
        $success = $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            echo "user with this email is already exists";
        } else {
            $sql = "INSERT INTO user (full_name, email, role, password) VALUES (?, ?, ?, ?)";  
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->Database->getConn()->prepare($sql); 
            $stmt->bind_param("ssss", $full_name, $email, $role, $hashedPassword);
            $success = $stmt->execute();
            return $success;
        }   
    }

    public function authenticateUser($email, $password) {
        $stmt = $this->Database->getConn()->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        

        if($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if(password_verify($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        } else {
            return null;
        }

    }




}