<?php
include('../Control/ValidationLogin.php');


?>

<html>

<body>
    <nav>
        <a href="home.php">Home</a>
    </nav>

    <img src="Pictures/login1.png" alt="login" class="center">

    <?php echo "$msg"; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <table>
            <tr>
                <td> Email: </td>
                <td><input type="text" name="email">
                    <br>
            <tr>
                <td> Password: </td>
                <td><input type="password" name="pass">
                    <br>
            <tr>
            <label for="type">Choose a type:</label>

<select name="type" id="type">
  <option value="admin">Admin</option>
  <option value="vendor">Vendor</option>
  <option value="customer">Customer</option>
  <option value="driver">Driver</option>
</select>
            </tr>
        </table>



        <input type="submit" value="LOGIN">

        <br>
        <br>
        New User??

        <a href="RegisterHome.php">Register Now!!</a>

</body>

</html>
