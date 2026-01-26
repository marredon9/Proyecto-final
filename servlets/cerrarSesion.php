<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
borrarSesion($sesion);
$sesion = obtenerSesion();
var_dump($sesion);
redirect("index.php");
?>