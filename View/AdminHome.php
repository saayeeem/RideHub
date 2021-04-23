<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ../control/login.php"); // Redirecting To Home Page
}

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
        <h2>Admin Home</h2>
    </div>

    <nav>
        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">Admin Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <?php
    if (isset($_SESSION['success'])) {
        echo ('<p id="msg">' . htmlentities($_SESSION['success']) . "</p>");
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        echo ('<p id="error">' . htmlentities($_SESSION['error']) . "</p>");
        unset($_SESSION['error']);
    }



    ?>
    <!-- main  -->
    <section class="pad-70">
        <div class="container">
            <div class="row">
                <div class="post post-left">
                    <img src="../View/Pictures/img5.jpg" alt="add driver">
                    <div class="tag"><a href="AllDriver.php">Registered Driver</a></div>
                </div>
                <div class="post post-right">
                    <img src="../View/Pictures/img7.jpg" alt="Registed Car">
                    <div class="tag"> <a href="AllCars.php">Registered Cars</a></div>
                </div>
            </div>
            <div class="row">
                <div class="post post-left">
                    <img src="Pictures/img8.jpg" alt="vendor">
                    <div class="tag"><a href="AllVendor.php">Registered Vendors</a></div>
                </div>
                <div class="post post-right">
                    <img src="Pictures/img6.png" alt="show car">
                    <div class="tag"><a href="AllUser.php">Registered Customers</a></div>
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