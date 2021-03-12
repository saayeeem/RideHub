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

function InsertCustomer($conn,$table,$name, $email,$password,$type,$phone,$birthdate,$address)
{
    $result = "INSERT INTO " . $table . " (name,email,password,type,phone,birthday,address)
    VALUES('$name','$email','$password',"customer",'$phone','$birthdate','$address')";
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
