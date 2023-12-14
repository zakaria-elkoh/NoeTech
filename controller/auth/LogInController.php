<?php
    // namespace App\controller\auth;
    require '../../config/connection.php';

    class Auth 
    {
        public $conn;

        public function __construct() {
            $db = new Connection();
            $db->connect();
            $this->conn = $db->getConn();
        }

        public function logIn($email, $password) {
            $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ? and password = ?");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // header('location: ');
                echo "this user is existed";
            } else {
                echo "user not found";
            }
        }
    }

    // add a user
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $auth = new Auth();
        $auth->logIn($email, $password);
    }
?>
