<?php
include('../Control/UserValidation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Customer Registation Form</h1>
    <?php echo "$msg"; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <table>

            <tr>
                <td>
                    Customer Full Name:
                </td>
                <td>
                    <input type="text" name="cname">
                </td>
            </tr>

            <tr>
                <td>
                    Customer Email:
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>

            <tr>
                <td>
                    Phone No:
                </td>
                <td>
                    <input type="text" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr>

            <tr>
                <td>
                    Confirm Password:
                </td>
                <td>
                    <input type="password" name="cpass">
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
