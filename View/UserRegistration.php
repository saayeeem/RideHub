<?php
include('../Control/UserValidation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/UserValidation.js"></script>
    <title>User Registration</title>
</head>

<body>
    <?php
    include('../View/MenuFooter.php');


    ?>
    <nav class="topnav">
        <a href="Home.php">Home</a> |
        <a href="Profile.php">My Profile</a> |

    </nav>

    <h1>Customer Registration Form</h1>
    <?php echo "$msg"; ?>
    <p id="error">
    </p>

    <section class="pad-70">
        <div class="container">
            <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
                <div class="form-row">
                    <div class="form-group">
                        Name:
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
    </form>


</body>

</html>