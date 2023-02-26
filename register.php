<?php
class Register {
  private $conn;

  function __construct($host, $user, $password, $database) {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $name = "user";
    $this->conn = mysqli_connect($host, $user, $password, $database);

    if (!$this->conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  function __destruct() {
    mysqli_close($this->conn);
  }

  public function validateForm($username, $email, $password, $password2) {
    $errors = array();

    if (empty(trim($username))) {
      $errors['username'] = 'Emri i përdoruesit është i nevojshëm';
    }

    if (empty(trim($email))) {
      $errors['email'] = 'Email është i nevojshëm';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Email nuk është valid';
    }

    if (empty(trim($password))) {
      $errors['password'] = 'Fjalëkalimi është i nevojshëm';
    } else if (strlen(trim($password)) < 6) {
      $errors['password'] = 'Fjalëkalimi duhet të jetë së paku 6 karaktere';
    }

    if (empty(trim($password2))) {
      $errors['password2'] = 'Konfirmimi i fjalëkalimit është i nevojshëm';
    } else if (trim($password2) !== trim($password)) {
      $errors['password2'] = 'Fjalëkalimet nuk përputhen';
    }

    if (count($errors) === 0) {

      $sql = "SELECT * FROM useri WHERE email='$email'";
      $result = mysqli_query($this->conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        $error_msg = "Përdoruesi ekziston";
      } else {
        $sql = "INSERT INTO useri (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
          $success_msg = "Ju u regjistruat me sukses, ju lutemi nëse doni të kyçeni klikoni linkun poshtë";
        } else {
          $error_msg = "Error: " . mysqli_error($this->conn);
        }
      }

    } else {
      $error_msg = "";
      foreach ($errors as $key => $value) {
        $error_msg .= $value . '<br>';
      }
    }

    if (isset($success_msg)) {
      echo "<script type='text/javascript'>alert('$success_msg'); window.location.href='formValidation.php';</script>";
    }

    if (isset($error_msg)) {
      echo "<script type='text/javascript'>alert('$error_msg'); window.location.href='formValidation.php';</script>";
    }
  }
}

$register = new Register("localhost", "root", "", "user");

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  $register->validateForm($username, $email, $password, $password2);
}
?>

<?php if (isset($success_msg)): ?>
	<script type="text/javascript">window.location.href='formValidation.php';
		alert("<?php echo $success_msg; ?>");
	</script>
<?php endif; ?>

<?php if (isset($error_msg)): ?>
	<script type="text/javascript">window.location.href='formValidation.php';
		alert("<?php echo $error_msg; ?>");
	</script>
<?php endif; ?>
