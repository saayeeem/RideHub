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
    $msg = "";
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
            $result = $conn->query("SELECT * FROM " . $table . " WHERE email='" . $email . "' AND password='" . $password . "'");
            return $result;
        }

        function InsertCustomer($conn, $table, $name, $email, $password, $type, $phone, $birthdate, $address)
        {
            $result = "INSERT INTO " . $table . " (name,email,password,type,phone,birthday,address)
VALUES('$name','$email','$password','$type','$phone','$birthdate','$address')";
            if ($conn->query($result) === TRUE) {
                echo "New record created successfully";
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function InsertVendor($conn, $table, $name, $email, $password, $type, $phone, $address, $tradelicense)
        {
            $result = "INSERT INTO " . $table . " (name, email,password,type,phone,address,tradelicense)
VALUES('$name', '$email','$password','$type','$phone','$address','$tradelicense')";
            if ($conn->query($result) === TRUE) {
                echo "New record created successfully";
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function InsertDriver($conn, $table, $name, $email, $password, $type, $phone, $birthday, $address, $drivinglicense)
        {
            $result = "INSERT INTO " . $table . " (name,email,password,type,phone,birthday,address,drivinglicense)
VALUES('$name','$email','$password','$type','$phone','$birthday','$address','$drivinglicense')";
            if ($conn->query($result) === TRUE) {
                echo "New record created successfully";
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
            }
        }
        function InsertLogin($conn, $table, $email, $password, $type)
        {
            $result = "INSERT INTO " . $table . " (email,password,type)
VALUES('$email','$password','$type')";
            if ($conn->query($result) === TRUE) {
                $msg = "Data inserted into login table successfully";
                header('Location:login.php');
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function InsertCar($conn, $table, $carname, $carm, $scount, $carphoto, $availability)
        {
            $carphoto = addslashes($_FILES["carphoto"]["tmp_name"]);
            $name = addslashes($_FILES["name"]["tmp_name"]);
            $carphoto = file_get_contents($carphoto);
            $carphoto = base64_encode($carphoto);
            $result = "INSERT INTO " . $table . " (carname,carmodel,sitcount,carphoto,availability)
VALUES('$carname','$carm','$scount','$carphoto','$availability')";

            if ($conn->query($result) === TRUE) {
                $msg = "Data inserted into Car table successfully";
                header('Location:VendorHome.php');
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function ValidateLogin($conn, $table, $email, $password, $type)
        {
            $result = $conn->query("SELECT email,password,type FROM $table WHERE email='$email' and password = '$password' and type = '$type'");
            #if ($conn->query($result) === TRUE) {
            //echo "Login Successfully";
            try {
                $row = mysqli_fetch_array($result);
                if ($row != False) {
                    if ($row["type"] == 'Vendor') {
                        header('Location: VendorHome.php');
                        return;
                    } else if ($row["type"] == 'driver') {

                        header('Location: DriverHome.php');
                        return;
                    } else if ($row["type"] == 'customer') {

                        header('Location: CustomerHome.php');
                        return;
                    } else if ($row["type"] == 'Admin') {

                        header('Location: AdminHome.php');
                        return;
                    } else {
                        $msg = "Invalid Login";
                        // echo "Invalid Login";
                        header('Location:login.php');
                    }
                }
            } catch (Exception $e) {
                $msg = "Invalid Login";
                // echo "Invalid Login";
                header('Location:login.php');
            }
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
        function ShowCar($conn, $table)
        {
            $result = $conn->query("SELECT * FROM $table");

            while ($row = mysqli_fetch_array($result)) {
                echo '<img height ="300" width = "300" src="data:image;base64, ' . $row[4] . '">';
            }
        }


        function UpdateVendor($conn, $table, $name, $email, $pass, $address, $phone)

        {
            $result = "UPDATE $table SET name='$name', email='$email',password='$pass', address='$address' , phone='$phone' WHERE email='$email'";
            $msg = "";
            if ($conn->query($result) === TRUE) {
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
            }
        }

        function ShowAvailable($conn, $table, $availability)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE availability= '$availability'");

            while ($row = mysqli_fetch_array($result)) {
                echo '<img height ="300" width = "300" src="data:image;base64, ' . $row[4] . '">';
            }
        }
        function ShowAvailableCar($conn, $table, $availability)
        {
            $result = $conn->query("SELECT * FROM $table  WHERE availability= '$availability'");
            return $result;
        }
        function InsertCarRequest($conn, $table, $carname, $carm, $scount, $carphoto, $status)
        {
            $carphoto = addslashes($_FILES["carphoto"]["tmp_name"]);
            $name = addslashes($_FILES["name"]["tmp_name"]);
            $carphoto = file_get_contents($carphoto);
            $carphoto = base64_encode($carphoto);
            $result = "INSERT INTO " . $table . " (carname,carmodel,sitcount,carphoto,status)
VALUES('$carname','$carm','$scount','$carphoto','$status')";

            if ($conn->query($result) === TRUE) {
                echo "Reuested successfully";
                header('Location: CustomerHome.php');
                return $result;
            } else {
                echo "Error: " . $result . "<br>" . $conn->error;
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