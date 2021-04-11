  <!DOCTYPE html>
<html>

<body>



  <link rel="stylesheet" type="text/css" href="../css/vendorp.css">


    <div class="header">
<center>  <h1>Update Vendor</h1>
  </div>

  <div class="topnav">
    <nav>
        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
</div>

<br>
<br>
  <?php
  session_start();

  include('../control/UpdateCheckVendor.php');


  if(empty($_SESSION["email"])) // Destroying All Sessions
  {
  header("Location: ../control/login.php"); // Redirecting To Home Page
  }


  $email = $_SESSION["email"];

  $connection = new db();
  $conobj = $connection->OpenCon();
  $connection->ShowAll($conobj, "Vendor", $email);
  //$connection->UpdateVendor($conobj, "Vendor", $email);

  $userQuery = $connection->ShowAll($conobj, "Vendor", $email);
  if ($userQuery->num_rows > 0) {

      // output data of each row
      while($row = $userQuery->fetch_assoc()) {
        $name=$row["name"];
        $email=$row["email"];

        $address=$row["address"];
        $phone=$row["phone"];

      $pass=$row["password"];


    }
  }
    else {
      echo "0 results";
    }



  ?>
  <form action='' method='post'>
  Name : <input type='text' name='name' value="<?php echo $name; ?>" >
<br>
<br>
  Email : <input type='text' name='email' value="<?php echo $email; ?>" >

<br>
  <br>
  Password : <input type='text' name='pass' value="<?php echo $pass; ?>" >

    <br>
    <br>
  Address : <input type='text' name='address' value="<?php echo $address; ?>" >
  <br>
  <br>
  Phone : <input type='text' name='phone' value="<?php echo $phone; ?>" >
  <br>
  <br>



       <input name='update' type='submit' value='Update'>







</body>

</html>
