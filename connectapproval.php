<?php
        

        $donorid=$_POST['donor_id'];
        $docid=$_POST['docid'];
        

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
        
// $sql = "INSERT INTO donor(D_approval)
// values('YES') where Donor_id='$donorid'";

$sql="UPDATE donor set D_approval='YES' where Donor_id='$donorid';
update donor set doctor_id='$docid' where Donor_id='$donorid'";
if ($conn->multi_query($sql)){
echo "Donor Approved"; 
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>