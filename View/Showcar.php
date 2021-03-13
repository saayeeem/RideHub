<html>

<body>
    <nav>
        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <h1>Your Cars</h1>

    <?php
    session_start();
    include('../model/db.php');
    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->ShowCar($conobj, "Car");

    $userQuery = $connection->Show($conobj, "Car");

    if ($userQuery->num_rows > 0) {

        echo "<table><tr><th>Name</th><th>Model</th><th>Sit Count</th></tr>";
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            echo "<tr><td>" . $row["carname"] . "</td><td>" . $row["carmodel"] . "</td><td>" . $row["sitcount"] . "</td><td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $connection->CloseCon($conobj);
    ?>
</body>

</html>