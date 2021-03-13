<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="home.php">Home</a> |
        <a href="CustomerHome.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <?php
    include('../Control/UserValidation.php');
    $email = $_SESSION["email"];
    echo "Customer Profile" . "<br>";
    // echo "ID: " . $_SESSION["eid"] . "<br>";
    // echo "Name: " . $_SESSION["cname"] . "<br>";
    // echo "Email: " . $_SESSION["email"] . "<br>";
    // echo "Birthday: " . $_SESSION["birthday"] . "<br>";
    // echo "Phone No.: " . $_SESSION["phone"] . "<br>";
    // echo "Password: " . $_SESSION["pass"] . "<br>";
    // echo "Address: " . $_SESSION["address"] . "<br>";

    $connection = new db();
    $conobj = $connection->OpenCon();
    // $connection->ShowAll($conobj, "customer", $email);

    $userQuery = $connection->ShowAll($conobj, "customer", $email);

    if ($userQuery->num_rows > 0) {
        echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Phone</th></tr>";
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $connection->CloseCon($conobj);
    ?>
    <a href="UserRegistration.php">Back to Registration Form</a><br>
    <a href="logout.php">Log Out</a>
</body>

</html>