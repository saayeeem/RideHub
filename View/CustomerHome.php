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
    <title>Document</title>
</head>

<body>
    <?php
    include('../View/MenuFooter.php');


    ?>
    <nav>
        <a href="CustomerHome.php">Home</a> |
        <a href="CustomerProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <!-- main  -->
    <section class="pad-70">
        <div class="container">
            <div class="row">
                <div class="post post-left">
                    <img src="Pictures/img3.jpg" alt="show car">
                    <div class="tag"> <a href="Showcar.php">Show Car</a></div>
                </div>
                <div class="post post-right">
                    <img src="Pictures/img4.png" alt="show car">
                    <div class="tag"> <a href="RequestedCar.php">Requested Car</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- main  -->
</body>

</html>