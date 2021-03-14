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
    <p><img src="Pictures/vendor.jpg" alt="Home"></p>
    <?php

    require('../control/ValidationLogin.php');

    echo "Vendor Profile" . "<br>";

    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->Show($conobj, "Vendor");

    $userQuery = $connection->Show($conobj, "Vendor");

    if ($userQuery->num_rows > 0) {
        echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Phone</th></tr>";
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $connection->CloseCon($conobj);
    ?>
</body>

</html>
