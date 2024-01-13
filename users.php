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

$sql = "SELECT * FROM users"; // Changed from 'Orders' to 'users'
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
  echo "<table><tr><th>ID</th><th>User Name</th><th>Password</th><th>Name</th><th>Action</th></tr>"; // Changed the table headers
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["user_name"]."</td><td>".$row["password"]."</td><td>".$row["name"]."</td>"; // Changed the row data
    echo "<td><a href='php/delete_users.php?id=".$row["id"]."' class='delete-btn'>Remove</a></td></tr>";
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
