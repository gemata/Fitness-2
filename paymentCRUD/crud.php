<?php
	require  '../login.php';

	if(!isset($_SESSION)){
		header("Location: ../index.php");
	} else if(!($_SESSION["is_admin"])){
			header("Location: ../index.php");
	}
?>

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style1.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>GYM </span> ADMIN</p>
  <a href="../CRUD/crud.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Users</a>
  <a href="crud.php" style="border-bottom: .3rem solid white; border-radius: .8rem;" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Payments</a>
  <a href="../index.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Kthehuni</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Payments</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="user.png" class="pro-img" />
		<p>Blend  Gentrit <span>UI / UX DESIGNER</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>




    <!DOCTYPE html>

<link rel="stylesheet" href="style.css">
<html>
<head>
	<title>User Dashboard</title>
</head>
<body>
<!-- CREATE -->
<h2>Create Payment</h2>
<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label>Card Number:</label>
  <input type="text" name="cardNumber" min="1" max="9999999999999999" required><br><br>
  <label>Card Holder:</label>
  <input type="text" name="cardHolder" required><br><br>
  <label>Card Year:</label>
  <input type="number" name="cardYear" min="2023" max="2099" style="width: 27%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;" required><br><br>
  <label>Card Month:</label>
  <input type="number" name="cardMonth" min="1" max="12" style="width: 27%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;" required><br><br>
  <label>Card CVV:</label>
  <input type="number" name="cardCvv" min="1" max="9999" style="width: 27%; padding: 10px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px;" required><br><br>
  <label>Payment Type:</label>
  <input type="text" name="lloji" required><br><br>
  <input class="createButton" type="submit" name="submit" value="Create">
</form>
<!-- CREATE logic -->
<?php
class PaymentRegistration {
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

	  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

	  if ($this->conn->connect_error) {
		die("Connection failed: " . $this->conn->connect_error);
	  }
	}

	public function registerPayment() {
	  if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$cardNumber = mysqli_real_escape_string($this->conn, $_POST["cardNumber"]);
		$cardHolder = mysqli_real_escape_string($this->conn, $_POST["cardHolder"]);
		$cardYear = mysqli_real_escape_string($this->conn, $_POST["cardYear"]);
		$cardMonth = mysqli_real_escape_string($this->conn, $_POST["cardMonth"]);
		$cardCvv = mysqli_real_escape_string($this->conn, $_POST["cardCvv"]);
		$lloji = mysqli_real_escape_string($this->conn, $_POST["lloji"]);

			// Validate input fields
	if (empty($cardNumber) || empty($cardHolder) || empty($cardYear) || empty($cardMonth) || empty($cardCvv) || empty($lloji)) {
		return "All fields are required.";
	}

	

	// Insert payment information into database
	$query = "INSERT INTO pagesa (cardNumber, cardHolder, cardYear, cardMonth, cardCvv, lloji) VALUES ('$cardNumber', '$cardHolder', '$cardYear', '$cardMonth', '$cardCvv', '$lloji')";
	$result = mysqli_query($this->conn, $query);

	if ($result) {
		return "Payment registered successfully.";
	} else {
		return "Error registering payment.";
	}
} else {
	return "Invalid request method.";
}
	}
}
$paymentRegistration = new PaymentRegistration("localhost", "root", "", "user");
$paymentRegistration->registerPayment();
?>
<!-- READ -->
<h2>Payments</h2>
<table class="tab">
    <tr>
        <th>Transaction ID</th>
        <th>Card Number</th>
        <th>Card Holder</th>
        <th>Card Year</th>
        <th>Card Month</th>
        <th>Card CVV</th>
        <th>Payment Type</th>
        <th>Transaction Date</th>
        <th>Action</th>
    </tr>
    <?php
    class PaymentDatabase {
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
        }

        public function connect() {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function getPayments() {
            $sql = "SELECT * FROM pagesa";
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Transaction_ID"]. "</td><td>" . $row["cardNumber"]. "</td><td>" . $row["cardHolder"]. "</td><td>" . $row["cardYear"]. "</td><td>" . $row["cardMonth"]. "</td><td>" . $row["cardCvv"]. "</td><td>" . $row["lloji"]. "</td><td>" . $row["Transaction_Date"]. "</td><td><a href=\"edit.php?id=" . $row["Transaction_ID"] . "\">Edit</a> | <a href=\"delete.php?id=" . $row["Transaction_ID"] . "\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
                }
            } else {
                echo "<tr><td colspan='9'>0 results</td></tr>";
            }
        }

        public function deletePayment($id) {
            $sql = "DELETE FROM pagesa WHERE Transaction_ID=$id";

            if ($this->conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $this->conn->error;
            }
        }

        public function closeConnection() {
            $this->conn->close();
        }
    }

    $paymentDatabase = new PaymentDatabase("localhost", "root", "", "user");

    $paymentDatabase->connect();

    if (isset($_GET['delete'])) {
        $paymentDatabase->deletePayment($_GET['delete']);
    }

    $paymentDatabase->getPayments();

    $paymentDatabase->closeConnection();
    ?>
</table>


</body>
</html>


	
	<div class="clearfix"></div>
	<br/><br/>
 
  
  </body>
  </html>
	</div>

	
		
	<div class="clearfix"></div>
</div>



</body>


</html>
