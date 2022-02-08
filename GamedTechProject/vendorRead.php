<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
    require_once "Conn.php";
    
    
    $sql = "SELECT * FROM product WHERE ProID = ?";
    
    if($stmt = mysqli_prepare($conn , $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        
        $param_id = trim($_GET["id"]);
        
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                
                                       
                $firstNameE = $row["ProID"];                     
                $firstName = $row["ProName"];
                $lastName = $row["ProDescription"];
                $password = $row["Quantity"];
                $email = $row["Price"];
                $ssn = $row["UnitWeight"];
                $id = $row["CatID"];
                $email = $row["AdminID"];
                $ssn = $row["EmpID"];
                $id = $row["VendorID"];

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
        <a href="vendorDashboard.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech's Vendor Dashboard </a>
    </header>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Product Record</h1>

                 
                    <div class="form-group">
                        <label>Product ID:</label>
                        <p><b><?php echo $row["ProID"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Product Name:</label>
                        <p><b><?php echo $row["ProName"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Product Description:</label>
                        <p><b><?php echo $row["ProDescription"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Quantity:</label>
                        <p><b><?php echo $row["Quantity"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Price:</label>
                        <p><b><?php echo $row["Price"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Unit Weight:</label>
                        <p><b><?php echo $row["UnitWeight"]; ?></b></p>
                    </div>

                    <div class="form-group">
                        <label>Category ID:</label>
                        <p><b><?php echo $row["CatID"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Admin ID:</label>
                        <p><b><?php echo $row["AdminID"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Employee ID:</label>
                        <p><b><?php echo $row["EmpID"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Vendor ID:</label>
                        <p><b><?php echo $row["VendorID"]; ?></b></p>
                    </div>

                    <p><a href="vendorDashboard.php" class="btn btn-primary active">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>