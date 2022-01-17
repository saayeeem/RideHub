<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>


<body>
    <?php
    $GLOBALS['error'] = "";
    $GLOBALS['success'] = "";
    class db
    {

        function OpenCon()
        {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "ridehub";
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
            return $conn;
        }
        function CheckUser($conn, $table, $email, $password)
        {
            $error = "";
            $result = $conn->query("SELECT * FROM " . $table . " WHERE email='" . $email . "' AND password='" . $password . "'");
            return $result;
        }

        function InsertCustomer($conn, $table, $name, $email, $password, $type, $phone, $birthdate, $address)
        {
            $error = "";
            $result = "INSERT INTO " . $table . " (name,email,password,type,phone,birthday,address)
VALUES('$name','$email','$password','$type','$phone','$birthdate','$address')";
            if ($conn->query($result) === TRUE) {
                $success = "New record created successfully";
                return $result . $success;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function InsertVendor($conn, $table, $name, $email, $password, $type, $phone, $address, $tradelicense)
        {
            $error = "";
            $result = "INSERT INTO " . $table . " (name, email,password,type,phone,address,tradelicense)
VALUES('$name', '$email','$password','$type','$phone','$address','$tradelicense')";
            if ($conn->query($result) === TRUE) {
                $success =  "New record created successfully";
                return $result . $success;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function InsertDriver($conn, $table, $name, $email, $password, $type, $phone, $birthday, $address, $drivinglicense)
        {
            $error = "";
            $result = "INSERT INTO " . $table . " (name,email,password,type,phone,birthday,address,drivinglicense)
VALUES('$name','$email','$password','$type','$phone','$birthday','$address','$drivinglicense')";
            if ($conn->query($result) === TRUE) {
                $success = "New record created successfully";
                return $result . $success;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function InsertLogin($conn, $table, $name, $email, $password, $type)
        {
            $error = "";
            $result = "INSERT INTO " . $table . " (name,email,password,type)
VALUES('$name','$email','$password','$type')";
            if ($conn->query($result) === TRUE) {
                $success = "Data inserted into login table successfully";
                header('Location:login.php');
                return $result . $success;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function InsertCar($conn, $table, $carname, $carm, $scount, $carphoto, $availability, $fare, $from, $to)
        {

            $carphoto = addslashes($_FILES["carphoto"]["tmp_name"]);
            $name = addslashes($_FILES["name"]["tmp_name"]);
            $carphoto = file_get_contents($carphoto);
            $carphoto = base64_encode($carphoto);
            $result = "INSERT INTO " . $table . " (carname,carmodel,sitcount,carphoto,availability,fareperh,destination_from,destination_to)
                VALUES('$carname','$carm','$scount','$carphoto','$availability','$fare','$from','$to')";
            $error = "";
            if ($conn->query($result) === TRUE) {
                $success = "Data inserted into Car table successfully";
                header('Location:VendorHome.php');
                return $result . $success;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function InsertCarRequest($conn, $table, $carname, $carm, $scount, $status, $fare, $customer_id, $driver_id, $status_driver)
        {
            $result = "INSERT INTO " . $table . "(carname,carmodel,sitcount,status_vendor,fareperh,customer_id,driver_id,status_driver)
VALUES('$carname','$carm','$scount','$status','$fare','$customer_id','$driver_id','$status_driver')";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function ValidateLogin($conn, $table, $email, $password)
        {

            $result = $conn->query("SELECT name,email,password,type FROM $table WHERE email='$email' and password = '$password'");
            return $result;
        }



        function UpdateVendor($conn, $table, $name, $email, $pass, $address, $phone)

        {
            $result = "UPDATE $table SET name='$name', email='$email',password='$pass', address='$address' , phone='$phone' WHERE email='$email'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function UpdateCustomer($conn, $table, $name, $email, $pass, $address, $phone)

        {
            $result = "UPDATE $table SET name='$name', email='$email',password='$pass', address='$address' , phone='$phone' WHERE email='$email'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function UpdateCustomerAll($conn, $table, $name, $customer_id, $pass, $address, $phone)

        {

            $result = "UPDATE $table SET name='$name',password='$pass', address='$address' , phone='$phone' WHERE customer_id='$customer_id'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function UpdateCarAll($conn, $table, $car_id, $carname, $carm, $scount, $availability, $fare)

        {
            $result = "UPDATE $table SET carname='$carname',carmodel='$carm', sitcount='$scount' , availability='$availability', fareperh= '$fare' WHERE car_id='$car_id'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function UpdateVendorAll($conn, $table, $name, $vendor_id, $pass, $address, $phone)

        {
            $result = "UPDATE $table SET name='$name',password='$pass', address='$address' , phone='$phone' WHERE vendor_id='$vendor_id'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function UpdateDriver($conn, $table, $name, $email, $pass, $phone, $address)

        {
            $result = "UPDATE $table SET name='$name', email='$email',password='$pass',  phone='$phone' , address='$address'  WHERE email='$email'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function ShowAll($conn, $table, $email)
        {
            $result = $conn->query("SELECT * FROM $table WHERE email='$email' ");
            return $result;
        }
        function ShowAllByCustomerID($conn, $table, $customer_id)
        {
            $result = $conn->query("SELECT * FROM $table WHERE customer_id='$customer_id' ");
            return $result;
        }
        function ShowCarToDriver($conn, $table, $status_vendor)
        {
            $result = $conn->query("SELECT * FROM $table WHERE  status_vendor='$status_vendor' ");
            return $result;
        }
        function Show($conn, $table)
        {
            $result = $conn->query("SELECT * FROM $table ");
            return $result;
        }
        function ShowCar($conn, $table, $car_id)
        {
            $result = $conn->query("SELECT * FROM $table WHERE car_id ='$car_id'");

            while ($row = mysqli_fetch_array($result)) {
                echo '<img height ="300" width = "300" src="data:image;base64, ' . $row['carphoto'] . '">';
            }
        }

        function ShowRequestedCar($conn, $table, $car_id)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE car_id= '$car_id'");
            return $result;
        }
        function ShowAvailableCar($conn, $table, $availability)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE availability= '$availability'");
            return $result;
        }
        function GetCarByName($conn, $table, $name)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE carname= '$name'");
            return $result;
        }
        function DeleteUser($conn, $table, $customer_id)
        {
            $result = $conn->query("DELETE FROM $table WHERE customer_id = '$customer_id'");
            return $result;
        }
        function DeleteVendor($conn, $table, $vendor_id)
        {
            $result = $conn->query("DELETE FROM $table WHERE vendor_id = '$vendor_id'");
            return $result;
        }
        function DeleteDriver($conn, $table, $driver_id)
        {
            $result = $conn->query("DELETE FROM $table WHERE driver_id = '$driver_id'");
            return $result;
        }
        function DeleteCar($conn, $table, $car_id)
        {
            $result = $conn->query("DELETE FROM $table WHERE car_id = '$car_id'");
            return $result;
        }
        function DeleteFromLogin($conn, $table, $email)
        {
            $result = $conn->query("DELETE FROM $table WHERE email = '$email'");
            return $result;
        }
        function UpdateCarRequest($conn, $table, $req_id, $status_vendor)
        {

            $result = "UPDATE $table SET status_vendor='$status_vendor' WHERE req_id='$req_id'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
            return $result;
        }
        function UpdateCarDriverRequest($conn, $table, $req_id,  $driver_id, $status_driver)
        {

            $result = "UPDATE $table SET driver_id='$driver_id', status_driver='$status_driver' WHERE req_id='$req_id'";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
            return $result;
        }

        function CloseCon($conn)
        {
            $conn->close();
        }
    }

    ?>
</body>

</html>