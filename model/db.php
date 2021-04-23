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
        function InsertAdmin($conn, $table, $name, $email, $password, $type, $phone, $birthday, $address, $drivinglicense)
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

        function InsertCar($conn, $table, $carname, $carm, $scount, $carphoto, $availability, $fare)
        {
            $carphoto = addslashes($_FILES["carphoto"]["tmp_name"]);
            $name = addslashes($_FILES["name"]["tmp_name"]);
            $carphoto = file_get_contents($carphoto);
            $carphoto = base64_encode($carphoto);
            $result = "INSERT INTO " . $table . " (carname,carmodel,sitcount,carphoto,availability,fareperh)
                VALUES('$carname','$carm','$scount','$carphoto','$availability',$fare)";
            $error = "";
            if ($conn->query($result) === TRUE) {
                $success = "Data inserted into Car table successfully";
                header('Location:VendorHome.php');
                return $result . $success;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function ValidateLogin($conn, $table, $email, $password, $type)
        {

            $result = $conn->query("SELECT name,email,password,type FROM $table WHERE email='$email' and password = '$password' and type = '$type'");
            return $result;
        }

        function ShowAll($conn, $table, $email)
        {
            $result = $conn->query("SELECT * FROM $table WHERE email='$email' ");
            return $result;
        }
        function Show($conn, $table)
        {
            $result = $conn->query("SELECT * FROM $table ");
            return $result;
        }
        function ShowCar($conn, $table, $name)
        {
            $result = $conn->query("SELECT * FROM $table WHERE carname ='$name'");

            while ($row = mysqli_fetch_array($result)) {
                echo '<img height ="300" width = "300" src="data:image;base64, ' . $row[4] . '">';
            }
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
        function ShowRequestedCar($conn, $table, $name)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE carname= '$name'");
            return $result;
        }
        function ShowAvailableCar($conn, $table, $availability)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE availability= '$availability'");
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
        function InsertCarRequest($conn, $table, $carname, $carm, $scount, $status)
        {
            $result = "INSERT INTO " . $table . " (carname,carmodel,sitcount,status)
VALUES('$carname','$carm','$scount','$status')";
            $error = "";
            if ($conn->query($result) === TRUE) {
                return $result . $error;
            } else {
                $error = "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function CloseCon($conn)
        {
            $conn->close();
        }
    }

    ?>
</body>

</html>