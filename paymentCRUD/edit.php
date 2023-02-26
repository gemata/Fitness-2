<?php

class Edit {
  
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "user";
  private $table = "pagesa";

  private $conn;

  public function __construct() {
    $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function editData() {
	if(isset($_POST['edit_data'])) {
	  $id = $_POST['id'];
	  $cardNumber = $_POST['cardNumber'];
	  $cardHolder = $_POST['cardHolder'];
	  $cardYear = $_POST['cardYear'];
	  $cardMonth = $_POST['cardMonth'];
	  $cardCvv = $_POST['cardCvv'];
	  $lloji = $_POST['lloji'];
  
	  $sql = "UPDATE " . $this->table . " SET cardNumber='$cardNumber', cardHolder='$cardHolder', cardYear='$cardYear', cardMonth='$cardMonth', cardCvv='$cardCvv', lloji='$lloji' WHERE Transaction_ID=$id";
	  if ($this->conn->query($sql) === TRUE) {
		echo "<script>alert('Data are edited successfully');</script>";
		echo "<script>window.location.href = 'crud.php';</script>";
		return "Data updated successfully";
	  } else {
		return "Error updating data: " . $this->conn->error;
	  }
	}
  }

  public function displayForm() {
    $id = $_GET['id'];
    $sql = "SELECT * FROM " . $this->table . " WHERE Transaction_ID=$id";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $cardNumber = $row['cardNumber'];
      $cardHolder = $row['cardHolder'];
      $cardYear = $row['cardYear'];
      $cardMonth = $row['cardMonth'];
      $cardCvv = $row['cardCvv'];
      $lloji = $row['lloji'];
    }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body style="background-image: url('../creditcard/images/26.webp'); background-size: cover;">
  <form method="post" action="" style="background-size: cover; max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; display: flex; flex-direction: column; justify-content: center; align-items: center;">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <label style="display: block; margin-bottom: 5px; font-size: 15px; font-weight: bold;">Card Number:</label>
  <input type="text" name="cardNumber" value="<?php echo $cardNumber; ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
  <br>
  <label style="display: block; margin-bottom: 5px; font-size: 15px; font-weight: bold;">Card Holder:</label>
  <input type="text" name="cardHolder" value="<?php echo $cardHolder; ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
  <br>
  <label style="display: block; margin-bottom: 5px; font-size: 15px; font-weight: bold;">Card Year:</label>
  <input type="text" name="cardYear" value="<?php echo $cardYear; ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
  <br>
  <label style="display: block; margin-bottom: 5px; font-size: 15px; font-weight: bold;">Card Month:</label>
  <input type="text" name="cardMonth" value="<?php echo $cardMonth; ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
  <br>
  <label style="display: block; margin-bottom: 5px; font-size: 15px; font-weight: bold;">Card CVV:</label>
  <input type="text" name="cardCvv" value="<?php echo $cardCvv; ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
  <br>
  <label style="display: block; margin-bottom: 5px; font-size: 15px; font-weight: bold;">Type:</label>
  <input type="text" name="lloji" value="<?php echo $lloji; ?>" style="width: 50%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;">
  <br>
  <input type="submit" name="edit_data" value="Save Changes" style="background-color: green; color: white; font-size: 18px; padding: 7px 20px; border-radius: 5px; border: none; box-shadow: 2px 2px 5px rgba(0,0,0,0.2);">

</form>
  </body>
  </html>




  <?php
  }

  public function __destruct() {
    $this->conn->close();
  }


}
$edit = new Edit();
$edit->editData();
$edit->displayForm();

?>