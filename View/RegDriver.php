<?php
include('../Control/validdriver.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900&display=swap"
        rel="stylesheet">
    <script src="../js/DriverValidation.js"></script>
    <title>Driver Registration</title>
</head>



    <body>
    <div class="header">
        <h1>Welcome To RideHub</h1>
        <h2>Driver Registration</h2>
    </div>


        <nav class="topnav">
            <a href="DriverHome.php">Home</a> |
            <a href="DriverProfile.php">My Profile</a> |
            <a href="logout.php">Log Out</a>
        </nav>

 <section class="pad-70 form-pos">
  <div class="container log-form-pos">
            <h1>Driver Registration Form</h1>
            <?php
            // Note triple not equals and think how badly double
            // not equals would work here...
            
            echo "$msg";
            ?>
            <p id="error">
            </p>
            <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
                <div class="form-row">
                    <div class="form-group">
                       Driver Name:
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        Email:
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        Phone No:
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        Driving license No:
                        <input type="text" name="driving1" class="form-control">
                    </div>

                    <div class="form-group">
                        Password:
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        Confirm Password:
                        <input type="password" name="cpass" class="form-control">
                    </div>
                    <div class="form-group">
                        Date of Birth:
                        <input type="date" name="birthday" class="form-control">
                    </div>
                    <div class="form-group">
                        Address:
                        <input type="text" name="address" class="form-control">
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
