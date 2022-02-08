<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel='shortcut icon' type='image/x-icon' href="images/gamedTech_Icon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <style>
        .radio-1{
            margin-right: 22rem;
            font-size: 1.3rem;
            font-weight: bold;
        }

        .radio-2{
            font-size: 1.3rem;
            font-weight: bold;
        }

        input[type='radio']{ 
            transform: scale(1.3); 
        }

        input[type='radio']:hover{
            cursor:pointer;
        }

    </style>
    
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
            <a href= "wishlist.php" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
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
                echo $_SESSION['name'];?></h3>
            <a href="logout.php" id="loginLogoutflag">
                <?php
                    if($_SESSION['name'] == "Guest")
                        echo "Login";
                    else
                        echo "Logout";
                    
                ?>
            </a>
        </div>

        <nav class="navbar">
        <?php
            if(($_SESSION['name'])!="Guest")
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

        <!-- Start of Register form section -->

        <section class="register">

            <form action="registrationCheck.php" method="POST">
                <h3>Sign Up</h3>
                <input type="text" name="fName" id="" class="box" placeholder="First Name" required="">
                <input type="text" name="lName" id="" class="box" placeholder="Last Name" required ="">
                <input type="text" name="userName" id="" class="box" placeholder="Username (Users Only)">
                <input type="text" name="Address" id="" class="box" placeholder="Address (Users Only)">
                <input type="text" name="VendorTitle" id="" class="box" placeholder="Vendor Title (Vendors Only)">
                <input type="email" name="emailAddress" id="" class="box" placeholder="Email Address" required ="">
                <input type="password" name="PassWord" id="registerPassword" class="box" placeholder="Password" required="">
                <span><i class="fa fa-eye" aria-hidden="true" onclick="togglePasswordVisibilityRegister()" id="registerEye"></i></span>
                <input type="password" name="" id="confirmRegisterPassword" class="box" placeholder="Confirm Password" required="">
                <span><i class="fa fa-eye" aria-hidden="true" onclick="togglePasswordVisibilityRegisterConfirm()" id="registerEyeConfirm"></i></span>

                <input type ="radio" name ="Type" value="User" checked="">
                    <label for="User" class="radio-1">User</label>
                <input type ="radio" name="Type" value="Vendor">
                    <label for="Vendor" class="radio-2">Vendor</label>

                <input type="submit" value="Sign Up" class="btn">
                <p>Have an account?</p>
                <a href="login.php" class="btn link">Sign In</a>
            </form>
    
        </section>
    
        <!-- End of Register form section -->

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








    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="Javascript/index.js"></script>

    <script src="Javascript/changeName.js"></script>

</body>
</html>