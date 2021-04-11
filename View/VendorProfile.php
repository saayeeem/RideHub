<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
<<<<<<< HEAD
  <link rel="stylesheet" type="text/css" href="../css/vendorp.css">


    <div class="header">
  <h1>Vendor</h1>
  </div>

  <div class="topnav">
    <nav>
=======
    <?php
    include('../View/MenuFooter.php');


    ?>
    <nav class="topnav">
>>>>>>> 78ec5ac0c9a827ebe161c4e604a3cf211be10f97
        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
</div>
    <p><img src="Pictures/vendor.jpg" alt="Home"></p>
    <?php

    require('../control/ValidationLogin.php');
    $email = $_SESSION["email"];
    echo "Vendor Profile" . "<br>";

    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->ShowAll($conobj, "Vendor", $email);

    $userQuery = $connection->ShowAll($conobj, "Vendor", $email);

    if ($userQuery->num_rows > 0) {
        echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Phone</th><th>Action</th></tr>";
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
    <a href="UpdateVendor.php">Update </a>

</body>

</html>
