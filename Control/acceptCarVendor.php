<?php
include('../model/db.php');
session_start();
$req_id = $_POST['req_id'];

if ($req_id != "") {
    $connection = new db();
    $conobj = $connection->OpenCon();
    $connection->UpdateCarRequest($conobj, "requested_car", $req_id,  "Accepted");
}