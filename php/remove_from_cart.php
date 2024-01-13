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

$id = $_GET['id']; // Get the order ID from the URL

$sql = "DELETE FROM cart WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Order removed successfully";
  // Redirect back to the cart panel
  header("Location: ../cart.php");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
