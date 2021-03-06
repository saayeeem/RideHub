<?php

session_start();
include('../model/db.php');
if (!isset($_SESSION['email'])) {
    die('Not logged in');
}
if (isset($_POST['cancel'])) {
    // Redirect the browser to AdminHome.php
    header("Location: AdminHome.php");
    return;
}

// Guardian: Make sure that vendor_id is present
if (!isset($_GET['vendor_id'])) {
    $_SESSION['error'] = "Missing vendor id";
    header('Location: AdminHome.php');
    return;
}


$vendor_id = $_GET['vendor_id'];
$connection = new db();
$conobj = $connection->OpenCon();


$userQuery = $connection->Show($conobj, "vendor", $vendor_id);

if ($userQuery->num_rows > 0) {

    while ($row = $userQuery->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
    }

    if (isset($_POST['delete']) && isset($_GET['vendor_id'])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $connection->DeleteVendor($conobj, "vendor", $vendor_id);
        $connection->DeleteFromLogin($conobj, "login", $email);
        $_SESSION['success'] = 'vendor Profile Deleted';
        $connection->CloseCon($conobj);
        header("Location: AdminHome.php");
        return;
    }
} else {
    $_SESSION['error'] = 'Bad value for vendor id';
    header('Location: AdminHome.php');
    return;
}

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
        <h2>Delete vendor</h2>
    </div>

    <nav>

        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <section class="pad-70">
        <div class="container log-form-pos">
            <form method="post"><input type="hidden" name="vendor_id" value="<?php echo $_GET['vendor_id'] ?>">
                <h1>Confirm: Deleting <?php echo $name ?></h1>
                <p><img src="Pictures/vendor.jpg" alt="Home" class="center"></p>
                <input class="btn btn-lg btn-success" type="submit" value="Delete" name="delete">
                <input class="btn btn-lg btn-danger" type="submit" name="cancel" value="Cancel">
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