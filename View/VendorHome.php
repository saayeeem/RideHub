
<?php
session_start();
if(empty($_SESSION["email"]))
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

  <link rel="stylesheet" type="text/css" href="../css/vendorp.css">


    <div class="header">
  <h1>Vendor</h1>
  </div>

  <div class="topnav">
    <nav>

    <?php
    include('../View/MenuFooter.php');


    ?>
    <nav class="topnav">

        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

</div>

    <p><img src="Pictures/vendor1.jpg" alt="Home"></p>
    <div id="page-container">
        <div id="content-wrap">
            <div class="bg" id="center">

                <a class="div" href="RegDriver.php">Add Driver</a>

                <a class="div" href="AddCar.php">Add New Car</a>
                <a class="div" href="Showcar.php">Show Car</a>
                <a class="div" href="RequestedCar.php">Requested Car</a>
            </div>
        </div>
    </div>

</body>

</html>
