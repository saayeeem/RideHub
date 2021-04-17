<?php
include('../Control/validvendor.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/VendorValidation.js"></script>
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
    <div id="page-container">
        <div id="content-wrap">
            <div class="bg" id="center">
                <h1>Vendor Registation Form</h1>
                <?php echo "$msg"; ?>
                <p id="error"></p>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
     <section class="pad-70">

        <div class="container">
            <form action='' method='post'>
                <div class="form-row">
                    <div class="form-group">
                      Company Name:
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        Email:
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        Phone No:
                        <input type="text" name="phone"  class="form-control">
                    </div>
                    <div class="form-group">
                        Trade license No:
                        <input type="text" name="trade1" class="form-control">
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
            </div>
        </div>
    </div>


</body>

</html>