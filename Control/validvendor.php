<?php
session_start();
?>
<?php

$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name=$_REQUEST["vname"];
    $email=$_REQUEST["vemail"];
    $phone=$_REQUEST["vphone"];
    $vendorl=$_REQUEST["vtlic"];
    $pass=$_REQUEST["pass"];
    $cnpass=$_REQUEST["vpass"];

    if (empty($name) || empty($email) || empty($phone) || empty($vendor1)|| empty($pass) || empty($cnpass)) {
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


      else if(!preg_match("/[0-9]/", $vendor1))
      {
          $msg="Valid Driving license Number is required.";
      }
      else if ($pass != $cnpass) {

                  $msg = "Password Doesn't match";
              }
   else{
     header("Location: login.php");
   }
}

?>
