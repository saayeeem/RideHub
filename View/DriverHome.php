
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


    <section class="pad-70">
        <center>
        <div class="container">
            <div class="row">

                <div class="post post-right">
                    <img src="Pictures/img4.png" alt="show car">
                    <div class="tag"> <a href="ShowCarDriver.php">Requested Car By User</a></div>
                </div>
            </div>
        </div>
        </center>
    </section>

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
