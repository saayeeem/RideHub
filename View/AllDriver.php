<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>All Drivers</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>

    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>All Driver Profile</h2>
    </div>

    <nav>

        <a href="AdminHome.php">Home</a> |
        <a href="AdminProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <p> <img src="Pictures/driver1.jpg" alt="Home">
    </p>

    <!-- main -->
    <section class="pad-70 right">
        <div class="container">
            <?php
            include('../Control/validdriver.php');

            $connection = new db();
            $conobj = $connection->OpenCon();
            // $connection->ShowAll($conobj, "customer", $email);

            $userQuery = $connection->Show($conobj, "driver");

            if ($userQuery->num_rows > 0) {
                echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Phone</th><th>Action</th></tr>";
                // output data of each row
                while ($row = $userQuery->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone"] . "</td><td>" .
                    '<a class="btn btn-sm btn-danger" href="DeleteDriver.php?driver_id=' . $row["driver_id"] . '">Delete</a>' . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $connection->CloseCon($conobj);
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