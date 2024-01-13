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

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
$total = 0; // Initialize total price
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 50px auto;
            animation: slideIn 1s ease;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            transition: all 0.3s ease;
        }
        th {
            background-color: #6c5ce7;
            color: white;
        }
        tr:hover {background-color: #a29bfe;}

        .delete-btn {
            color: white;
            background-color: #d63031;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #b71540;
        }

        .cta {
        background-color: #6c5ce7;
        border-radius: 10px;
        color: #fff;
        display: inline-block;
        font-size: 18px;
        margin: 30px auto;
        padding: 10px 20px;
        text-decoration: none;
        text-transform: uppercase;
        transition: all 0.3s ease;
        display: block;
        text-align: center;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .title {
            text-align: center;
            font-size: 2em;
            color: #6c5ce7;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1 class="title">Cart</h1>

<?php
if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>User Name</th><th>Product</th><th>Price</th><th>Action</th></tr>";
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["UserName"]."</td><td>".$row["Product"]."</td><td>".$row["Price"]."</td>";
    echo "<td><a href='php/remove_from_cart.php?id=".$row["id"]."' class='delete-btn'>Remove</a></td></tr>";
    $total += $row["Price"]; // Add the price of each item to the total
  }
  echo "</table>";
  echo "<div style='text-align: center'><h2>Total: ".$total."</h2></div>";
} else {
  echo "<div style='text-align: center'>Cart is empty</div>";
}
$conn->close();
?>

<form action="php/checkout.php" method="post">
    <input type="submit" class="cta" value="Checkout">
</form>

<a href="index1.php">Home</a>
</body>
</html>
