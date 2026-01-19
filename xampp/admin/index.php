<?php
include "include.php";
session_start();
$sesion = $_SESSION["sesion"] ?? "";
if ($session == "") debug_header("Location: ../login.php");
?>