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


        function ValidateLogin($conn, $table, $email, $password)
        {
            $result = $conn->query("SELECT email,password,type FROM  $table WHERE email='$email' and password = '$password'");
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
                    } else {
 $msg= "Invalid Login";
                      //  echo "Invalid Login";
                        header('Location:login.php');
                    }
                }
            } catch (Exception $e) {

               $msg= "Invalid Login";
              //  echo "Invalid Login";
                header('Location:login.php');
            }
        }

        function ShowAll($conn, $table, $email)
        {
            $result = $conn->query("SELECT * FROM  $table WHERE email='$email' ");
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
