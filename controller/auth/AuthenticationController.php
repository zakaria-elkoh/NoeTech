<?php
    // namespace App\controller\auth;
    require '../../config/Database.php';
    require '../../models/User.php';

    class AuthenticationController 
    {
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConn();
        }

        public function logIn($email, $password) {
            $object = new User();
            $result = $object->authenticateUser($email, $password);

            if ($result === null) { 
                // header('location: ');
                echo "user not found";
            } elseif ($result === false) {
                echo "the password is not correct";
            } else {
                echo "You are logged in";
            }
        }
    }

    // add a user
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $authenticationController = new AuthenticationController();
        $authenticationController->logIn($email, $password);
    }
?>
