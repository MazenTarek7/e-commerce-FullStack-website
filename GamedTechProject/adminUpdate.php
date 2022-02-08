<?php

require_once "Conn.php";
 

$firstName = $lastName = $password = $email = $ssn = $empID = "";
$firstName_err = $lastName_err = $password_err = $email_err = $ssn_err = $empID_err = "";
 

if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    $id = $_POST["id"];
    
    $input_fname = trim($_POST["fname"]);
    if(empty($input_fname)){
        $firstName_err = "Please enter a first name.";
    } elseif(!filter_var($input_fname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid first name.";
    } else{
        $firstName = $input_fname;
    }

    $input_lname = trim($_POST["lname"]);
    if(empty($input_lname)){
        $lastName_err = "Please enter a last name.";
    } elseif(!filter_var($input_lname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $lastName_err = "Please enter a valid last name.";
    } else{
        $lastName = $input_lname;
    }

    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter a password.";
    } 
    else{
        $password = $input_password;
    }

    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";
    } elseif(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
        $email_err = "Please enter a valid email.";
    } else{
        $email = $input_email;
    }

    $input_ssn = trim($_POST["ssn"]);
    if(empty($input_ssn)){
        $ssn_err = "Please enter an ssn.";
    } 
    else{
        $ssn = $input_ssn;
    }
    
    // Check input errors before inserting in database
    if(empty($firstName_err) && empty($lastName_err) && empty($password_err) && empty($email_err) && empty($ssn_err)){
        
        $sql = "UPDATE emp SET EFirstName = ? , ELastName = ? , Password = ? , EEmail = ? , SSN = ?  WHERE EmpID = ?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sssssi", $param_fname , $param_lname , $param_password , $param_email , $param_ssn , $param_id);
            
            
            $param_fname = $firstName;
            $param_lname = $lastName;
            $param_password = $password;
            $param_email = $email;
            $param_ssn = $ssn;
            $param_id = $id;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: adminDashboard.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    }
    
    
    mysqli_close($conn);
} else{
    
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        
        $id =  trim($_GET["id"]);
        
        
        $sql = "SELECT * FROM emp WHERE EmpID = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            
            $param_id = $id;
            
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
    }  else{
        
        header("location: adminError.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">

                    <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control <?php echo (!empty($firstName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstName; ?>">
                            <span class="invalid-feedback"><?php echo $firstName_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control <?php echo (!empty($lastName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastName; ?>">
                            <span class="invalid-feedback"><?php echo $lastName_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>SSN</label>
                            <input type="text" name="ssn" class="form-control <?php echo (!empty($ssn_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ssn; ?>">
                            <span class="invalid-feedback"><?php echo $ssn_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Employee ID</label>
                            <input type="text" name="id" class="form-control" readonly value="<?php echo $id; ?>">
                        </div>

                        <input type="submit" class="btn btn-primary ml-2" value="Submit">
                        <a href="adminDashboard.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>