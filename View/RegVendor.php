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
        <h2>Vendor Home</h2>
    </div>
    <nav>
        <a href="Home.php">Home</a> |
        <a href="Profile.php">My Profile</a>
    </nav>

    <!-- main  -->
    <section class="pad-70">
        <div class="container">
            <h1>Vendor Registation Form</h1>
            <?php echo "$msg"; ?>
            <p id="error"></p>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
                <table>
                    <tr>
                        <td>
                            Company name:
                        </td>
                        <td>
                            <input type="text" id="name" name="name">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" id="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone No:
                        </td>
                        <td>
                            <input type="text" id="phone" name="phone">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Trade license No:
                        </td>
                        <td>
                            <input type="text" id="tradel" name="tradel">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" id="pass" name="pass">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" id="cpass" name="cnpass">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <textarea id="address" name="address" rows="3" cols="30"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>


                </table>
            </form>
        </div>
    </section>

    <!-- main -->
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