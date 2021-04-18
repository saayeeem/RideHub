<?php
include('../model/db.php');


$error = "";

if (isset($_POST['update'])) {

    if (empty($_POST['name'])) {


        echo  "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $userQuery = $connection->UpdateVendor($conobj, "vendor", $_POST['name'], $_SESSION["email"], $_POST["pass"], $_POST['address'], $_POST['phone']);
        if ($userQuery == TRUE) {
            $error = "update successful";
        } else {
            $error = "could not update";
        }
        $connection->CloseCon($conobj);
    }
}