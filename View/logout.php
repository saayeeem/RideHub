<?php // line 1 added to enable color highlight

session_start();
unset($_SESSION['email']);
header('Location: login.php');