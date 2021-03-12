<?php
include('../control/Validation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Registration Page</title>
</head>

<body>
    <h1>Employee Registration Form</h1>
    <?php echo "$msg"; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Employee ID:
                </td>
                <td>
                    <input type="text" name="eid">
                </td>
            </tr>
            <tr>
                <td>
                    Employee Name:
                </td>
                <td>
                    <input type="text" name="ename">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email">
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
                    Street:
                </td>
                <td>
                    <input type="text" name="street">
                </td>
            </tr>
            <tr>
                <td>
                    State:
                </td>
                <td>
                    <input type="text" name="state">
                </td>
            </tr>
            <tr>
                <td>
                    Post Code:
                </td>
                <td>
                    <input type="text" name="pcode">
                </td>
            </tr>
            <tr>
                <td>
                    Choose a Country:
                </td>
                <td>
                    <select name="country">
                        <option value="select">Please Select Country</option>
                        <option id = "bd" value="Bangladesh">Bangladesh</option>
                        <option id = "in" value="India">India</option>
                        <option id= "pk" value="Pakistan">Pakistan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Profile Picture:
                </td>
                <td>
                    <input type="file" name="filetoupload" id="filetoupload">
                </td>
            </tr>
            <tr>
                <td>
                    <input  type="submit" value="Submit">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>