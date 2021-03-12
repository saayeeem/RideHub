<?php
include('../Control/validvendor.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Vendor Registation Form</h1>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <table>
    <tr>
      <td>
         Company name:
      </td>
      <td>
        <input type="text" name="vname">
      </td>
    </tr>

      <tr>
        <td>
         Email:
        </td>
        <td>
          <input type="text" name="vemail">
        </td>
      </tr>
      <tr>
        <td>
        Phone No:
        </td>
        <td>
          <input type="text" name="vphone">
        </td>
      </tr>
      <tr>
        <td>
        Trade license No:
        </td>
        <td>
          <input type="number" name="vtlic">
        </td>
      </tr>
      <tr>
        <td>
          Password:
        </td>
        <td>
          <input type="password" name="pass">
        </td>
      </tr>
     
      <tr>
        <td>
         Confirm Password:
        </td>
        <td>
          <input type="password" name="vpass">
        </td>
      </tr>
        
    <tr>
      <td>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </td>
    </tr>


    </table>
  </form>
</body>
</html>