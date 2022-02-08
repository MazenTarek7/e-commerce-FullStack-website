<?php

if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    require_once "Conn.php";
    
    
    $sql = "DELETE FROM emp WHERE EmpID = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        
        $param_id = trim($_POST["id"]);
        
       
        if(mysqli_stmt_execute($stmt)){
            
            header("location: adminDashboard.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again.";
        }
    }
     
    
    mysqli_stmt_close($stmt);
    
    
    mysqli_close($conn);
} else{
    
    if(empty(trim($_GET["id"]))){

        header("location: adminError.php");
        exit();

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    
    <link rel='shortcut icon' type='image/x-icon' href="images/gamedTech_Icon.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/styles3.css">

    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <header class="header">
        <a href="adminDashboard.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech's Admin Dashboard </a>
    </header>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Employee</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this employee?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger active ml-2 mt-2">
                                <a href="adminDashboard.php" class="btn btn-secondary active mt-2">No</a>
                            </p>
                            
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>