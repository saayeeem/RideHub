<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/driver.css">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
  <?php
  include('../View/MenuFooter.php');


  ?>
=======
  
    <div class="header">
  <h1>Driver Profile</h1>
  </div>

  <div class="topnav">
>>>>>>> 7d62ea29d9e805eb67992ef711edc03420d55f1b
    <nav>

    <?php
    include('../View/MenuFooter.php');


    ?>

    <nav class="topnav">

        <a href="DriverHome.php">Home</a> |
        <a href="DriverProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>

    </nav>


   <div class="pic">
    <p><img src="Pictures/driver1.jpg" alt="Home"></p>
    </div>



    <?php

    require('../control/ValidationLogin.php');
    $email = $_SESSION["email"];
    echo "Driver Profile" . "<br>";

    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->ShowAll($conobj, "Driver", $email);

    $userQuery = $connection->ShowAll($conobj, "Driver", $email);

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
