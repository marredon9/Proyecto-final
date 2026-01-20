<?php
include "include.php";
session_start();
$sesion = $_SESSION["sesion"] ?? "";
if ($sesion == "") debug_header("Location: ../login.php");
?>
<h1>Has iniciado sesión como administrador!<h1>