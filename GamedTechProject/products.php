<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel='shortcut icon' type='image/x-icon' href="images/gamedTech_Icon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <script type="text/javascript">

    function deleteProducts(){
        localStorage.clear();
        window.location.reload();
    }

</script>
    
</head>
<body>
    <!-- Header Section -->
    <header class="header">

        <a href="home.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech </a>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search for products..." onkeyup = "searchProducts();">
            <label for="search-box" class="fas fa-search"> </label>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="editprofile.php" class="fas fa-user"></a>
            <a href= "wishlist.php" class="fas fa-heart"><small id="wishlistSpan"></small></a>
            <a href="cart.php" class="fas fa-shopping-cart"><span></span></a>
        </div>


    </header>

    <!-- End of Header Section-->
    
    <!-- Sidebar -->

    <div class="side-bar">

        <div id="close-side-bar" class="fas fa-times">

        </div>

        <div class="user">
            <img src="images/blank-user-img-2.png" alt="User Image">
            <h3 id="userNameChange"><?php session_start();
            if(!empty($_SESSION['name'])) 
                echo $_SESSION['name'];
            else
                echo "Guest";?></h3>
            <a href="logout.php" id="loginLogoutflag" onclick = "deleteProducts();">
                <?php
                    if(!empty($_SESSION['name']) && $_SESSION['name'] != "Guest")
                        echo "Logout";
                    else
                        echo "Login";
                    
                ?>
            </a>
        </div>

        <nav class="navbar">
        <?php
            if(!empty($_SESSION['name']) && $_SESSION['name'] != "Guest")
            {
            echo '<a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>';
            echo '<a href="about.php"> <i class="fas fa-angle-right"></i>About</a>';
            echo '<a href="products.php"> <i class="fas fa-angle-right"></i>Products</a>';
            echo '<a href="editprofile.php"> <i class="fas fa-angle-right"></i>Edit Profile</a>';
            echo '<a href="contact.php"> <i class="fas fa-angle-right"></i>Contact Us</a>';
            echo '<a href="cart.php"> <i class="fas fa-angle-right"></i>Cart</a>';
            }
            else
            {
                echo '<a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>';
                echo '<a href="about.php"> <i class="fas fa-angle-right"></i>About</a>';
                echo '<a href="products.php"> <i class="fas fa-angle-right"></i>Products</a>';
                echo '<a href="contact.php"> <i class="fas fa-angle-right"></i>Contact Us</a>';
                echo '<a href="login.php"> <i class="fas fa-angle-right"></i>Login</a>';
                echo '<a href="register.php"> <i class="fas fa-angle-right"></i>Register</a>';
                echo '<a href="cart.php"> <i class="fas fa-angle-right"></i>Cart</a>';
            }

            ?>
        </nav>

    </div>

    <!-- End of Sidebar-->

    <!--Category Section Starts-->

    <section class="category">
        <div class="heading">Shop by <span>Category</span></div>
        <div class="box-container">

            <a href="#" class="box active" onclick="filterProducts('all')">
                <img src="images/cat_allProducts.jpg" alt="">
                <h3>All Products</h3>
            </a>
            <a href="#" class="box"  onclick="filterProducts('smartphones')">
                <img src="images/cat_img2.png" alt="">
                <h3>SmartPhones</h3>
            </a>
            <a href="#" class="box" onclick="filterProducts('smartaccessories')">
                <img src="images/cat_img4.png" alt="">
                <h3>Smart Accessories</h3>
            </a>
            <a href="#" class="box" onclick="filterProducts('headphones')">
                <img src="images/cat_img3.png" alt="">
                <h3>Headphones</h3>
            </a>
            <a href="#" class="box" onclick="filterProducts('laptops')">
                <img src="images/home-img-3.jpg" alt="">
                <h3>Laptops</h3>
            </a>
            <a href="#" class="box" onclick="filterProducts('pcparts')">
                <img src="images/home-img-6.jpg" alt="">
                <h3>PC Parts</h3>
            </a>
            <a href="#" class="box" onclick="filterProducts('gaming')">
                <img src="images/cat_img5.png" alt="">
                <h3>Gaming</h3>
            </a>
            <a href="#" class="box" onclick="filterProducts('software')">
                <img src="images/home-img-4.jpg" alt="">
                <h3>Software</h3>
            </a>
        </div>
    </section>
    <!--Category Section Ends-->

    <!--Products Section Starts-->
    <section class="products">
        <h1 class="heading">Featured <span>Products</span></h1>
        <div class="box-container" id = "products-container">
            <div class="box smartphones">
                <div class="image">
                    <img src="images/oppof9smartphone.jpg" class="main-img" alt="">
                    <img src="images/product-1-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="product-details.php" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Oppo F9 Smartphone</h3>
                    <div class="price">199.99$ <span>399.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartaccessories">
                <div class="image">
                    <img src="images/nikoncamera.jpg" class="main-img" alt="">
                    <img src="images/product-2-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Nikon Camera</h3>
                    <div class="price">279.99$ <span>419.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartaccessories">
                <div class="image">
                    <img src="images/samsungtv.jpg" class="main-img" alt="">
                    <img src="images/product-3-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Samsung TV</h3>
                    <div class="price">449.99$ <span>599.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box headphones">
                <div class="image">
                    <img src="images/jblspeakers.jpg" class="main-img" alt="">
                    <img src="images/product-4-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>JBL Speakers</h3>
                    <div class="price">79.99$ <span>149.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartaccessories">
                <div class="image">
                    <img src="images/echodot.jpg" class="main-img" alt="">
                    <img src="images/product-5-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Echo Dot</h3>
                    <div class="price">149.99$ <span>199.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartaccessories">
                <div class="image">
                    <img src="images/applewatchseries6.jpg" class="main-img" alt="">
                    <img src="images/product-6-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Apple Watch Series 6</h3>
                    <div class="price">299.99$ <span>399.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box headphones">
                <div class="image">
                    <img src="images/headphones.jpg" class="main-img" alt="">
                    <img src="images/product-7-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Headphones</h3>
                    <div class="price">159.99$ <span>199.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartphones">
                <div class="image">
                    <img src="images/samsungsmartphone.jpg" class="main-img" alt="">
                    <img src="images/product-8-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Samsung Smartphone</h3>
                    <div class="price">499.99$ <span>699.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartaccessories">
                <div class="image">
                    <img src="images/camera.jpg" class="main-img" alt="">
                    <img src="images/product-9-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Camera</h3>
                    <div class="price">199.99$ <span>399.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box smartphones">
                <div class="image">
                    <img src="images/iphone13promax.jpg" class="main-img" alt="">
                    <img src="images/product-10-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Iphone 13 Pro Max</h3>
                    <div class="price">1199.99$</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box pcparts">
                <div class="image">
                    <img src="images/nvidiartx3080ti.jpg" class="main-img" alt="">
                    <img src="images/product-11-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Nvidia RTX 3080TI</h3>
                    <div class="price">649.99$ <span>799.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box software">
                <div class="image">
                    <img src="images/windows11pro.jpg" class="main-img" alt="">
                    <img src="images/product-12-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Windows 11 Pro</h3>
                    <div class="price">149.99$ <span>199.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box laptops">
                <div class="image">
                    <img src="images/asusrogstrix.jpg" class="main-img" alt="">
                    <img src="images/product-13-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Asus ROG STRIX</h3>
                    <div class="price">1499.99$ <span>1599.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box laptops">
                <div class="image">
                    <img src="images/razerblade15.jpg" class="main-img" alt="">
                    <img src="images/product-14-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Razer Blade 15</h3>
                    <div class="price">1999.99$ <span>2199.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box pcparts">
                <div class="image">
                    <img src="images/intelcorei7.jpg" class="main-img" alt="">
                    <img src="images/product-15-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Intel Core i7 11th gen</h3>
                    <div class="price">349.99$ <span>449.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box gaming">
                <div class="image">
                    <img src="images/ps5controller.jpg" class="main-img" alt="">
                    <img src="images/product-16-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>PS5 Controller</h3>
                    <div class="price">69.99$ <span>79.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box gaming">
                <div class="image">
                    <img src="images/razerhuntsmanelite.jpg" class="main-img" alt="">
                    <img src="images/product-17-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Razer Huntsman Elite</h3>
                    <div class="price">149.99$ <span>159.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box software">
                <div class="image">
                    <img src="images/kasperaskyantivirus.jpg" class="main-img" alt="">
                    <img src="images/product-18-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart add-wish"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Kasperasky Antivirus</h3>
                    <div class="price">59.99$ <span>69.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!--Products Section Ends-->

    <!-- Start of Product Banner-->

    <section class="product-banner">
        <h1 class="heading"> <span>Today's</span> Deals </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/product-banner-1.jpg" alt="Product Deal 1">
                <div class="content">
                    <span>Special Offer</span>
                    <h3>Upto 40% off</h3>
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/product-banner-2.jpg" alt="Product Deal 2">
                <div class="content">
                    <span>Special Offer</span>
                    <h3>Upto 25% off</h3>
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- End of Product Banner-->


    <!-- Start of Footer -->

    <section class="quick-links">
        <a href="home.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech</a>

        <div class="links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="products.php">Products</a>
            <a href="contact.php">Contact Us</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="cart.php">Cart</a>
        </div>

        <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank"></a>
            <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/?lang=en" class="fab fa-twitter" target="_blank"></a>
        </div>

    </section>

    <section class="credit">
        
        <p>&#169; 2020-2021 <span>GamedTech Inc.</span> All rights reserved.</p>
        
        <img src="images/card_img.png" alt="Accepted Payments">

    </section>

    <!-- End of Footer -->








    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="Javascript/index.js"></script>

    <script src="Javascript/cart.js"></script>

    <script src="Javascript/filter.js"></script>

    <script src="Javascript/search.js"></script>

    <script src="Javascript/wishlist.js"></script>


</body>
</html>