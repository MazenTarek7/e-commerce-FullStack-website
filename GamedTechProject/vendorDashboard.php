<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor Dashboard</title>
    
    <link rel='shortcut icon' type='image/x-icon' href="images/gamedTech_Icon.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/styles3.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <header class="header">
        <a href="vendorDashboard.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech's Vendor Dashboard </a>
    </header>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="employeeText">Vendor Details</h2>
                        <a href="addProduct.php" class="btn btn-success btn"><i class="fa fa-plus"></i> Add New Product</a>
                    </div>
                    <?php
                    
                    require_once "Conn.php";
                    
                    
                    $sql = "SELECT * FROM product";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ProID </th>";
                                        echo "<th>Pro Name</th>";
                                        echo "<th>Pro Description</th>";
                                        echo "<th>Quantity</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Unit Weight</th>";
                                        echo "<th>CatID </th>";
                                        echo "<th>AdminID </th>";
                                        echo "<th>EmpID </th>";
                                        echo "<th>VendorID </th>";
                                        echo "<th>Operation</th>";
                                      
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['ProID'] . "</td>";
                                        echo "<td>" . $row['ProName'] . "</td>";
                                        echo "<td>" . $row['ProDescription'] . "</td>";
                                        echo "<td>" . $row['Quantity'] . "</td>";
                                        echo "<td>" . $row['Price'] . "</td>";
                                        echo "<td>" . $row['UnitWeight'] . "</td>";
                                        echo "<td>" . $row['CatID'] . "</td>";
                                        echo "<td>" . $row['AdminID'] . "</td>";
                                        echo "<td>" . $row['EmpID'] . "</td>";
                                        echo "<td>" . $row['VendorID'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="vendorRead.php?id='. $row['ProID'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="vendorUpdate.php?id='. $row['ProID'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pen"></span></a>';
                                            echo '<a href="vendorDelete.php?id='. $row['ProID'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
            <a href="login.php" class="btn btn-primary ml-2">Logout</a>        
        </div>
    </div>
</body>
</html>