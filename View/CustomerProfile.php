<?php
session_start();
if(empty($_SESSION["email"]))
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

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
    <?php
    include('../View/MenuFooter.php');


    ?>
    <nav class="topnav">
        <a href="CustomerHome.php">Home</a> |
        <a href="CustomerProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <p> <img src="Pictures/customer.png" alt="Home">
    </p>
</body>

</html>
<?php
include('../Control/UserValidation.php');
$email = $_SESSION["email"];
echo "Customer Profile" . "<br>";
header('Content-Type: text/xml');
$connection = new db();
$conobj = $connection->OpenCon();
// $connection->ShowAll($conobj, "customer", $email);
$e = new SimpleXMLElement('<detils/>');
$userQuery = $connection->ShowAll($conobj, "customer", $email);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Phone</th></tr>";
    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {
        $add = $e->addChild('customer');
        $add = $e->addChild('name', $row[name]);
        $add = $e->addChild('email', $row[email]);
        $add = $e->addChild('address', $row[address]);
        $add = $e->addChild('phone', $row[phone]);
    }
    //  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone"] . "</td></tr>";

    echo "</table>";
} else {
    echo "0 results";
}
echo $e->asXML();
$connection->CloseCon($conobj);
?>
