<html>
<?php
include('../View/MenuFooter.php');


?>


<body>


    <nav class="topnav">
        <a href="CustomerHome.php">Home</a> |
        <a href="CustomerProfile.php">My Profile</a> |
        <a href="logout.php">Log Out</a>
    </nav>
    <h1>
        <center>Your Cars Available</center>
    </h1>
    <?php
    session_start();
    include('../model/db.php');
    $connection = new db();
    $conobj = $connection->OpenCon();
    $result = $connection->ShowAvailable($conobj, "Car", "Yes");
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
    <div id="page-container">
        <div id="content-wrap">
            <div class="bg" id="center">
                <?php
                if ($userQuery->num_rows > 0) {
                ?>
                <table style="width:100%">
                    <tr>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Sit Count</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $i = 0;
                        while ($row = $userQuery->fetch_assoc()) {
                        ?>

                    <tr>
                        <td><?php echo $row["carname"]; ?></td>
                        <td><?php echo $row["carmodel"]; ?></td>
                        <td><?php echo $row["sitcount"]; ?></td>
                        <td><?php echo $row["availability"]; ?></td>
                    </tr>
                    <?php
                            $i++;
                        }
                        ?>
                </table>
                <?php
                } else {
                    echo "No result found";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>