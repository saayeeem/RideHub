
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
} else if (isset($_SESSION['email'])) {
    // if ($_SESSION['type'] == "Vendor") {
    //     header('Location: VendorHome.php');
    // }
    if ($_SESSION['type'] == "customer") {
        header('Location: CustomerHome.php');
    }
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
  <?php
  include('../View/MenuFooter.php');


  ?>
    <nav>
        <a href="DriverHome.php">Home</a> |
        <a href="DriverProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <?php echo "Driver Profile" . "<br>"; ?>
    <p><img src="Pictures/driver1.jpg" alt="Home"></p>




</body>

</html>
