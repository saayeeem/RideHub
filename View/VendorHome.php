<?php

require('../control/ValidationLogin.php');
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

// if (isset($_SESSION['email'])) {
//     if ($_SESSION["type"] == "customer") {
//         header('Location: CustomerHome.php');
//     }
//     if ($_SESSION["type"] == "Vendor") {
//         header('Location: VendorHome.php');
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Vendor Home</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Vendor Home</h2>
    </div>

    <nav>

        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <?php
    if (isset($_SESSION['success'])) {
        echo ('<p id="msg">' . htmlentities($_SESSION['success']) . "</p>");
        unset($_SESSION['success']);
    }



    ?>

    <!-- main  -->
    <section class="pad-70">
        <div class="container">
            <div class="row">
                <div class="post post-left">
                    <img src="../View/Pictures/img1.jpeg" alt="add driver">
                    <div class="tag"><a href="RegDriver.php">Add Driver</a></div>
                </div>
                <div class="post post-right">
                    <img src="../View/Pictures/img2.jpg" alt="add car">
                    <div class="tag"><a href="AddCar.php">Add New Car</a></div>
                </div>
            </div>
            <div class="row">
                <div class="post post-left">
                    <img src="Pictures/img3.jpg" alt="show car">
                    <div class="tag"> <a href=" Showcar.php">Show Car</a></div>
                </div>
                <div class="post post-right">
                    <img src="Pictures/img4.png" alt="show car">
                    <div class="tag"><a href="RequestedCarVendor.php">Requested Car</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- main  -->

    <!-- footer  -->
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
    <!-- footer  -->
    <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
</body>

</html>