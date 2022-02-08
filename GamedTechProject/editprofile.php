<?php
session_start();
if($_SESSION['name'] == "Guest")
    {
        header("location: login.php");
    }
else
    {
        header("location: userEditprofile.php");
    }
    
?>