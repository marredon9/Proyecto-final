<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}
?>
<h1>Bienvenido, <?=$sesion->nombre?></h1>
<h3>Has iniciado sesión como administrador.</h3>
<ul>
    <li><a href="usuarios.php">Administrar usuarios</a></li>
    <li><a href="vehiculos.php">Administrar vehiculos</a></li>
    <li><a href="alquileres.php">Administrar alquileres</a></li>
    <li><a href="sucursales.php">Administrar sucursales</a></li>
</ul>