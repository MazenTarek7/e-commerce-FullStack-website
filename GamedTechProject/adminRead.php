<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
    require_once "Conn.php";
    
    
    $sql = "SELECT * FROM emp WHERE EmpID = ?";
    
    if($stmt = mysqli_prepare($conn , $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        
        $param_id = trim($_GET["id"]);
        
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                $firstName = $row["EFirstName"];
                $lastName = $row["ELastName"];
                $password = $row["Password"];
                $email = $row["EEmail"];
                $ssn = $row["SSN"];
                $id = $row["EmpID"];
            } else{
                header("location: adminError.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);

    mysqli_close($conn);
} else{
    header("location: adminError.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>

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
                    <h1 class="mt-5 mb-3">Employee Record</h1>

                    <div class="form-group">
                        <label>First Name:</label>
                        <p><b><?php echo $row["EFirstName"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Last Name:</label>
                        <p><b><?php echo $row["ELastName"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <p><b><?php echo $row["Password"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <p><b><?php echo $row["EEmail"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>SSN:</label>
                        <p><b><?php echo $row["SSN"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Employee ID:</label>
                        <p><b><?php echo $row["EmpID"]; ?></b></p>
                    </div>

                    <p><a href="adminDashboard.php" class="btn btn-primary active">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>