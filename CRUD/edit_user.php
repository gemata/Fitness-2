<?php

class Database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM useri WHERE User_ID='$id'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $username = $row['Username'];
            $email = $row['Email'];
            $password = $row['Password'];
            return ['username' => $username, 'email' => $email, 'password' => $password];
        } else {
            return null;
        }
    }

    public function updateUser($id, $username, $email, $password) {
        if (empty($username) || empty($email) || empty($password)) {
            echo "Please fill all the fields.";
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit();
        }

        if (strlen($password) < 6) {
            echo "Password should be at least 6 characters long.";
            exit();
        }

        $sql = "UPDATE useri SET Username='$username', Email='$email', Password='$password' WHERE User_ID='$id'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }

        header("Location: crud.php");
        exit();
    }

    public function close() {
        $this->conn->close();
    }
}

if (isset($_POST['edit'])) {
    $database = new Database("localhost", "root", "", "user");
    $User_ID = $_POST['User_ID'];
    $user = $database->getUserById($User_ID);
    if ($user === null) {
        echo "User not found.";
    } else {
        $Username = $user['username'];
        $Email = $user['email'];
        $Password = $user['password'];
    }
    $database->close();
} elseif (isset($_POST['save'])) {
    $database = new Database("localhost", "root", "", "user");
    $User_ID = $_POST['User_ID'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $database->updateUser($User_ID, $Username, $Email, $Password);
    $database->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body style="background-image: url('../creditcard/images/26.webp'); background-size: cover;background-color: #f2f2f2; font-family: Arial, sans-serif;">
	<h2 style="text-align: center; margin-top: 50px; margin-bottom: 20px;">Edit User</h2>
	<form method="post" class="form-container" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; display: flex; flex-direction: column; justify-content: center; align-items: center;">
		<input type="hidden" name="User_ID" value="<?php echo $User_ID ?>">
		<label style="display: block; margin-bottom: -2px; font-size: 15px; font-weight: bold;">Username:</label>
		<input type="text" name="Username" value="<?php echo $Username ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
		<br>
		<label style="display: block; margin-bottom: -2px; font-size: 15px; font-weight: bold;">Email:</label>
		<input type="text" name="Email" value="<?php echo $Email ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
		<br>
		<label style="display: block; margin-bottom: -2px; font-size: 15px; font-weight: bold;">Password:</label>
		<input type="text" name="Password" value="<?php echo $Password ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
		<br>
		<input type="submit" name="save" value="Save" style="background-color: green; color: white; font-size: 18px; padding: 7px 20px; border-radius: 5px; border: none; box-shadow: 2px 2px 5px rgba(0,0,0,0.2);">

	</form>
</body>
</html>
