<?php
include('../Control/ValidationLogin.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Vendor Profile Update</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">


</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Login</h2>
    </div>
    <nav class="topnav">
        <a href="home.php">Home</a>
        <a href="home.php">About Us</a>
        <a href="home.php">Profile</a>
        <a href="home.php">Cars</a>

    </nav>

    <img src="Pictures/login1.png" alt="login">
    <section class="pad-70">
        <div class="container">
            <h1>Login</h1>
            <?php echo "$msg"; ?>
            <p id="error">
            </p>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateLoginForm()" method="post">
                <div class="form-row">
                    <div class="form-group">
                        Email:
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        Password:
                        <input type="text" name="pass" id="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="type">Choose a type:</label>

                        <select name="type" id="type">
                            <option value="admin">Admin</option>
                            <option value="vendor">Vendor</option>
                            <option value="customer">Customer</option>
                            <option value="driver">Driver</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="loginButton" value="Login" name="login"
                            class="btn btn-lg btn-primary btn-submit">
                    </div>
                </div>

            </form>
            <h2 id="newUser">New User??</h2>
            <a class="div" href="RegisterHome.php">Register Now!!</a>
        </div>
    </section>
    <!-- footer  -->
    <footer>
        <div class="container footer-wrap">
            <div class="footer-left">
                <ul class="footer-menu">
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Privacy</a></li>
                </ul>

            </div>
            <div class="footer-right">
                <ul class="footer-menu">
                    <li><a href="">Follow</a></li>
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </footer>
    <!-- footer  -->
    <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
</body>

</html>