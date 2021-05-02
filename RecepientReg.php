<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipient Registration</title>
</head>

<body>
  <link href='index.css?ver=<?php echo rand(111,999)?>">' rel='stylesheet' type='text/css'>

  <div class="register">
    <div class="register-header">
      <h1>RECIPIENT REGISTRATION</h1>
      <a href="LoginReg.php">Click here to Login</a>
    </div>
    <div class="register-form">
      <form action="connectReg.php"  method="post">
      <label>Name:</label><input type="text" name="R_name" required><br>
      <label>Email:</label><input type="email" name="R_email" required><br>
      <label>DOB:</label><input type="date" name="R_DOB" max="2021-06-01"required><br>
      <label>City:</label><input type="text" name="R_add" required><br>
      <label>Medical History:</label><input type="text" name="Medical_his" required><br>
      <label>Phone Number:</label><input type="text" name="R_phno" required><br>
      <label>Blood Group:</label><input type="text" name="R_BloodGroup" style="text-transform: uppercase" required><br>
      <label>Aadhar id:</label><input type="text" name="Recepient_id" required><br>
      <label>Password:</label><input type="password" name="R_password" required><br>
      <button type="submit" name="submit">Submit</button>
      <br>
      </form>
    </div>
  </div>
</body>

</html>