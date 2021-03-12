<?php
session_start();
include('../Model/db.php');

$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $phone=$_REQUEST["phone"];
    $tradel=$_REQUEST["tradel"];
    $pass=$_REQUEST["pass"];
    $cnpass=$_REQUEST["cnpass"];
    $address = $_REQUEST["address"];

    if (empty($name) || empty($email) || empty($phone) || empty($tradel)|| empty($pass) ||  empty($address)) {
        $msg = "All fields are required";
     }

    else if(!preg_match("/[a-zA-Z]/", $name))
    {
        $msg="Valid Name is required.";
    }
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {

        $msg = "Email address must contain @";

          }
    else if(!preg_match("/[0-9]/", $phone))
    {
        $msg="Valid Phone is required.";
    }


      else if(!preg_match("/[0-9]/", $tradel))
      {
          $msg="Valid Trade License Number is required.";
      }
      else if ($pass != $cnpass) {

                  $msg = "Password Doesn't match";
              }
   else{
     $connection = new db();
     $conobj = $connection->OpenCon();
     // $userQuery = $connection->InsertUser($conobj, "registration", $fname,$uname,$email, $pass,"12","male");
     $connection->InsertVendor($conobj,"vendor",$name, $email,$pass,'Vendor',$phone,$address,$tradel);
     $connection->InsertLogin($conobj,"login",$email,$pass,'Vendor');

     $connection->CloseCon($conobj);
     
   }
}

?>