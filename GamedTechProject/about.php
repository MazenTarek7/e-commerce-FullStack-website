<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
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

<!--About Section-->

<section class="about">
    <div class="image">
        <img src="images/pic.png">
    </div>
    <div class="content">
        <h3>Our Story</h3>
        <p>We're 4 tech enthusiasts who always struggled to find 1 place to fulfill all of our needs.
            So we decided to launch a website that satifisies geeks and gear heads like us.
            
        </p>
        <p>As yassin gobara our team leader, mustafa magdy the process engineer, amr daba the web developer and mazen tarek as the full stack developer.
            we promise to deliver the quality and service we've been always wishing for. 
        </p>
        <a href="#" class = "btn">Read More</a>
    </div>

</section>


<!--faq section starts-->

<section class="faq">
    <h1 class="heading">Questions and <span>Answers</span></h1>
    <div class="accordion-container">
        <div class="accordion">
            <div class="accordion-heading">
                <h3>How to use our website</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                using the search bar or shopping by category, surf through our products and choose whatever you want.
            </p>
        </div>
        <div class="accordion">
            <div class="accordion-heading">
                <h3>How to order products in our website</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                after selecting all of your items, click on the checkout button 
            </p>
        </div>
        <div class="accordion">
            <div class="accordion-heading">
                <h3>How to make payments in our website</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                add your master card/visa to your account or choose cash on delivery when checking out. for visa and mastercard, wait for the otp through a text message on your phone then type it in.
            </p>
        </div>
        <div class="accordion">
            <div class="accordion-heading">
                <h3>Is online payment safe in our website</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                using bitdefender online software, provided by the world's number 1 antivirus company 
            </p>
        </div>
        <div class="accordion">
            <div class="accordion-heading">
                <h3>How can you reach out to us</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                mail us through our email *Gamedtech@gmail.com* or through our hotline 19991 or through any of our social media platforms. 
            </p>
        </div>
    </div>
</section>
<!--faq section ends-->

<!--review section starts-->

<section class="review">
    <h1 class="heading">Our <span> Team</span></h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="images/yassin.jpg" alt="">
                <h3>Yassin Gobara</h3>
                <span>Team leader</span>
                <p>Our main founder and our team leader.</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/mustafa.jpg" alt="">
                <h3>Mustafa Magdy</h3>
                <span>process engineer</span>
                <p>the process engineer and the cofounder</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/Amr.jpg" alt="">
                <h3>Amr Daba</h3>
                <span>Web Developer</span>
                <p>our website developer and maintainor</p>
            </div>
            <div class="swiper-slide slide">
                <img src="images/mazen.jpg" alt="">
                <h3>Mazen tarek</h3>
                <span>Full Stack Developer</span>
                <p>our full stack developer and db adminstrator</p>

            </div>
        </div>
    </div>
</section>
<!--review section ends-->

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

    <script src="Javascript/wishlist.js"></script>

</body>
</html>