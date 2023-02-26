<?php
class UserDeleter {
    private $conn;
    
    function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    function deleteUser($id) {
        $User_ID = $this->conn->real_escape_string($id);

        $sql = "DELETE FROM useri WHERE User_ID='$User_ID'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }

        header("Location: crud.php");
        exit();
    }
    
    function __destruct() {
        $this->conn->close();
    }
}

// Usage
$deleter = new UserDeleter("localhost", "root", "", "user");
if (isset($_GET['id'])) {
    $deleter->deleteUser($_GET['id']);
}

?>
