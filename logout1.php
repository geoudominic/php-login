<?php
session_start();//for logout we unset all session variables
unset($_SESSION["name"]);
unset($_SESSION["password"]);
header("Location:logs2.php");
?>