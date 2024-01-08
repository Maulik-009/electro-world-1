<!-- Shows name by pulling it from the session -->
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.jpeg" >
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Electro World</title>
</head>
<body>
<!--
<h1 style="color: black">Hello, <!--
<?php //echo $_SESSION['name']; -->?></h1> -->

    <header>
        <nav>
            <div class="container">
                <div class="logotext">
                    <a href="index1.html"><h1>ELECTRO WORLD</h1></a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="headers/contact-us.html">Contact Us</a></li>
                        <li><a href="headers/about-us.html">About Us</a></li>
                    </ul>
                </div>
                <div class="search">
                    <!-- <input type="search" name="Search" id="Search" placeholder="Search Your Product Here"> -->
                    <input type="text" id="searchInput" placeholder="Search Your Product Here"  onkeyup="searchFunction()" placeholder="Search for items...">
                <ul id="searchList">
                    <li><a href="#">Google Pixel 8 Pro</a></li>
                    <li><a href="#">Samsung Galaxy S23 Ultra</a></li>
                    <li><a href="#">Oneplus 11</a></li>
                    <li><a href="#">Iphone 15</a></li>
                    <li><a href="#">Iphone 15 Pro</a></li>
                    <li><a href="#">Pixel 6a</a></li>
                    <li><a href="#">S23</a></li>
                    <li><a href="#">Fold 5</a></li>
                    <li><a href="#">Sony x90</a></li>
                    <li><a href="#">LG C2</a></li>
                    <li><a href="#">Samsung S90c</a></li>
                    <li><a href="#">Samsung QLED</a></li>
                    <li><a href="#">Sony x74k</a></li>
                    <li><a href="#">LG ThinQ</a></li>
                    <li><a href="#">Sony x85</a></li>
                    <li><a href="#">Xiaomi OLED</a></li>
                    <li><a href="#">Macbook M3 pro</a></li>
                    <li><a href="#">ROG Zephyrus</a></li>
                    <li><a href="#">HP Spectre x360</a></li>
                    <li><a href="#">ROG Strix</a></li>
                    <li><a href="#">Framework 13</a></li>
                    <li><a href="#">Dell XPS</a></li>
                    <li><a href="#">Microsoft surface pro 8</a></li>
                    <li><a href="#">Samsung Book 3 Ultra</a></li>
                    <li><a href="#">Sony XM5</a></li>
                    <li><a href="#">Beats by Dre</a></li>
                    <li><a href="#">Sennheiser Momentum 4 Wireless</a></li>
                    <li><a href="#">Apple AirPods</a></li>
                    <li><a href="#">Samsung Galaxy buds</a></li>
                    <li><a href="#">Google Pixel Buds</a></li>
                    <li><a href="#">Nothing Ear 2</a></li>
                    <li><a href="#">Apple AirPods Pro</a></li>
                    <li><a href="#">Samsung Galaxy tab s9 Ultra</a></li>
                    <li><a href="#">Samsung Galaxy tab s8</a></li>
                    <li><a href="#">Pixel Tablet</a></li>
                    <li><a href="#">iPad Air</a></li>
                    <li><a href="#">iPad Pro 12.9</a></li>
                    <li><a href="#">Ipad 9th Gen</a></li>
                    <li><a href="#">Xiaomi pad 6</a></li>
                    <li><a href="#">Microsoft surface tablet</a></li>
                    <li><a href="#">Playstation 5</a></li>
                    <li><a href="#">Dualsense 5</a></li>
                    <li><a href="#">Xbox Series S</a></li>
                    <li><a href="#">Xbox Series X</a></li>
                    <li><a href="#">Xbox Controller</a></li>
                    <li><a href="#">Nintendo Switch</a></li>
                    <li><a href="#">Playstation 4 Pro</a></li>
                    <li><a href="products/Gaming/ds4.html">Dualshock 4</a></li>
                    <li><a href="#">Galaxy Watch 5</a></li>
                    <li><a href="#">Galaxy Watch 5 Pro</a></li>
                    <li><a href="#">Galaxy Watch 6 Classic</a></li>
                    <li><a href="#">Apple Watch Series 9</a></li>
                    <li><a href="#">Apple Watch Ultra</a></li>
                    <li><a href="#">Pixel Watch 2</a></li>
                    <li><a href="#">Garmin MARQ Captain 2</a></li>
                    <li><a href="#">Fossil Gen 6</a></li>
                </ul>

                
                <script>
                function searchFunction() {
                
                var input = document.getElementById("searchInput");
                var filter = input.value.toUpperCase();
                
                var list = document.getElementById("searchList");
                var items = list.getElementsByTagName("li");
                    
                for (var i = 0; i < items.length; i++) {
                    var link = items[i].getElementsByTagName("a")[0];
                    var text = link.textContent || link.innerText;
                    if (filter !== "" && text.toUpperCase().indexOf(filter) > -1) {
                    items[i].style.display = "block";
                    } else {
                    items[i].style.display = "none";
                    }
                }
                }
                </script>
                </div>
                <div class="sign">
                    <a href="Login-reg/index.php"><i class="fa-solid fa-circle-user" style="color: #ffffff;"></i>Sign in</a>
                </div>

                <div>
                <p style="color: black">Hello,<?php echo $_SESSION['name'];?></p>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="parent1">
        <div class="options">
            <div class="mobiles">
               <a href="categories/mobiles.html"><img src="images/mobiles.webp" alt="Mobiles"></a> 
               <p style="text-align: center">Mobiles</p>
            </div>
            <div class="television">
                <a href="categories/television.html"><img src="images/television.webp" alt="Television"></a>
                <p style="text-align: center">Televison</p>
            </div>
            <div class="laptop">
                <a href="categories/laptop.html"><img src="images/laptops.webp" alt="Laptops"></a>
                <p style="text-align: center">Laptops</p>
            </div>
            <div class="he">
                <a href="categories/headphones.html"><img src="images/headphone.webp" alt="Headphones & Earphones"></a>
                <p style="text-align: center">Headphones</p>
            </div>
            <div class="tablet">
                <a href="categories/tablet.html"><img src="images/tablet.webp" alt="Tablet"></a>
                <p style="text-align: center">Tablet</p>
            </div>
            <div class="gaming">
                <a href="categories/gaming.html"><img src="images/gaming.webp" alt="Gaming"></a>
                <p style="text-align: center">Gaming</p>
            </div>
            <div class="wear">
                <a href="categories/wearables.html"><img src="images/wearables.webp" alt="Wearables"></a>
                <p style="text-align: center">Wearables</p>
            </div>
        </div>

    </main>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>