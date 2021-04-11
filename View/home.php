<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <p>Resize the browser window to see the responsive effect.</p>
    </div>
    <nav class="topnav">
        <a href="home.php">Home</a>
        <a href="home.php">About Us</a>
        <a href="home.php">Profile</a>
        <a href="home.php">Cars</a>
    </nav>
    <p><img src="Pictures/home.jpg" alt="Home" class="center"></p>
    <div id="page-container">
        <div id="content-wrap">
            <div class="bg" id="center">

                <h2>Returning User?</h2>

                <a class="div" href="login.php">Login Now!!</a>
                <br>

                <h2>Explore our World</h2>
                <a class="div" href=" RegisterHome.php">Register with us</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>
    <?php
    include('../control/ValidationLogin.php');
    if ($_SESSION["type"] == "vendor") {
        $_SESSION["type"] = $type;
        header('Location: VendorHome.php');
    } else if ($_SESSION["type"] == "customer") {
        $_SESSION["type"] = $type;
        header('Location: CustomerHome.php');
    } else if ($_SESSION["type"] == "driver") {
        $_SESSION["type"] = $type;
        header('Location: DriverHome.php');
    } else if ($_SESSION["type"] == "Admin") {
        $_SESSION["type"] = $type;
        header('Location: AdminHome.php');
    }
    ?>


    <body>

    </body>

</html>