<html>

<body>
    <nav>
        <a href="home.php">Home</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <h1>
        <center>Your Cars Available</center>
    </h1>


    <?php
    session_start();
    include('../model/db.php');
    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->ShowCar($conobj, "Car");

    $userQuery = $connection->Show($conobj, "Car");

    if ($userQuery->num_rows > 0) {

        echo "<table><tr><th>Name</th><th>Model</th><th>Sit Count</th><th>Availability</th><th>Action</th></tr>";
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            echo "<tr><td>";
            echo (htmlentities($row['carname']));
            echo ("</td><td>");
            echo (htmlentities($row['carmodel']));
            echo ("</td><td>");
            echo (htmlentities($row['sitcount']));
            echo ("</td><td>");
            echo (htmlentities($row['availability']));
            echo ("</td><td>");
            echo ('<a href="caredit.php?user_id=' . $row['carmodel'] . '">Edit</a> / ');
            echo ('<a href="cardelete.php?user_id=' . $row['carmodel'] . '">Delete</a>');
            echo ("</td></tr>\n");
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $connection->CloseCon($conobj);
    ?>
</body>

</html>
