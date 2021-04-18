<?php
session_start();
include('../model/db.php');


$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $type = $_REQUEST["type"];




    if (empty($email) || empty($pass) || empty($type)) {
        $error = "All fields are required";
    } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {

        $error = "Email address must contain @";
    } else if (!preg_match("/[0-9]/", $pass) || ((strlen($pass)) < 4)) {
        $error = "Password Should be numeric and 4 words";
    } else {
        if ($type == "Admin") {
            header('Location: AdminHome.php');
        } else if ($type == "Vendor") {
            header('Location: VendorHome.php');
        } else if ($type == "Customer") {
            header('Location: CustomerHome.php');
        } else if ($type == "Driver") {
            header('Location: DriverHome.php');
        } else {
            $error = "Type is invalid";
        }
        $_SESSION["email"] = $email;
        $_SESSION["pass"] = $pass;
        $_SESSION["type"] = $type;
        $connection = new db();
        $conobj = $connection->OpenCon();
        $connection->ValidateLogin($conobj, "login", $email, $pass, $type);

        $connection->CloseCon($conobj);
    }
}