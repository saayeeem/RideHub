<?php
include('../Control/ValidationLogin.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <script src="../js/UserValidation.js"></script>
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

    <div id="page-container">
        <div id="content-wrap">
            <div class="bg" id="center">
                <?php echo "$msg"; ?>
                <p id="error">
                </p>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateLoginForm()" method="post">
                    <img src="Pictures/login1.png" alt="login" class="center">
                    <h1>Login</h1>
                    <table>
                        <tr>
                            <td> Email: </td>
                            <td><input type="text" id="email" name="email">
                                <br>
                        <tr>
                            <td> Password: </td>
                            <td><input type="password" id="pass" name="pass">
                                <br>
                        <tr>
                            <label for="type">Choose a type:</label>

                            <select name="type" id="type">
                                <option value="admin">Admin</option>
                                <option value="vendor">Vendor</option>
                                <option value="customer">Customer</option>
                                <option value="driver">Driver</option>
                            </select>
                        </tr>
                    </table>



                    <input type="submit" value="LOGIN">

                    <br>
                    <br>
                    <h3>New User??</h3>
                    <a class="div" href="RegisterHome.php">Register Now!!</a>
            </div>
        </div>



        <div class="footer">
            <p>Footer</p>
        </div>
</body>

</html>