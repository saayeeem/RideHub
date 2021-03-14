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
            $connection->InsertCar($conobj, "car", $carname, $carm, $scount, $carphoto, "Yes");
            $connection->CloseCon($conobj);
        }
    }
    ?>
</body>

</html>