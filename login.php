<?php
session_start();

class UserLogin {
    private $conn;

    public function __construct() {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "user";
        $this->conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    }

    public function loginUser($email, $password) {
        $sql = "SELECT * FROM useri WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($this->conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if ($email == 'blend@gmail.com' || $email == 'gentrit@gmail.com') {
                $_SESSION['user_id'] = $user["User_ID"];
                $_SESSION['user_email'] = $user["Email"];
                $_SESSION['is_admin'] = true;
                
                header("Location: CRUD/crud.php");
                exit;
            } else { 
                $_SESSION['user_id'] = $user["User_ID"];
                $_SESSION['user_email'] = $user["Email"];
                $_SESSION['is_admin'] = false;

                header("Location: index.php");
                exit;
            }
        } else {
            $error_message = "Email ose fjalkalimi është gabim";
            echo "<script>alert('$error_message'); window.location.href='formValidationL.php';</script>";
        }
    }
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = new UserLogin();
    $login->loginUser($email, $password);
}
?>
