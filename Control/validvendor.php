<?php
session_start();
include('../model/db.php');

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $tradel = $_REQUEST["tradel"];
    $pass = $_REQUEST["pass"];
    $cnpass = $_REQUEST["cpass"];
    $address = $_REQUEST["address"];

    if (empty($name) || empty($email) || empty($phone) || empty($tradel) || empty($pass) ||  empty($address)) {
        $error = "All fields are required";
    } else if (!preg_match("/[a-zA-Z]/", $name)) {
        $error = "Valid Name is required.";
    } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {

        $error = "Email address must contain @";
    } else if (!preg_match("/[0-9]/", $phone)) {
        $error = "Valid Phone is required.";
    } else if (!preg_match("/[0-9]/", $tradel)) {
        $error = "Valid Trade License Number is required and numeric.";
    } else if (!preg_match("/[0-9]/", $pass) || ((strlen($pass)) < 6)) {
        $error = "Password Should be numeric and 6 words";
    } else if ($pass != $cnpass) {

        $error = "Password Doesn't match";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
        $connection->InsertVendor($conobj, "vendor", $name, $email, $pass, 'Vendor', $phone, $address, $tradel);
        $connection->InsertLogin($conobj, "login", $name, $email, $pass, 'Vendor');

        $connection->CloseCon($conobj);
    }
}