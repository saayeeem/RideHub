<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: ../control/login.php"); // Redirecting To Home Page
}

include('../Control/ValidateCar.php');

$car_id = $_GET["car_id"];

$connection = new db();
$conobj = $connection->OpenCon();
// $connection->ShowAll($conobj, "car", $email);
//$connection->UpdateVendor($conobj, "Vendor", $email);

$userQuery = $connection->Show($conobj, "car", $car_id);
if ($userQuery->num_rows > 0) {

    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {
        $name = $row["carname"];
        $model = $row["carmodel"];
        $sitcount = $row["sitcount"];
        $availability = $row["availability"];
        $fare = $row["fareperh"];
    }
} else {
    echo "0 results";
}
if (isset($_POST['update'])) {

    if (empty($_POST['carname'] || $_POST['carm'] || $_POST['scount'] || $_POST['fare'])) {


        echo "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $userQuery = $connection->UpdateCarAll(
            $conobj,
            "car",
            $car_id,
            $_POST['carname'],
            $_POST['carm'],
            $_POST['scount'],
            $_POST['availability'],
            $_POST['fare']
        );
        if ($userQuery == TRUE) {
            $_SESSION['success'] = "update successful";
            header("Location: ../view/AdminHome.php");
            return;
        } else {
            $_SESSION['error'] = "could not update";
        }
        $connection->CloseCon($conobj);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>car Profile Update</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">
    <script src="../js/AddCarValidation.js"></script>


</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Update car</h2>
    </div>

    <nav>

        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <!-- main  -->
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
    <section class="pad-70">
        <div class="container">
            <form action='' method='post'>
                <div class="form-row">
                    <div class="form-group">
                        Car Name:
                        <input type="text" name="carname" value="<?php echo $name; ?>" class="form-control">
                    </div>
                    <div class="form-group">

                        Model:
                        <input type="text" name="carm" value="<?php echo $model; ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        Sit Count:
                        <input type="text" name="scount" value="<?php echo $sitcount; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        Availability:
                        <input type="text" name="availability" value="<?php echo $availability; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        Fare Per Hour:
                        <input type="text" name="fare" value="<?php echo $fare; ?>" class="form-control">
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