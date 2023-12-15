<?php
    require '../../config/Database.php';
    require '../../models/User.php';

    class RegistrationController 
    {
        public $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConn();
        }

        public function register($full_name, $email, $role, $password) {

            $User = new User();
            $success = $User->create($full_name, $email, $role, $password);
            

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

        $registrationController = new RegistrationController;
        $registrationController->register($fullName, $email, $role, $password);
    }
?>
