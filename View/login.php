<?php
include('../Control/ValidationLogin.php');
?>
<html>
<body>

 <img src="Pictures/login1.png" alt="login" class="center">


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<table>
<tr><td> Email: </td>
<td><input type="text" name="email">
<br>
<tr><td> Password: </td>
<td><input type="password" name="pass">
<br>
</table>



<input type="submit" value="SUBMIT">

<br>
<br>
New User??

<a href="RegisterHome.php">Register Now!!</a>

</body>
</html>
