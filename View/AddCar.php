<?php
include('../Control/ValidateCar.php');
?>



<html>



<body>




    <h1>
        <center>Car Add</center>
    </h1>





    <?php echo "$msg"; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype='multipart/form-data'>
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
                    <input type="number" name="scount">



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
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">




                </td>
            </tr>




        </table>
    </form>
</body>



</html>