<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include('../model/db.php');
    $error = "";
    $name = "";
    $connection = new db();
    $conobj = $connection->OpenCon();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $carname = $_REQUEST["carname"];
        $carm = $_REQUEST["carm"];
        $scount = $_REQUEST["scount"];

     $carphoto = $_FILES["carphoto"];
       //   $file = $_FILES["carphoto"];

        $from = $_REQUEST["from"];
        $to = $_REQUEST["to"];

        // $carphoto = $_REQUEST["carphoto"];
        // $file = $_FILES["carphoto"];

        $fare = $_REQUEST["fare"];
  $from = $_REQUEST["from"];
    $to = $_REQUEST["to"];
        if (empty($carname) || empty($carm) || empty($scount) || empty($from) || empty($to)) {
            $error = "All fields are required";
        } else if (!preg_match("/[a-zA-Z]$/", $carname)) {
            $error = "Valid Name is required.";
        } else if (!preg_match("/[0-9]/", $carm)) {
            $error = "Valid car model number is required.";
        } else if (!preg_match("/[0-9]/", $scount)) {
            $error = "seat count should be numeric";
        } else if (strlen($scount) > 1) {
            $error = "seat count should be not more then 1";
        } else {
            $connection = new db();
            $conobj = $connection->OpenCon();
            // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");

            $connection->InsertCar($conobj, "car", $carname, $carm, $scount, $carphoto, "Yes", $fare,$from , $to);

            $connection->CloseCon($conobj);
        }
    }
    ?>
</body>

</html>
