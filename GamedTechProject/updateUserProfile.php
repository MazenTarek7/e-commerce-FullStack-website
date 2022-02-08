<?php
include('Conn.php');
session_start();
$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$userName = $_POST['userName'];
$address = $_POST['Address']; 
$phoneNumber = $_POST['PhoneNumber']; 
$email = $_POST['emailAddress'];  
$password = $_POST['PassWord']; 
$paymentMethod = $_POST['paymentMethod'];
$billingAddress = $_POST['billingAddress'];
$query1 = "UPDATE `user` SET `Address`= '$address',`UFirstName`= '$firstName',`UlastName`= '$lastName',
`Password`= '$password',`UEmail`= '$email' WHERE UserName = '$userName'";
$query2 = "UPDATE `userphone` SET `UserPhone`= '$phoneNumber' WHERE UserName = '$userName'";
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
if($result1 == TRUE && $result2 == TRUE){  
    $_SESSION['name'] = $firstName;
    header("location: userEditProfile.php");
} 
?>