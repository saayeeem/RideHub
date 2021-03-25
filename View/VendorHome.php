<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <?php
    include('../View/MenuFooter.php');


    ?>
    <nav class="topnav">
        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <p><img src="Pictures/vendor1.jpg" alt="Home"></p>
    <div id="page-container">
        <div id="content-wrap">
            <div class="bg" id="center">

                <a class="div" href="RegDriver.php">Add Driver</a>

                <a class="div" href="AddCar.php">Add New Car</a>
                <a class="div" href="Showcar.php">Show Car</a>
                <a class="div" href="RequestedCar.php">Requested Car</a>
            </div>
        </div>
    </div>

</body>

</html>