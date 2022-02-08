<?php    

        include('Conn.php');  
        $username = $_POST['emaill'];  
        $password = $_POST['pass'];  
        $nameChange = "Guest";
        session_start();
       
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($conn, $username);  
            $password = mysqli_real_escape_string($conn, $password);  
          
            $sql = "select *from user where UEmail = '$username' and Password = '$password'";  
            $checkName = "select `UFirstName` from user where UEmail = '$username' and Password = '$password'"; 
            $checkUserName = "select `UserName` from user where UEmail = '$username' and Password = '$password'";
            $result = mysqli_query($conn, $sql);  
            $result2 = mysqli_query($conn, $checkName);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
            $result3 = mysqli_query($conn, $checkUserName);   
            $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC); 
            $count1 = mysqli_num_rows($result);
              
            if($count1 == 1){

                $nameChange = implode($row2);
                $userChange = implode($row3);
                header("location: home.php"); 
            }
           
            else{  
                $sql = "select *from vendor where Email = '$username' and Password = '$password'";
                $checkName = "select `FirstName` from vendor where Email = '$username' and Password = '$password'";
                $checkID = "select VendorID from vendor where Email = '$username' and Password = '$password'";
                $result2 = mysqli_query($conn, $checkName);   
                $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC); 
                $result = mysqli_query($conn, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $result3 = mysqli_query($conn, $checkID);  
                $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
                $count2 = mysqli_num_rows($result);  
                if($count2 == 1){  
                    $ID=implode($row3);
                    $nameChange = implode($row2);
                    
                    header("location: vendorDashboard.php");
                } 
                else
                {
                    $sql = "select *from admin where AEmail = '$username' and Password = '$password'";  
                    $result = mysqli_query($conn, $sql);  
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count3 = mysqli_num_rows($result);
                    if($count3 == 1){  
                        //$nameChange = implode($row2);
                        header("location: adminDashboard.php");
                    }
                    else{
                        echo "Account not found!";
                    } 

                }
              
            } 
            if($count1 == 1 || $count2 == 1 || $count3 == 1)
            {
                $_SESSION['name'] = $nameChange;
                $_SESSION['username'] = $userChange;
                $_SESSION['id'] = $ID;
            }
            else if($count1 == 0 && $count2 == 0 && $count3 == 0)
            header("location: pagenotfound.html");


            
                
    ?>  
    
