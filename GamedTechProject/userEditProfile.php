<?php

require_once "Conn.php";
session_start();
$username = $_SESSION['username'];
$firstName = $lastName = $userName = $phoneNo = $password = $email = $address = $billingID = $paymentMethod = $billingDate = $billingAddress = "";
$query = "SELECT user.UserName, user.UFirstName, user.UlastName, user.UEmail ,user.Password,
user.Address,userphone.UserPhone,userbilling.BillingID,billinginfo.PaymentMethod,
billinginfo.BillingDate,billinginfo.BillingAddress 
from user inner join userphone on user.UserName = userphone.UserName
 inner join userbilling on user.UserName = userbilling.UserName 
 inner join billinginfo on userbilling.BillingID = billinginfo.BillingID
  where user.Username = ?";
if($stmt = mysqli_prepare($conn, $query)){
            
    mysqli_stmt_bind_param($stmt, "s", $param_id);
    
    
    $param_id = $username;
    
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            
            //$userName = $row["UserName"];
            $firstName = $row["UFirstName"];
            $lastName = $row["UlastName"];
            $userName = $row["UserName"];
            $email = $row["UEmail"];
            $password = $row["Password"];
            $address = $row["Address"];
            $phoneNo = $row["UserPhone"];

            $billingAddress = $row["BillingAddress"];
            $paymentMethod = $row["PaymentMethod"];

        } else{
            
            header("location: home.php");
            exit();
        }
        
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
            <h3 id="userNameChange"><?php 
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

        <!-- Start of Register form section -->

        <section class="register">

            <form action="updateUserProfile.php" method="POST">
                <h3>Edit Profile</h3>
                <input type="text" name="fName" id="" class="box" value= <?php echo $firstName; ?> placeholder = "First Name">
                <input type="text" name="lName" id="" class="box" value= "<?php echo $lastName; ?>" placeholder = "Last Name">
                <input type="text" name="userName" id="" class="box" value= "<?php echo $userName; ?>" readonly>
                <input type="email" name="emailAddress" id="" class="box" value= <?php echo $email; ?> placeholder = "Email">
                <input type="text" name="Address" id="" class="box" value= <?php echo $address; ?> placeholder = "Address">
                <input type="text" name="PhoneNumber" id="" class="box" value= <?php echo $phoneNo; ?> placeholder = "Phone Number">
                <input type="text" name="paymentMethod" id="" class="box" value= <?php echo $paymentMethod; ?> placeholder = "Payment Method" readonly>
                <input type="text" name="billingAddress" id="" class="box" value= <?php echo $billingAddress; ?> placeholder = "Billing Address" readonly>
                <input type="password" name="PassWord" id="registerPassword" class="box" value= <?php echo $password; ?> placeholder = "Password">
                <span><i class="fa fa-eye" aria-hidden="true" onclick="togglePasswordVisibilityRegister()" id="registerEye"></i></span>

               

                <input type="submit" value="Update" class="btn">
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