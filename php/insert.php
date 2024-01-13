<?php
session_start(); // Start the session

$sname= "localhost";
$unmae= "root";
$password = "root";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, 8889);

if (!$conn) {
	echo "Connection Failed!";
}

$userName = $_SESSION['user_name']; // Get the user name from the session
$productName = $_POST['productName'];
$productPrice = intval($_POST['productPrice']); // Ensure the price is an integer

$sql = "INSERT INTO Orders (id, UserName, Product, Price)
VALUES (NULL, '$userName', '$productName', '$productPrice')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  // Redirect to trn-scn.html page
  header("Location: ../products/trn-scn.html");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

