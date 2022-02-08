<?php

require_once "Conn.php";
 

$ProID = $proName = $proDesc = $quantity = $price = $unitWeight = $catID = $adminID = $empID = $vendorID = "";
$ProID_err = $proName_err = $proDesc_err = $quantity_err = $price_err = $unitWeight_err = $catID_err = $adminID_err = $empID_err = $vendorID_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_ProID = trim($_POST["ProID"]);
    if(empty($input_ProID)){
        $ProID_err = "Please enter a product ID.";
    }
     else{
        $ProID = $input_ProID;
    }

    $input_proName = trim($_POST["proName"]);
    if(empty($input_proName)){
        $proName_err = "Please enter a product name.";
    } elseif(!filter_var( $input_proName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $proName_err = "Please enter a valid product name.";
    } else{
        $proName = $input_proName;
    }

    $input_proDesc = trim($_POST["proDesc"]);
    if(empty($input_proDesc)){
        $proDesc_err = "Please enter a product description.";
    } 
    else{
        $proDesc = $input_proDesc;
    }

    $input_quant = trim($_POST["quant"]);
    if(empty($input_quant)){
        $quantity_err = "Please enter an quantity.";
    } 
     else{
        $quantity = $input_quant;
    }

    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter a price.";
    } 
    else{
        $price = $input_price;
    }

    $input_unitweight = trim($_POST["unitweight"]);
    if(empty($input_unitweight)){
        $unitWeight_err = "Please enter a unit weight.";
    } 
    else{
        $unitWeight = $input_unitweight;
    }

    $input_catid = trim($_POST["catid"]);
    if(empty($input_catid)){
        $catID_err = "Please enter a category ID.";
    } 
    else{
        $catID = $input_catid;
    }


    $input_adminid = trim($_POST["adminid"]);
    if(empty( $input_adminid)){
        $adminID_err = "Please enter an admin ID.";
    } 
    else{
        $adminID = $input_adminid;
    }


    $input_empid = trim($_POST["empid"]);
    if(empty($input_empid)){
        $empID_err = "Please enter an employee ID.";
    } 
    else{
        $empID = $input_empid;
    }


    $input_vendid = trim($_POST["vendid"]);
    if(empty($input_vendid)){
        $vendorID_err = "Please enter your vendor ID.";
    } 
    else{
        $vendorID = $input_vendid;
    }




    
    if(empty($ProID_err) && empty($proName_err) && empty($proDesc_err) && empty($quantity_err) && empty($price_err) && empty($unitWeight_err) && empty($catID_err) && empty($adminID_err) && empty($empID_err) && empty($vendorID_err)){
        
        $sql = "INSERT INTO product (ProID , ProName , ProDescription , Quantity , Price , UnitWeight, CatID, AdminID, EmpID, VendorID ) VALUES (? , ? , ? , ? , ? , ? , ? , ? , ? , ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
           
            mysqli_stmt_bind_param($stmt, "isssssiiii", $param_ProID , $param_proName , $param_proDesc , $param_quantity , $param_price , $param_unitWeight ,$param_catID, $param_adminID ,$param_empID, $param_vendorID );

            $param_ProID = $ProID;
            $param_proName = $proName;
            $param_proDesc = $proDesc;
            $param_quantity = $quantity;
            $param_price = $price;
            $param_unitWeight = $unitWeight;
            $param_catID = $catID;
            $param_adminID = $adminID;
            $param_empID = $empID;
            $param_vendorID = $vendorID;

            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: vendorDashboard.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>

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
<?php session_start(); 
                $test= $_SESSION['id'];?>
<header class="header">
        <a href="#" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech's Vendor Dashboard </a>
</header>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 font-weight-bold text-center mb-3">Add Product</h2>
                    <p>Fill this form and submit to add a product to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    
                        <div class="form-group">
                            <label>ProID</label>
                            <input type="number" name="ProID" class="form-control <?php echo (!empty($ProID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ProID; ?>">
                            <span class="invalid-feedback"><?php echo $ProID_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="proName" class="form-control <?php echo (!empty($proName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $proName; ?>">
                            <span class="invalid-feedback"><?php echo $proName_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="proDesc" class="form-control <?php echo (!empty($proDesc_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $proDesc; ?>">
                            <span class="invalid-feedback"><?php echo $proDesc_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" min="1" max="100" name="quant" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $quantity; ?>">
                            <span class="invalid-feedback"><?php echo $price_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" min="1" max="3000" name="price" class="form-control <?php echo (!empty($empID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
                            <span class="invalid-feedback"><?php echo $empID_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Unit Weight</label>
                            <input type="number" min="1" max="100" name="unitweight" class="form-control <?php echo (!empty($unitWeight_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $unitWeight; ?>">
                            <span class="invalid-feedback"><?php echo $unitWeight_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Category ID</label>
                            <input type="number" min="1" max="100" name="catid" class="form-control <?php echo (!empty($catID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $catID; ?>">
                            <span class="invalid-feedback"><?php echo $catID_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Admin ID</label>
                            <input type="number" min="1" max="100" name="adminid" class="form-control <?php echo (!empty($adminID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $adminID; ?>">
                            <span class="invalid-feedback"><?php echo $adminID_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Employee ID</label>
                            <input type="number" min="1" max="100" name="empid" class="form-control <?php echo (!empty($empID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $empID; ?>">
                            <span class="invalid-feedback"><?php echo $empID_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Vendor ID</label>
                            <input type="number" name="vendid" class="form-control" readonly <?php echo (!empty($vendorID_err)) ? 'is-invalid' : ''; ?>value="<?php echo $test ?>">
                            <span class="invalid-feedback"><?php echo $vendorID_err;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary ml-2" value="Submit">
                        <a href="vendorDashboard.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>