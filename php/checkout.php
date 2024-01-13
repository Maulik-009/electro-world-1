<?php
session_start();

$sname= "localhost";
$unmae= "root";
$password = "root";
$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, 8889);

if (!$conn) {
    echo "Connection Failed!";
}

// Copy all data from cart to order
$sql = "INSERT INTO Orders SELECT * FROM cart";
if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Clear the cart table
$sql = "DELETE FROM cart";
if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the cart page
header("Location: ../products/chk-scn.html");
exit;
?>
