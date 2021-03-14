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
        <a href="AdminHome.php">Home</a> |

    </nav>
    <p> <img src="Pictures/customer.png" alt="Home">
    </p>

    <?php
    include('../Control/UserValidation.php');
    
    echo "Customer Profile" . "<br>";

    $connection = new db();
    $conobj = $connection->OpenCon();
    // $connection->ShowAll($conobj, "customer", $email);

    $userQuery = $connection->Show($conobj, "customer");

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
</body>

</html>
