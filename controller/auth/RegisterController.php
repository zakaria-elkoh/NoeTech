<?php
    require '../../config/connection.php';

    class Auth 
    {
        public $conn;

        public function __construct() {
            $db = new Connection();
            $db->connect();
            $this->conn = $db->getConn();
        }

        public function register($full_name, $email, $role, $password) {
            $stmt = $this->conn->prepare("INSERT INTO user (full_name, email, role, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $full_name, $email, $role, $password);
            $success = $stmt->execute();

            if ($success) {
                header('location: ../../views/auth/log-in.php');
            } else {
                echo "there is an error in registering";
            }
        }

    }

    // add a user
    if (isset($_POST['submit'])) {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $role = "user";
        $password = $_POST['password'];

        $auth = new Auth;
        $auth->register($fullName, $email, $role, $password);
    }
?>
