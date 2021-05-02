<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donor Registration</title>
  <script>

  </script>
</head>

<body>
  <link href='index.css' rel='stylesheet' type='text/css'>

  <div class="register">
    <div class="register-header">
      <h1>DONOR REGISTRATION</h1>
    </div>
    <div class="register-form">
      <form action="connectDonor.php"  method="post">
      <label>Name:</label><input type="text" name="donor_name" required><br>
      <label>Email:</label><input type="email" name="email" required><br>
      <label>DOB (Min. age: 18 years):</label><input type="date"  name="DOB" id="DOB" max="2003-04-01" required><br>
      <label>City:</label><input type="text" name="donor_city" required><br>
      <label>Iron Content:</label><input type="number" name="iron_content" required><br>
      <label>Phone Number:</label><input type="text" name="ph_no" required><br>
      <label>Weight:</label><input type="number" name="weight" placeholder="in kgs" min="0" required><br>
      <label>Blood Group:</label><input type="text" name="D_BloodGroup" style="text-transform: uppercase"  required><br>
      <label>Aadhar id:</label><input type="text" name="Donor_id" required><br>
      <button type="submit" name="submit">Submit</button>
      <br>
      </form>
    </div>
  </div>
</body>

</html>