<?php
session_start();
include('../model/validvendor.php');
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
    $msg = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $cuname = $_REQUEST["cuname"];
        $name = $_REQUEST["cname"];
        $email = $_REQUEST["email"];
        $phone = $_REQUEST["phone"];
        $pass = $_REQUEST["pass"];
        $cpass = $_REQUEST["cpass"];
        $birthday = $_REQUEST["birthday"];
        $address = $_REQUEST["address"];


        if (empty($name) || empty($email) || empty($phone) || empty($pass) || empty($cpass) || empty($address)) {
            $msg = "All fields are required";
        } else if (!preg_match("/[a-zA-Z]$/", $name)) {
            $msg = "Customer name Should be alpha numeric";
        } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $msg = "Email address must contain @";
        } else if (!preg_match("/[0-9]/", $phone)) {
            $msg = "Phone Number will only allow numeric values";
        } else if ($pass != $cpass) {
            $msg = "you have to write both password correctly";
        } else if (!isset($_REQUEST["birthday"])) {
            $msg = "you have to select birthday";
        } else {

            // $_SESSION["eid"] = $id;

            header("location: Success.php");
        }
    }
    ?>
</body>

</html>
