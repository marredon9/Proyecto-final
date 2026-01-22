<?php
include "include.php";
session_start();
if (isset($_SESSION["sesion"]))
    $session = unserialize($_SESSION["sesion"]);
else
    $session = "";
?>
<h1>Tu cuenta ha sido reactivada.</h1>
<form action="index.php"><input type="submit" value="Aceptar"></form>