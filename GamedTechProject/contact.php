<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

    <!-- Start of contact info section -->

    <section class="info-container">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <h3>Address</h3>
                <p>Smart Village, KM 28 Cairo - Alexandria Desert Rd, Al Giza Desert, Giza Governorate 12577</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>gamedtech@hotmail.com</p>
                <p>mazentarek13@gmail.com</p>
                <p>mustafamagdyf01@gmail.com</p>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Telephone</h3>
                <p>01200014400</p>
                <p>01006750209</p>
                <p>01008156411</p>
            </div>

        </div>

    </section>

    <!-- End of contact info section -->

    <!-- Start of Contact Section -->

    <section class="contact">

        <form id="contactForm" action="" method="get" onsubmit="return false">
            <h3>Get in Touch</h3>
            <p>Leave us a message and we will get back to you as soon as possible!</p>

            <div class="inputBox">
                <input type="text" name="name" id="nameInput" placeholder="Enter Your Name:">
                <input type="email" name="email" id="emailInput" placeholder="Enter Your Email:">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="Enter Your Number:" name="phone" id="phoneInput">
                <input type="text" placeholder="Subject:" name="subject" id="subjectInput"> 
            </div>
            <textarea name="message" id="messageInput" cols="30" rows="10" placeholder="Your Message:"></textarea>
            <button type="submit" value="Send Message" class="btn">Send Message</button>

            <span id="statusText">Sending Message</span>

        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.6912660729176!2d31.01614001551674!3d30.074382924111855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585ba27e4146c1%3A0x8160ed22ad2a2c9d!2sSmart%20Village!5e0!3m2!1sen!2seg!4v1639004819972!5m2!1sen!2seg" allowfullscreen="" loading="lazy"></iframe>

    </section>

    <!-- End of Contact Section -->

    <!-- Start of newsletter Section -->

    <section class="newsletter">

        <div class="content">
            <h3>NewsLetter</h3>
            <p>Subscribe for <span>weekly</span> newsletter</p>
        </div>

        <form id="newsLetterForm" action="" method="get" onsubmit="return false">
            <input type="email" name="newsLetterEmail" id="newsLetterEmail" placeholder="Enter Your Email:" class="email">
            <input type="submit" value="Subscribe" class="btn">
        </form>

    </section>

    <!-- End of newsletter Section -->

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
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-twitter"></a>
        </div>

    </section>

    <section class="credit">
        
        <p>&#169; 2020-2021 <span>GamedTech Inc.</span> All rights reserved.</p>
        
        <img src="images/card_img.png" alt="Accepted Payments">

    </section>

    <!-- End of Footer -->






    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="Javascript/contactForm.js"></script>

    <script src="Javascript/index.js"></script>

    <script src="Javascript/changeName.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="Javascript/cart.js"></script>

    <script src="Javascript/wishlist.js"></script>
    
</body>
</html>