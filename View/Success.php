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
    include('../controller/UserValidation.php');
    echo "Customer Profile" . "<br>";
    // echo "ID: " . $_SESSION["eid"] . "<br>";
    echo "Name: " . $_SESSION["cname"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
    echo "Birthday: " . $_SESSION["birthday"] . "<br>";
    echo "Phone No.: " . $_SESSION["phone"] . "<br>";
    echo "Password: " . $_SESSION["pass"] . "<br>";
    echo "Address: " . $_SESSION["address"] . "<br>";
    ?>
    <a href="UserRegistration.php">Back to Registration Form</a>
</body>

</html>