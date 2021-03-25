<html>

<?php
session_start();
include('../model/db.php');
$connection = new db();
$conobj = $connection->OpenCon();
$connection->ShowAvailable($conobj, "Car", "Yes");
$userQuery = $connection->ShowAvailableCar($conobj, "Car", "Yes");

if ($userQuery->num_rows > 0) {

    while ($row = $userQuery->fetch_assoc()) {
        $Carname = $row['carname'];
        $Carmodel = $row['carmodel'];
        $Sitcount = $row['sitcount'];
        $availablity = $row['availability'];
    }
} else {
    echo "0 results";
}

$connection->CloseCon($conobj);
?>

<body>
    <nav>
        <a href="home.php">Home</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <h1>
        <center>Your Cars Available</center>
    </h1>

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Model</th>
            <th>Sit Count</th>
            <th>Action</th>
        </tr>
        <?php foreach ($row as $rows) : ?>
        <tr>
            <?php $row = $userQuery->fetch_assoc(); ?>
            <?php echo $row; ?> <td value="<?php echo $carname; ?>"> </td>
            <td value="<?php echo $carmodel; ?>"> </td>
            <td value="<?php echo $sitcount; ?>"></td>
            <td value="<?php echo $availability; ?>"></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>