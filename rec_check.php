<?php

    session_start();
    include('connection.php');
    // echo $_SESSION["R_id"];
    $R_id=$_SESSION['R_id'];
    $sql="select R_BloodGroup from Recepient where Recepient_id='$R_id'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $bloodg = implode(',', $row);
    // echo $bloodg;
    $sql1= "select * from blood where BloodGroup='$bloodg' and approval=0 limit 1";
    $result1=$con->query($sql1);
    $count = mysqli_num_rows($result1);
    if($count>0)
    {
        echo "Blood group available.";
        $query2="select Blood_id from blood where BloodGroup='$bloodg' and approval=0 limit 1";
        $query3 = mysqli_query($con, $query2);
        $row1 = mysqli_fetch_row($query3);
        $bid=$row1[0];
        echo $bid;
        $query4="update blood set approval='1' where Blood_id='$bid';
        update blood set Recepient_id='$R_id' where Blood_id='$bid';
        update recepient set Received_Status='YES' where Recepient_id='$R_id';";
        if ($con->multi_query($query4))
        {
            echo "Booked. Please call for further steps.";
        }
        else
        {
            echo "Error: ". $sql ."". $conn->error;
        }  
    }
    else
    echo "Not avalialble. Please log in and check in a while";
    

?>