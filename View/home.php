<html>

<body>

</body>

</html>

<?php
include('../control/ValidationLogin.php');

if (!isset($_SESSION['email'])) {

    echo "<h1><b>
            <center> Welcome to RideHub </center>
        </b> </h1>";
    echo "  <br>
    <br>";
    echo '<img src="Pictures/home.jpg" alt="Home" class="center">';
    echo "<br>
    <br>
    <br>";

    echo 'Returning User? <a href="login.php">Login Now!!</a>';
    echo "<br>
    <br>
    <br>";

    echo 'New User? <a href="RegisterHome.php">Explore Our World!!</a>';
} else {
    $_SESSION["email"] = $email;
    header('Location: login.php');
}
?>