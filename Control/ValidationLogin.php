<?php
session_start();
include('../model/db.php');
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $_SESSION["email"] = $email;
    $_SESSION["email"] = $pass;

    if (empty($email) || empty($pass)) {
        $msg = "All fields are required";
    } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {

        $msg = "Email address must contain @";
    } else if (!preg_match("/[0-9]/", $pass) || ((strlen($pass)) < 4)) {
        $msg = "Password Should be numeric and 4 words";
    } else if (isset($_SESSION["email"]) != $row["type"] && isset($_SESSION["pass"]) != $row["pass"]) {

        $msg = "Yahoo";


        // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
        //  $connection->InsertVendor($conobj,"vendor",$name, $email,$pass,'Vendor',$phone,$address,$tradel);
        //  $connection->CloseCon($conobj);
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $connection->ValidateLogin($conobj, "login", $email, $pass);
        $connection->CloseCon($conobj);
        $result = $conn->query("SELECT email,password,type FROM  $table WHERE email='$email' and password = '$password'");
        $row = mysqli_fetch_array($result);
    }
}