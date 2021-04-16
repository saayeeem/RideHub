<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Available Car</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>


    <nav>
        <a href="CustomerHome.php">Home</a> |
        <a href="CustomerProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <h1>
        Your Cars Available
    </h1>
    <!-- main -->
    <section class="pad-70 right">
        <div class="container">
            <?php
            session_start();
            include('../model/db.php');
            $connection = new db();
            $conobj = $connection->OpenCon();
            $result = $connection->ShowAvailable($conobj, "Car", "Yes");
            $userQuery = $connection->ShowAvailableCar($conobj, "Car", "Yes");

            if ($userQuery->num_rows > 0) {

                while ($row = $userQuery->fetch_assoc()) {
                    $Carname = $row['carname'];
                    $Carmodel = $row['carmodel'];
                    $Sitcount = $row['sitcount'];
                    $availablity = $row['availability'];
                    echo "<table><tr><th>Car Name</th><th>Model</th><th>Sit Count</th><th>Availability</th><th>Action</th></tr>";
                    // output data of each row
                    while ($row = $userQuery->fetch_assoc()) {
                        echo "<tr><td>" . $row["carname"] . "</td><td>" . $row["carmodel"] . "</td><td>" . $row["sitcount"] . "</td><td>" . $row["availability"] . "</td><td>" . '<a href="AdminHome.php">Request</a>' . "</td></tr>";
                    }
                    echo "</table>";
                }
            } else {
                echo "0 results";
            }


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