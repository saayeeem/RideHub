<?php
include('../Control/validdriver.php');
?>

<html>

<body>

    <body>
        <?php
        include('../View/MenuFooter.php');


        ?>
        <nav class="topnav">
            <a href="DriverHome.php">Home</a> |
            <a href="DriverProfile.php">My Profile</a> |
            <a href="logout.php">Log Out</a>
        </nav>
        <h1>
            <script src="../js/DriverValidation.js"></script>

            <center>Driver Registration Form</center>
        </h1>

        <img src="Pictures/driver.jpg" alt="Home" class="center">
        <br>
        <br>

        <?php echo "$msg"; ?>
        <p id="error">

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
            <table>

                <tr>
                    <td>
                        Driver Name:
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
                        <input type="email" id="email" name="email">

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
                        Driving license No:
                    </td>
                    <td>
                        <input type="text" id="dlicense" name="drivingl">

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
                        Date of Birth:
                    </td>
                    <td>
                        <input type="date" id="birthday" name="dob">
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
    </body>

</html>