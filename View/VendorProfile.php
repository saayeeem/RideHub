<?php

require('../control/ValidationLogin.php');
$email = $_SESSION["email"];

$connection = new db();
$conobj = $connection->OpenCon();
$connection->ShowAll($conobj, "Vendor", $email);

$userQuery = $connection->ShowAll($conobj, "Vendor", $email);

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
?>


<?php
if ($userQuery->num_rows > 0) {
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
        <h2>Vendor</h2>
    </div>

    <nav>

        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <p><img src="Pictures/vendor.jpg" alt="Home"></p>


    <section class="pad-70">
        <div class="container">
            <h2>Vendor Profile</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><a href="UpdateVendor.php">Update </a></td>
                </tr>
            </table>

            <?php
        } else {
            echo "No result found";
        }
        $connection->CloseCon($conobj);
            ?>
        </div>
    </section>
    <section class="pad-70 right">
        <div class="container">
            Name: <?php echo $name; ?>
            <hr>
            Email: <?php echo $email; ?>
            <hr>
            Address: <?php echo $address; ?>
            <hr>
            Phone Number: <?php echo $phone; ?>
            <br>
            <a href="UpdateVendor.php">Update </a>
        </div>
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
    <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
</body>

</html>