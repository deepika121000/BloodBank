<?php

        $name=$_POST['donor_name'];
        $email=$_POST['email'];
        $dob=$_POST['DOB'];
        $city=$_POST['donor_city'];
        $iron=$_POST['iron_content'];
        $phone=$_POST['ph_no'];
        $weight=$_POST['weight']; 
        $donorid=$_POST['Donor_id'];
        $bloodgroup=$_POST['D_BloodGroup'];
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
        
$sql = "INSERT INTO donor(donor_name,email,DOB,donor_city,iron_content,ph_no,weight,D_BloodGroup,Donor_id)
values('$name','$email','$dob','$city','$iron','$phone','$weight','$bloodgroup','$donorid')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully"; 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>