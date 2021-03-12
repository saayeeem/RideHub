<?php
session_start();
?>

<?php



$msg="";



if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $phone=$_REQUEST["phone"];
    $drivingl=$_REQUEST["drivingl"];
    $pass=$_REQUEST["pass"];
    $cnpass=$_REQUEST["cnpass"];
    $dob=$_REQUEST["dob"];
    $address=$_REQUEST["address"];




    if (empty($name) || empty($email) || empty($phone) || empty($drivingl)|| empty($pass) || empty($cnpass)  || empty($address) ) {
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


      else if(!preg_match("/[0-9]/", $drivingl))
      {
          $msg="Valid Driving license Number is required.";
      }
      else if ($pass != $cpass) {

                  $msg = "Password Doesn't match";

              }
   else{
     header("Location: login.php");
   }
}

?>
