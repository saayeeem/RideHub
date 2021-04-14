<?php
session_start();
if(empty($_SESSION["email"]))
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<?php
include('../Control/ValidateCar.php');
?>

<html>

<body>
    <nav>
        <a href="VendorHome.php">Home</a> |
        <a href="VendorProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>

    <h1>
        <center>Car Add</center>
    </h1>
    <p> <img src="Pictures/car_mg.gif" alt="Home">
    </p>


    <?php echo "$msg"; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <table>

            <tr>
                <td>
                    Car Name:
                </td>
                <td>
                    <input type="text" name="carname">

                </td>
            </tr>

            <tr>
                <td>
                    Car Model:
                </td>
                <td>
                    <input type="text" name="carm">

                </td>
            </tr>

            <tr>
                <td>
                    Sit Count:
                </td>
                <td>
                    <input type="text" name="scount">

                </td>
            </tr>
            <tr>
                <td>
                    Upload Car Photo:
                </td>
                <td>
                    <input type="file" name="carphoto">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">


                </td>
            </tr>


        </table>
    </form>
</body>

</html>
