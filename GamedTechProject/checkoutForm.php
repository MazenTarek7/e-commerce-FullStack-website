<script>
    var cartNumbers = localStorage.getItem('cartNumbers');
    document.cookie = "cartNumbers = " + cartNumbers;
    console.log(cartNumbers);
    var totalCost = localStorage.getItem('totalCost');
    document.cookie = "totalCost = " + totalCost;
    console.log(totalCost);
    </script>
    <?php 
    $cartNo = $_COOKIE['cartNumbers'];
    $costTotal = $_COOKIE['totalCost'];
    ?>
<?php
require_once "Conn.php";
session_start();
$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$userName = $_POST['userName'];
$address = $_POST['Address']; 
$email = $_POST['emailAddress'];
$queryCart = "INSERT INTO `cart`(`CartID`, `NoOfProducts`, `TotalPrice`) 
VALUES ('','$cartNo','$costTotal')";
$query2 = "select *from user where UserName = '$userName' and Password = '$password'";
$result = mysqli_query($conn, $queryCart);
if($result == TRUE)
    header("location: thankyou.html");

else if ($result == FALSE)
    header("location: checkout.html");
?>