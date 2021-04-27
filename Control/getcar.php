<?php
include('../model/db.php');
session_start();
$carname = $_POST['carname'];

if ($carname != "") {
  $connection = new db();
  $conobj = $connection->OpenCon();

  $carQuery = $connection->GetCarByName($conobj, "Car", $carname);



  if ($carQuery->num_rows > 0) {

    echo "<table><tr><th>Car Name</th><th>Model</th><th>Sit Count</th><th>Fare/Hour</th><th>Availability</th><th>Action</th></tr>";
    // output data of each row
    while ($row = $carQuery->fetch_assoc()) {
      echo "<tr><td>" . $row["carname"] . "</td><td>" . $row["carmodel"] . "</td><td>" . $row["sitcount"] .  "</td><td>" . $row["fareperh"] . "</td><td>" . $row["availability"] . "</td><td>" . '<a href="Request.php?car_id=' . $row["car_id"] . '">Request</a>' . "</td></tr>";
    }
    echo "</table>";
    echo "<p class='center success'>Result Found</p>";
  } else {
    echo "<p class='center error'>No Result Found</p>";
  }
} else {
  echo "<p class='center error'>Please enter a car name</p>";
}