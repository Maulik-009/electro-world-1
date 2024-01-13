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

$id = $_GET['id']; // Get the user ID from the URL

$sql = "DELETE FROM users WHERE id=$id"; // Changed from 'Orders' to 'users'

if ($conn->query($sql) === TRUE) {
  echo "User removed successfully";
  // Redirect back to the admin panel
  header("Location: ../users.php");
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
