<?php

class Payment {
  private $conn;
  
  public function __construct($host, $user, $password, $dbname) {
    $this->conn = new mysqli($host, $user, $password, $dbname);
    
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }
  
  public function insertData($cardNumber, $cardHolder, $cardMonth, $cardYear, $cardCvv, $lloji) {
    if (empty($cardNumber) || empty($cardHolder) || empty($cardMonth) || empty($cardYear) || empty($cardCvv) ||empty($lloji)) {
      echo "<script>alert('Ju lutemi mbushni të gjitha të dhënat'); window.location.href='payment.php';</script>";
    } else {
      $sql = "INSERT INTO pagesa (cardNumber, cardHolder, cardMonth, cardYear, cardCvv, lloji) VALUES ('$cardNumber', '$cardHolder', '$cardMonth', '$cardYear', '$cardCvv', '$lloji')";

      if ($this->conn->query($sql) === TRUE) {
        echo "<script>alert('Të dhënat u ruajtën me sukses'); window.location.href='payment.php';</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }
  }
  
  public function __destruct() {
    $this->conn->close();
  }
}

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'user';

$payment = new Payment($host, $user, $password, $dbname);

$cardNumber = $_POST['cardNumber'];
$cardHolder = $_POST['cardHolder'];
$cardMonth = $_POST['cardMonth'];
$cardYear = $_POST['cardYear'];
$cardCvv = $_POST['cardCvv'];
$lloji = $_POST['lloji'];


$payment->insertData($cardNumber, $cardHolder, $cardMonth, $cardYear, $cardCvv, $lloji);
