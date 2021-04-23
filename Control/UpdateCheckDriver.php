<?php
include('../model/db.php');


$error = "";

if (isset($_POST['update'])) {

    if (empty($_POST['name'] || $_POST['pass'] ||  $_POST['phone'] || $_POST['address'] )) {


        echo  "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $userQuery = $connection->UpdateDriver($conobj, "driver", $_POST['name'], $_SESSION['email'], $_POST['pass'], $_POST['phone'],  $_POST['address']);
        if ($userQuery == TRUE) {
            $error = "update successful";
        } else {
            $error = "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
