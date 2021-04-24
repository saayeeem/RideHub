<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <title>Customer Home</title>
</head>


<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2> Requested Cars</h2>
    </div>
    <nav>
        <a href="CustomerHome.php">Home</a> |
        <a href="CustomerProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <!-- main  -->
    <section class="pad-70">
        <div class="container">
            <?php
            session_start();
            include('../model/db.php');
            $connection = new db();
            $conobj = $connection->OpenCon();
            $userQuery = $connection->Show($conobj, "requested_car");
            if ($userQuery->num_rows > 0) {
                echo "<table><tr><th>Name</th><th>Model</th><th>Seat Count</th><th>Fare/Hour</th><th>Status</th></tr>";
                // output data of each row
                while ($row = $userQuery->fetch_assoc()) {
                    echo "<tr><td>" . $row["carname"] . "</td><td>" . $row["carmodel"] . "</td><td>" . $row["sitcount"] . "</td><td>" . $row["fareperh"] . "</td><td>" . $row["status"] . "</td><td>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $connection->CloseCon($conobj);
            ?>
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