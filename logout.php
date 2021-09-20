<?php
include("connection.php");
session_start();
unset($_SESSION["admin_email"]);
unset($_SESSION["admin_password"]);
header("Location:Login.php");


?> 
