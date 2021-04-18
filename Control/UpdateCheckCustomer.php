<?php
include('../model/db.php');


$error = "";

if (isset($_POST['update'])) {

    if (empty($_POST['name'] || $_POST['password'] || $_POST['address'] || $_POST['phone'])) {


        echo  "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $userQuery = $connection->UpdateCustomer($conobj, "customer", $_POST['name'], $_SESSION['email'], $_POST['pass'], $_POST['address'], $_POST['phone']);
        if ($userQuery == TRUE) {
            $error = "update successful";
        } else {
            $error = "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
