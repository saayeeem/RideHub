<?php
session_start();
include('../model/db.php');
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carname = $_REQUEST["carname"];



    $carm = $_REQUEST["carm"];
    $scount = $_REQUEST["scount"];





    if (empty($carname) || empty($carm) || empty($scount)) {
        $msg = "All fields are required";
    } else if (!preg_match("/[a-zA-Z]$/", $carname)) {
        $msg = "Valid Name is required.";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
        $connection->InsertCar($conobj, "car", $carname, $carm, $scount, $carphoto);
        $connection->CloseCon($conobj);
    }
}