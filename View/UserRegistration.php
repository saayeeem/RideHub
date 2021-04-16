

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
        <a href="#"></a>
    </nav>

    <h1>Customer Registration Form</h1>
    <?php echo "$msg"; ?>
    <p id="error">
    <form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="return validateUserForm()" method="post">
        <table>

            <tr>
                <td>
                    Name:
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
                    <input type="password" id="cpass" name="cpass">
                </td>
            </tr>

            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <input type="date" id="birthday" name="birthday">
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
