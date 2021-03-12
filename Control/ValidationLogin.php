<?php
session_start();
include('../model/db.php');

$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];


    if (empty($email) || empty($pass)) {
        $msg = "All fields are required";
    } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {

        $msg = "Email address must contain @";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();



        // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
        //  $connection->InsertVendor($conobj,"vendor",$name, $email,$pass,'Vendor',$phone,$address,$tradel);
        //  $connection->CloseCon($conobj);
    }
}