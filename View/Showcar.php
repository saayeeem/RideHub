<html>

<body>

    <?php
    session_start();
    include('../model/db.php');
    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->ShowCar($conobj, "Car");

    $userQuery = $connection->ShowCar($conobj, "Car");

    if ($userQuery->num_rows > 0) {

        echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Photo</th></tr>";
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            echo "<tr><td>" . $row["carname"] . "</td><td>" . $row["carmodel"] . "</td><td>" . $row["sitcount"] . "</td><td>" . base64_encode($row["carphoto"]) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $connection->CloseCon($conobj);
    ?>



</body>

</html>