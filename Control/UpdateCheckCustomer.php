<?php
include('../model/db.php');


$error = "";

if (isset($_POST['update'])) {

    if (empty($_POST['name'] || $_POST['password'] || $_POST['address'] || $_POST['phone'])) {


        echo  "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $userQuery = $connection->UpdateCustomer($conobj, "customer", $_POST['name'], $_POST['pass'], $_POST['address'], $_POST['phone']);
        if ($userQuery == TRUE) {
            $_SESSION['success'] = "update successful";
        } else {
            $_SESSION['error'] = "could not update";
        }
        $connection->CloseCon($conobj);
    }
}