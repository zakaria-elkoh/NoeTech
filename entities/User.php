<?php

    require '../config/connection.php';

class User {

    private $full_name;
    private $email;
    private $role;
    private $password;

    public function __construct($full_name, $email, $role, $password) {
        $this->full_name = $full_name;
        $this->email = $email;
        $this->role = $role;
        $this->password = $password;
    }
    
    // getters
    public function getFullName() {
        return $this->full_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function getPassword() {
        return $this->password;
    }
    // setter
    public function setFullName($full_name) {
        $this->full_name = $full_name;
        return $this->full_name;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this->email;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this->role;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this->password;
    }
}
