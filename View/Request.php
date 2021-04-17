<?php
require('../control/ValidationLogin.php');
if (!isset($_SESSION['email'])) {
    die('Not logged in');
}

if (isset($_POST['cancel'])) {
    // Redirect the browser to CustomerHome.php
    header("Location: CustomerHome.php");
    return;
}
if (isset($_POST['update']) && isset($_POST['carname'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->InsertCarRequest($conn, $table, $carname, $carmodel, $sitcount, $carphoto, "Requested");
    $connection->CloseCon($conobj);
    header("Location: CustomerHome.php");
    return;
}
// Guardian: Make sure that pcar name is present
if (!isset($_GET['carname'])) {
    $_SESSION['error'] = "Missing car name";
    header('Location: CustomerHome.php');
    return;
}
$name = $_GET['carname'];
$connection = new db();
$conobj = $connection->OpenCon();

$userQuery = $connection->ShowRequestedCar($conobj, "Car", $name);

if ($userQuery->num_rows > 0) {

    while ($row = $userQuery->fetch_assoc()) {
        $carname = $row['carname'];
        $carmodel = $row['carmodel'];
        $sitcount = $row['sitcount'];
        $availablity = $row['availability'];
        $carphoto = $row['carphoto'];
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
        <h2>Car Request</h2>
    </div>

    <nav>

        <a href="CustomerHome.php">Home</a> |
        <a href="CustomerProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <p><img src="Pictures/home.jpg" alt="Home"></p>
    <!-- main -->
    <section class="pad-70 right">
        <div class="container">
            Car Name: <?php echo $carname; ?>
            <hr>
            Car Model <?php echo $carmodel; ?>
            <hr>
            Sit Count: <?php echo $sitcount; ?>
            <hr>
            Availablity: <?php echo $availablity; ?>
            <br>

        </div>
    </section>
    <section class="pad-70">
        <div class="container">
            <form action='' method='post'>
                <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Update" name="update" class="btn btn-lg btn-primary btn-submit">
                        <input type="submit" value="Cancel" name="cancel" class="btn btn-lg btn-primary btn-submit">
                    </div>
                </div>

            </form>
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