<?php
include('../control/ValidationLogin.php');
if ($_SESSION["type"] == "vendor") {
    $_SESSION["type"] = $type;
    header('Location: VendorHome.php');
} else if ($_SESSION["type"] == "customer") {
    $_SESSION["type"] = $type;
    header('Location: CustomerHome.php');
} else if ($_SESSION["type"] == "driver") {
    $_SESSION["type"] = $type;
    header('Location: DriverHome.php');
} else if ($_SESSION["type"] == "Admin") {
    $_SESSION["type"] = $type;
    header('Location: AdminHome.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <title>Home</title>
</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Home</h2>
    </div>
    <nav>
        <a href="home.php">Home</a>
        <a href="home.php">About Us</a>
        <a href="home.php">Profile</a>
        <a href="home.php">Cars</a>
    </nav>
    <p><img src="Pictures/home.jpg" alt="Home" class="center"></p>
    <section class="pad-70 right">
        <div class="container">
            <h2>Returning User?</h2>

            <a class="div" href="login.php">Login Now!!</a>
            <br>

            <h2>Explore our World</h2>
            <a class="div" href=" RegisterHome.php">Register with us</a>
        </div>
    </section>



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