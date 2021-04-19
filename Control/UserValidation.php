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
    $error = "";

    include('../model/db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $phone = $_REQUEST["phone"];
        $pass = $_REQUEST["pass"];
        $cpass = $_REQUEST["cpass"];
        $birthday = $_REQUEST["birthday"];
        $address = $_REQUEST["address"];

        if (empty($name) || empty($email) || empty($phone) || empty($pass) || empty($cpass) || empty($address)) {
            $error = "All fields are required";
        } else if (!preg_match("/[a-zA-Z]$/", $name)) {
            $error = "Customer name Should be alpha numeric";
        } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $error = "Email address must contain @";
        } else if (!preg_match("/[0-9]/", $phone)) {
            $error = "Phone Number will only allow numeric values";
        } else if (!preg_match("/[0-9]/", $pass) || ((strlen($pass)) < 6)) {
            $error = "Password Should be numeric and 4 words";
        } else if ($pass != $cpass) {
            $error = "you have to write both password correctly";
        } else if (!isset($_REQUEST["birthday"])) {
            $error = "you have to select birthday";
        } else {

            // $_SESSION["eid"] = $id;
            $connection = new db();
            $conobj = $connection->OpenCon();

            // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
            $connection->InsertCustomer($conobj, "customer", $name, $email, $pass, 'customer', $phone, $birthday, $address);
            $connection->InsertLogin($conobj, "login", $email, $pass, 'customer');
            $connection->CloseCon($conobj);
        }
    }
    ?>
</body>

</html>