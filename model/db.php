<?php
class db{

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ridehub";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 return $conn;
 }
 function CheckUser($conn,$table,$email,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE email='". $email."' AND password='". $password."'");
 return $result;
 }

function InsertUser($conn,$table,$name, $username, $email,$password,$birthdate,$gender)
{
    $result = "INSERT INTO " . $table . " (firstname,username,email,password,birthdate,gender)
    VALUES('$firstname','$username','$email','$password','$birthdate','$gender')";
    if ($conn->query($result) === TRUE) {
        echo "New record created successfully";
        return $result;
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
}

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
