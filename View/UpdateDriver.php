<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ../control/login.php"); // Redirecting To Home Page
}

include('../control/UpdateCheckDriver.php');

$email = $_SESSION["email"];

$connection = new db();
$conobj = $connection->OpenCon();
$connection->ShowAll($conobj, "driver", $email);
//$connection->UpdateVendor($conobj, "Vendor", $email);

$userQuery = $connection->ShowAll($conobj, "driver", $email);
if ($userQuery->num_rows > 0) {

    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {
        $name = $row["name"];
        $pass = $row["password"];
        $phone = $row["phone"];
        $address = $row["address"];
    }
} else {
    echo "0 results";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Vendor Profile Update</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Update Driver</h2>
    </div>

    <nav>

        <a href="DriverHome.php">Home</a> |
        <a href="DriverProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <!-- main  -->
    <p id="msg">
        <?php echo $error ?>
    </p>
    <section class="pad-70">
        <div class="container">
            <form action='' method='post'>
                <div class="form-row">
                    <div class="form-group">
                        Name:
                        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
                    </div>
                    <div class="form-group">

                        Password:
                        <input type="text" name="pass" value="<?php echo $pass; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        Phone Number:
                        <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        Address:
                        <input type="text" name="address" value="<?php echo $address; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" name="update" class="btn btn-lg btn-primary btn-submit">
                    </div>
                </div>

            </form>
        </div>
    </section>
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