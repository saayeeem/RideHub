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
    } else if (!preg_match("/[0-9]/", $pass) || ((strlen($pass)) < 6)) {
        $error = "Password Should be numeric and 6 words";
    } else {


        $connection = new db();
        $conobj = $connection->OpenCon();
        $userQuery = $connection->ValidateLogin($conobj, "login", $email, $pass, $type);

        if ($userQuery->num_rows > 0) {
            $row = mysqli_fetch_assoc($userQuery);
            $_SESSION["name"] = $row['name'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["pass"] = $row['password'];
            $_SESSION["type"] = $row['type'];
        } else {
            $error = "Username or Password or type  is invalid";
        }
        $connection->CloseCon($conobj);
    }
}