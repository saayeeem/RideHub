<?php

include('../control/ValidationLogin.php');
$email = $_SESSION["email"];
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
} else if (isset($_SESSION['email'])) {
    if ($_SESSION['type'] == "Vendor") {
        header('Location: VendorHome.php');
    }
    if ($_SESSION['type'] == "customer") {
        header('Location: CustomerHome.php');
    }
    if ($_SESSION['type'] == "driver") {
        header('Location: DriverHome.php');
    }
}

$connection = new db();
$conobj = $connection->OpenCon();

$userQuery = $connection->ShowAll($conobj, "Admin", $email);

if ($userQuery->num_rows > 0) {

    while ($row = $userQuery->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $address = $row['address'];
        $phone = $row['phone'];
    }
} else {
    echo "0 results";
}
$connection->CloseCon($conobj);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Vendor Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>

    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Admin Profile</h2>
    </div>

    <nav>

        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <!-- main -->

    <section class="pad-70 right">
        <div class="container">
            <p><img src="Pictures/admin.jpg" alt="Admin" class="center"></p>
            <br>
            Name: <?php echo $name; ?>
            <hr>
            Email: <?php echo $email; ?>
            <hr>
            Address: <?php echo $address; ?>
            <hr>
            Phone Number: <?php echo $phone; ?>
            <br>

        </div>
    </section>

    <!-- main -->
    <!-- footer -->
    <footer>
        <div class="container footer-wrap">
            <div class="footer-left">
                <ul class="footer-menu">
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy</a></li>
                </ul>

            </div>
            <div class="footer-right">
                <ul class="footer-menu">
                    <li><a href="">Follow</a></li>
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>


    </footer>
    <!-- footer -->
    <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
</body>

</html>