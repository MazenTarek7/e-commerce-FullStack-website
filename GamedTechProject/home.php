<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel='shortcut icon' type='image/x-icon' href="images/gamedTech_Icon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

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
            <input type="search" id="search-box" placeholder="Search for products...">
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

    <!-- Main Section (Home) -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-3.jpg" alt="Laptop Image">
                    </div>
                    <div class="content">
                        <span>Up to 15% Off</span>
                        <h3>Laptops</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-6.jpg" alt="PC Parts Image">
                    </div>
                    <div class="content">
                        <h3>PC Parts</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-7.jpg" alt="Gaming Peripherals Image">
                    </div>
                    <div class="content">
                        <span>Up to 25% Off</span>
                        <h3>PC Peripherals</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>
    
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-5.jpg" alt="VR Headsets Image">
                    </div>
                    <div class="content">
                        <h3>VR Headsets</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-4.jpg" alt="Software Image">
                    </div>
                    <div class="content">
                        <span>Up to 30% Off</span>
                        <h3>Software</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>
    
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-1.jpg" alt="SmartPhone Image">
                    </div>
                    <div class="content">
                        <h3>SmartPhones</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/home-img-2.jpg" alt="SmartWatches Image">
                    </div>
                    <div class="content">
                        <h3>SmartWatches</h3>
                        <a href="products.php" class="btn">Shop Now</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            

        </div>

    </section>

    <!-- End of Main Section (Home) -->

    <!-- Start of Banner Section -->

    <section class="banner">

        <div class="box-container">
            <a href="#" class="box">
                <img src="images/banner-3.jpg" alt="Banner Img 1 SmartPhones">
                <div class="content">
                    <span>Special Offer</span>
                    <h3>Upto 10% OFF</h3>
                </div>
            </a>

            <a href="#" class="box">
                <img src="images/banner-2.jpg" alt="Banner Img 2 SmartWatches">
                <div class="content">
                    <span>Special Offer</span>
                    <h3>Upto 25% OFF</h3>
                </div>
            </a>

            <a href="#" class="box">
                <img src="images/banner-1.jpg" alt="Banner Img 3 Headset">
                <div class="content">
                    <span>Special Offer</span>
                    <h3>Upto 40% OFF</h3>
                </div>
            </a>
        </div>

    </section>

    <!-- End of Banner Section -->
    <!-- arrivals setcion starts!-->
    <section class="arrivals">
        <h1 class="heading">New <span>arrivals!</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/arrival-1.jpg" class="main-img" alt="">
                    <img src="images/arrival-1-hover.jpg" class="hover-img" alt="">
                </div>
                <div class="content">
                    <h3>HD Televisions</h3>
                    <div class="price"> 229.99$ <span>329.99$</span> </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star half-alt"></i>
                    </div>
                </div>


                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/arrival-2.jpg" class="main-img" alt="">
                        <img src="images/arrival-2-hover.jpg" class="hover-img" alt="">
                    </div>
                    <div class="content">
                        <h3>Laptop</h3>
                        <div class="price"> 229.99$ <span>329.99$</span> </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star half-alt"></i>
                        </div>
                    </div>
    
    
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/arrival-3.jpg" class="main-img" alt="">
                            <img src="images/arrival-3-hover.jpg" class="hover-img" alt="">
                        </div>
                        <div class="content">
                            <h3>SmartPhone</h3>
                            <div class="price"> 229.99$ <span>329.99$</span> </div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star half-alt"></i>
                            </div>
                        </div>
        
        
                        </div>

                        <div class="box">
                            <div class="image">
                                <img src="images/arrival-4.jpg" class="main-img" alt="">
                                <img src="images/arrival-4-hover.jpg" class="hover-img" alt="">
                            </div>
                            <div class="content">
                                <h3>Printer</h3>
                                <div class="price"> 229.99$ <span>329.99$</span> </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star half-alt"></i>
                                </div>
                            </div>
            
            
                            </div>

                            <div class="box">
                                <div class="image">
                                    <img src="images/arrival-5.jpg" class="main-img" alt="">
                                    <img src="images/arrival-5-hover.jpg" class="hover-img" alt="">
                                </div>
                                <div class="content">
                                    <h3>Headsets</h3>
                                    <div class="price"> 229.99$ <span>329.99$</span> </div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star half-alt"></i>
                                    </div>
                                </div>
                
                
                                </div>

                                <div class="box">
                                    <div class="image">
                                        <img src="images/arrival-6.jpg" class="main-img" alt="">
                                        <img src="images/arrival-6-hover.jpg" class="hover-img" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Speakers</h3>
                                        <div class="price"> 229.99$ <span>329.99$</span> </div>
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star half-alt"></i>
                                        </div>
                                    </div>
                    
                    
                                    </div>
            
        
    


            </div>
    </section>


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

    <script src="Javascript/wishlist.js"></script>

</body>
</html>