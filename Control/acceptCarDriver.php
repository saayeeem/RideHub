<?php
include('../model/db.php');
session_start();
$req_id = $_POST['req_id'];

if ($req_id != "") {
    $connection = new db();
    $conobj = $connection->OpenCon();
    $driver_id = $_SESSION["driver_id"];
    $connection->UpdateCarDriverRequest($conobj, "requested_car", $req_id,$driver_id, "Accepted");
}