<?php
include('Conn.php');
$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$userName = $_POST['userName'];
$address = $_POST['Address']; 
$vendorTitle = $_POST['VendorTitle']; 
$email = $_POST['emailAddress'];  
$password = $_POST['PassWord']; 
//$userType = $_POST['Type'];
$firstName = stripcslashes($firstName);  
$lastName = stripcslashes($lastName);
$userName = stripcslashes($userName);
$address = stripcslashes($address); 
$vendorTitle = stripcslashes($vendorTitle); 
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$firstName = mysqli_real_escape_string($conn, $firstName);  
$lastName = mysqli_real_escape_string($conn, $lastName); 
$userName = mysqli_real_escape_string($conn, $userName); 
$address = mysqli_real_escape_string($conn, $address); 
$vendorTitle = mysqli_real_escape_string($conn, $vendorTitle); 
$email = mysqli_real_escape_string($conn, $email); 
$password = mysqli_real_escape_string($conn, $password); 
if($_POST['Type'] == 'User')
{
    $query = "INSERT INTO user(`UserName`, `Address`, `UFirstName`, `UlastName`, `Password`, `UEmail`)
     VALUES ('$userName','$address','$firstName','$lastName','$password','$email')";
     $result = mysqli_query($conn, $query);          
}
else if($_POST['Type'] == 'Vendor')
{
    $query = "INSERT INTO vendor(`VendorID`,`FirstName`, `LastName`, `Password`, `Email`, `VendorTitle`)
     VALUES ('','$firstName','$lastName','$password','$email','$vendorTitle')";
     $result = mysqli_query($conn, $query);         
}
if($result == TRUE){  
    header("location: login.php");
} 

?>