<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <script type="text/javascript">
        localStorage.clear();
        //window.location.reload();
    </script>
</body>
</html>

<?php
session_start();
if(!empty($_SESSION['name']))
    {
        $_SESSION['name'] = "Guest";
    }
    header("location: login.php");

?>
