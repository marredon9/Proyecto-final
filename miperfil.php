<?php
include "include.php";
session_start();

$sesion = obtenerSesion();
if (!$sesion) {
    redirect("login.php");
    exit;
}

?>