// PHP code in add_product.php to handle the form submission
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_price = $_POST['product_price'];

// Handle the image upload
if ($_FILES['product_image']['error'] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES['product_image']['tmp_name'];
    // TODO: You should secure your image upload. Here, we just use the uploaded file name. 
    // In production, you should use a safe name.
    $product_image = basename($_FILES['product_image']['name']);
    move_uploaded_file($tmp_name, "path/to/your/images/directory/$product_image");
} else {
    die("Failed to upload image.");
}

$sql = "INSERT INTO Products (name, description, price, image)
VALUES ('$product_name', '$product_description', '$product_price', '$product_image')";

if ($conn->query($sql) === TRUE) {
  echo "New product created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



<?php
//Retrieving the products
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, description, price, image FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='product-card'>";
    echo "<img src='path/to/your/images/directory/" . $row["image"] . "' alt='" . $row["name"] . "'>";
    echo "<h3>" . $row["name"] . "</h3>";
    echo "<p>" . $row["description"] . "</p>";
    echo "<p>" . $row["price"] . "</p>";
    echo "<button>Buy Now</button>";
    echo "</div>";
  }
} else {
  echo "No products found";
}
$conn->close();
?>
