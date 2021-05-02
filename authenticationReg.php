<?php      
    session_start();
    include('connection.php');  
    $username = $_POST['Recepient_id'];  
    $password = $_POST['R_password'];  
    $_SESSION["R_id"]="$username";
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from recepient where Recepient_id = '$username' and R_password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            echo $_SESSION["R_id"];
            echo "<script> window.location.assign('rec_check.php'); </script>";  
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  