<?php
include('../Control/validvendor.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Registar Vendor</title>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">
    <script src="../js/VendorValidation.js"></script>
</head>

<body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Vendor Registration</h2>
    </div>
    <nav>
        <a href="Home.php">Home</a> |
        <a href="Profile.php">My Profile</a>
    </nav>
    <!-- main -->
    <section class="pad-70">
        <div class="container log-form-pos">
            <h1>Vendor Registation Form</h1>
            <?php echo "$msg"; ?>
            <p id="error"></p>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
                <section class="pad-70">
                    <div class="form-row">
                        <div class="form-group">
                            Company Name:
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            Email:
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            Phone No:
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            Trade license No:
                            <input type="text" id="tradel" name="tradel" class="form-control">
                        </div>
                        <div class="form-group">
                            Password:
                            <input type="password" id="pass" name="pass" class="form-control">
                        </div>
                        <div class="form-group">
                            Confirm Password:
                            <input type="password" id="cpass" name="cpass" class="form-control">
                        </div>
                        <div class="form-group">
                            Address:
                            <input type="text" id="address" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" name="update" class="btn btn-lg btn-primary btn-submit">
                        </div>
                        <div class="form-group">
                            <input type="reset" value="reset" name="reset" class="btn btn-lg btn-primary btn-submit">
                        </div>
                    </div>

            </form>
        </div>
    </section>

    <!-- main  -->

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