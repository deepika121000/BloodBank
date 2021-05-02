<?php

    $donorid=$_POST['donor_id'];
    $date_donated=$_POST['Date_donated'];
        
        

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
        

$sql="INSERT into blood(BloodGroup,Donor_id) select D_BloodGroup,Donor_id from donor where Donor_id='$donorid';
Update blood set Date_donated='$date_donated' where Donor_id='$donorid';
update donor set D_approval='NO' where Donor_id='$donorid';
Update blood set approval=0 where Donor_id='$donorid';";

if (mysqli_multi_query($conn,$sql)){
    echo "Blood donated"; 
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    
$conn->close();
}


?>

