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
                    <li><a href="products/Mobiles/pixel8pro.html">Google Pixel 8 Pro</a></li>
                    <li><a href="products/Mobiles/s23ultra.html">Samsung Galaxy S23 Ultra</a></li>
                    <li><a href="products/Mobiles/oneplus11.html">Oneplus 11</a></li>
                    <li><a href="products/Mobiles/iphone15.html">Iphone 15</a></li>
                    <li><a href="products/Mobiles/iphone15pro.html">Iphone 15 Pro</a></li>
                    <li><a href="products/Mobiles/pixel6a.html">Pixel 6a</a></li>
                    <li><a href="products/Mobiles/s23.html">S23</a></li>
                    <li><a href="products/Mobiles/fold5.html">Fold 5</a></li>
                    <li><a href="products/Televisions/sonyX90H.html">Sony x90</a></li>
                    <li><a href="products/Televisions/LGC3.html">LG C2</a></li>
                    <li><a href="products/Televisions/S90C.html">Samsung S90c</a></li>
                    <li><a href="products/Televisions/SamsungQLED..html">Samsung QLED</a></li>
                    <li><a href="products/Televisions/sonyX74K.html">Sony x74k</a></li>
                    <li><a href="products/Televisions/LGTHINQ.html">LG ThinQ</a></li>
                    <li><a href="products/Televisions/SonyX80K.html">Sony x85</a></li>
                    <li><a href="products/Televisions/miOLED.html">Xiaomi OLED</a></li>
                    <li><a href="products/Laptops/macbook.html">Macbook M3 pro</a></li>
                    <li><a href="products/Laptops/rogzephyrus.html">ROG Zephyrus</a></li>
                    <li><a href="products/Laptops/hpspectre.html">HP Spectre x360</a></li>
                    <li><a href="products/Laptops/rogStrix.html">ROG Strix</a></li>
                    <li><a href="products/Laptops/framework.html">Framework 13</a></li>
                    <li><a href="products/Laptops/dellxps.html">Dell XPS</a></li>
                    <li><a href="products/Laptops/surfacelaptop.html">Microsoft surface pro 8</a></li>
                    <li><a href="products/Laptops/galaxybook.html">Samsung Book 3 Ultra</a></li>
                    <li><a href="products/Headphones/sonyxm5.html">Sony XM5</a></li>
                    <li><a href="products/Headphones/beatsbydre.html">Beats by Dre</a></li>
                    <li><a href="products/Headphones/sennheiser.html">Sennheiser Momentum 4 Wireless</a></li>
                    <li><a href="products/Headphones/airpods.html">Apple AirPods</a></li>
                    <li><a href="products/Headphones/galaxybuds.html">Samsung Galaxy buds</a></li>
                    <li><a href="products/Headphones/pixelbuds.html">Google Pixel Buds</a></li>
                    <li><a href="products/Headphones/nothingbuds.html">Nothing Ear 2</a></li>
                    <li><a href="products/Headphones/airpodspro.html">Apple AirPods Pro</a></li>
                    <li><a href="products/Tablets/s9ultra..html">Samsung Galaxy tab s9 Ultra</a></li>
                    <li><a href="products/Tablets/galaxys8.html">Samsung Galaxy tab s8</a></li>
                    <li><a href="products/Tablets/pixeltab.html">Pixel Tablet</a></li>
                    <li><a href="products/Tablets/ipadair.html">iPad Air</a></li>
                    <li><a href="products/Tablets/ipadpro.html">iPad Pro 12.9</a></li>
                    <li><a href="products/Tablets/ipad9.html">Ipad 9th Gen</a></li>
                    <li><a href="products/Tablets/mipad6.html">Xiaomi pad 6</a></li>
                    <li><a href="products/Tablets/surfacetab.html">Microsoft surface tablet</a></li>
                    <li><a href="products/Gaming/ps5.html">Playstation 5</a></li>
                    <li><a href="products/Gaming/ds5.html">Dualsense 5</a></li>
                    <li><a href="products/Gaming/seriesS.html">Xbox Series S</a></li>
                    <li><a href="products/Gaming/seriesx.html">Xbox Series X</a></li>
                    <li><a href="products/Gaming/xboxcontroller.html">Xbox Controller</a></li>
                    <li><a href="products/Gaming/switcholed.html">Nintendo Switch</a></li>
                    <li><a href="products/Gaming/ps4pro.html">Playstation 4 Pro</a></li>
                    <li><a href="products/Gaming/ds4.html">Dualshock 4</a></li>
                    <li><a href="products/Wearables/watch5.html">Galaxy Watch 5</a></li>
                    <li><a href="products/Wearables/watch5pro.html">Galaxy Watch 5 Pro</a></li>
                    <li><a href="products/Wearables/watch6classic.html">Galaxy Watch 6 Classic</a></li>
                    <li><a href="products/Wearables/appleseries9.html">Apple Watch Series 9</a></li>
                    <li><a href="products/Wearables/applewatchultra.html">Apple Watch Ultra</a></li>
                    <li><a href="products/Wearables/pixelwatch2.html">Pixel Watch 2</a></li>
                    <li><a href="products/Wearables/garmincaptain.html">Garmin MARQ Captain 2</a></li>
                    <li><a href="products/Wearables/fossilgen6.html">Fossil Gen 6</a></li>
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

        <!-- Start of Featured Products Section -->
        <div class="featured-products">
                <h2>Featured Products</h2>
                <div class="product-grid">
                    <!-- You can duplicate this section for each product -->
                    <div class="product-card">
                        <img class="product-image" src="images/Mobiles/iqoo12.jpg" alt="Product Name">
                        <div class="product-info">
                            <h3 class="product-name">IQOO 12 PRO</h3>
                            <p class="product-description">Product Description</p>
                            <p class="product-price">$600</p>
                            <button class="product-button">Buy Now</button>
                        </div>
                    </div>
                    <!-- You can duplicate this section for each product -->
                    <div class="product-card">
                        <img class="product-image" src="images/Mobiles/rog 8.png" alt="Product Name">
                        <div class="product-info">
                            <h3 class="product-name">ASUS ROG PHONE 8</h3>
                            <p class="product-description">Product Description</p>
                            <p class="product-price">$1,140</p>
                            <button class="product-button">Buy Now</button>
                        </div>
                    </div>
                    <!-- You can duplicate this section for each product -->
                    <div class="product-card">
                        <img class="product-image" src="images/Mobiles/iqoo9p.jpg" alt="Product Name">
                        <div class="product-info">
                            <h3 class="product-name">IQOO 9 PRO</h3>
                            <p class="product-description">Product Description</p>
                            <p class="product-price">$840</p>
                            <button class="product-button">Buy Now</button>
                        </div>
                    </div>
                    <!-- You can duplicate this section for each product -->
                    <div class="product-card">
                        <img class="product-image" src="images/Mobiles/Ipad.webp" alt="Product Name">
                        <div class="product-info">
                            <h3 class="product-name">IPAD AIR</h3>
                            <p class="product-description">Product Description</p>
                            <p class="product-price">$470</p>
                            <button class="product-button">Buy Now</button>
                        </div>
                    </div>
                    <!-- End of a single product -->
                </div>
            </div>
            <!-- End of Featured Products Section -->

            <footer>
                    <div class="company-info">
                    <h2>About Electro World</h2>
                    <div class="info-content">
                        <div class="info-item">
                            <i class="fas fa-globe"></i>
                            <p>Electro World is a leading online electronics store offering a wide range of products.</p>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-star"></i>
                            <p>We are committed to providing our customers with the best shopping experience.</p>
                        </div>
                    </div>
                    </div>

                    <div class="footer-links">
                    <div class="info-content">
                        <div class="info-item">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="users.php">Users</a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
                </div>
            </footer>

</main>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>