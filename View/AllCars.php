<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Available Car</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap" rel="stylesheet">


</head>

<body>


    <nav>
        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <!-- main -->
    <section class="pad-70 right">
        <div class="container">
            <h1>
                Your Cars Available
            </h1>
            <?php
            session_start();
            include('../model/db.php');
            $connection = new db();
            $conobj = $connection->OpenCon();
            $userQuery = $connection->Show($conobj, "car");

            if ($userQuery->num_rows > 0) {
                echo "<table><tr><th>Name</th><th>Model</th><th>Seat Count</th><th>Fare Per Hour</th><th>Action</th></tr>";
                // output data of each row
                while ($row = $userQuery->fetch_assoc()) {
                    echo "<tr><td>" . $row["carname"] . "</td><td>" . $row["carmodel"] . "</td><td>" . $row["sitcount"] . "</td><td>" . $row["fareperh"] . "</td><td>" . '<a href="UpdateVendor.php">Edit </a>/' .
                        '<a href="DeleteCar.php?car_id=' . $row["car_id"] . '">Delete</a>' . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $connection->CloseCon($conobj);
            ?>


            ?>
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
</body>

</html>