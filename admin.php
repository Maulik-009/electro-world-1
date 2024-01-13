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

$sql = "SELECT * FROM Orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {background-color: #f5f5f5;}

        .delete-btn {
            color: white;
            background-color: red;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

    </style>
</head>
<body>

<?php
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>User Name</th><th>Product</th><th>Price</th><th>Action</th></tr>";
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["UserName"]."</td><td>".$row["Product"]."</td><td>".$row["Price"]."</td>";
    echo "<td><a href='php/delete.php?id=".$row["id"]."' class='delete-btn'>Remove</a></td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<a href="index1.php">Home</a>

</body>
</html>
