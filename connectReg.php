<?php

        $name=$_POST['R_name'];
        $email=$_POST['R_email'];
        $dob=$_POST['R_DOB'];
        $city=$_POST['R_add'];
        $med=$_POST['Medical_his'];
        $phone=$_POST['R_phno'];
        $recepientid=$_POST['Recepient_id'];
        $recpass=$_POST['R_password'];
        $bloodgroup=$_POST['R_BloodGroup'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "deepika12";
        $dbName = "bloodbanksystem";
        

$host = "localhost";
$dbusername = "root";
$dbpassword = "deepika12";
$dbname = "bloodbanksystem";

// Create connection
 $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO recepient(R_name,R_email,R_DOB,R_add,Medical_his,R_phno,R_BloodGroup,Recepient_id,R_password)
values('$name','$email','$dob','$city','$med','$phone','$bloodgroup','$recepientid','$recpass')";
//$sql1= "select count(BloodGroup) from blood where BloodGroup='$bloodgroup'";
$sql1= "select * from blood where BloodGroup='$bloodgroup' and approval=0";

$result=$conn->query($sql1);
$count = mysqli_num_rows($result);   
if ($conn->query($sql)){
        echo "New record is inserted sucessfully\r\n";
        
        if($count>0)
        {
        echo "Blood group available.";
        $query2="select Blood_id from blood where BloodGroup='$bloodgroup' and approval=0 limit 1";
        $query3 = mysqli_query($conn, $query2);
        $row = mysqli_fetch_row($query3);
        $bid=$row[0];
        $query4="update blood set approval='1' where Blood_id='$bid';
        update blood set Recepient_id='$recepientid' where Blood_id='$bid';
        update recepient set Received_Status='YES' where Recepient_id='$recepientid';";
        if ($conn->multi_query($query4)){
                echo "Booked. Please call up blood bank for further steps.";}
            else{
                 echo "Error: ". $sql ."". $conn->error;
               }  
        }
        else
        echo "Not available. Please log in and check later";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>