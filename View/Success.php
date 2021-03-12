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
    include('../control/Validation.php');
    echo "Output" . "<br>";
    echo "ID: ".$_SESSION["eid"] . "<br>";
    echo "Name: ".$_SESSION["ename"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
    echo "Birthday: " . $_SESSION["birthday"] . "<br>";
    echo "State: " . $_SESSION["state"] . "<br>";
    echo "Street: " . $_SESSION["street"] . "<br>";
    echo "Post Code: " . $_SESSION["pcode"] . "<br>";
    echo "Country: " . $_SESSION["country"]. "<br>";
    echo "Profile Picture Succesfully Uploaded. Type is: ".$_SESSION["filetoupload"] . "<br>";
    ?>
    <a href="RegistrationForm.php">Back to Registration Form</a>
</body>

</html>