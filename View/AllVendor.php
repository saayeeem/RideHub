
<?php
session_start();
if(empty($_SESSION["email"]))
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="AdminHome.php">Home</a> |
    </nav>
    <p><img src="Pictures/vendor.jpg" alt="Home"></p>
    <?php

    require('../control/ValidationLogin.php');

    echo "Vendor Profile" . "<br>";

    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->Show($conobj, "Vendor");

    $userQuery = $connection->Show($conobj, "Vendor");

    if ($userQuery->num_rows > 0) {

        echo "<table><tr><th>Name</th><th>Email</th><th>Password</th><th>Type</th><th>Phone</th><th>Address</th><th>TradeLicense</th><th>Action</th></tr>";
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            echo "<tr><td>";
            echo (htmlentities($row['name']));
            echo ("</td><td>");
            echo (htmlentities($row['email']));
            echo ("</td><td>");
            echo (htmlentities($row['password']));
            echo ("</td><td>");
            echo (htmlentities($row['type']));
            echo ("</td><td>");
            echo (htmlentities($row['phone']));
            echo ("</td><td>");
            echo (htmlentities($row['address']));
            echo ("</td><td>");
            echo (htmlentities($row['tradelicense']));
            echo ("</td><td>");
            echo ('<a href="caredit.php?user_id=' . $row['vid'] . '">Edit</a> / ');
            echo ('<a href="cardelete.php?user_id=' . $row['vid'] . '">Delete</a>');
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
