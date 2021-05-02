<!DOCTYPE html>
<html>

<head>
    <title>Table with database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #9e1336;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #de6a88;
            color: white;
        }

        tr:nth-child(odd) {
            background-color: #f5aec0;
            color: black;
        }

        body
        {
            background:url('https://motionarray.imgix.net/preview-97259-SsNmfaevYJ-high_0005.jpg');
            height: 100%;
            background-position: center;
        }
        
        label
        {
            background-color: #f5aec0;
        }
    </style>
</head>

<body>
    <form action="connectapproval.php" method="post">
    <label> Donor id:</label>  
    <input type = "text" id ="donor_id" name  = "donor_id" />  
    <label> Enter you id again to confirm approval:</label>
    <input type="text" id="docid" name="docid"/>
    <button id="submit" type="submit" name="submit">Submit</button>
    </form> 
    <br><br>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Iron Content</th>
            <th>Phone Number</th>
            <!-- <th>Email</th> -->
            <th>Weight</th>
        </tr>
        <?php
$conn = mysqli_connect("localhost", "root", "deepika12", "bloodbanksystem");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Donor_id,donor_name,D_BloodGroup,donor_city,iron_content,ph_no,weight FROM donor where doctor_id is null";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Donor_id"]. "</td><td>" . $row["donor_name"] . "</td><td>"
. $row["D_BloodGroup"].  "</td><td>" . $row["donor_city"].  "</td><td>" .
$row["iron_content"].  "</td><td>" . $row["ph_no"].
  "</td><td>" . $row["weight"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();


?>
    </table>
</body>

</html>