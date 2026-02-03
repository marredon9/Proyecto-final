<?php
include "inlcude.php";
session_start();
$sesion = obtenerSesion();

$desde = $_POST["desde"] ?? "";
$hasta = $_POST["hasta"] ?? "";
$idCoche = intval($_POST["id"] ?? 0);
$idSucursalRec = intval($_POST["idSucursalRec"] ?? 0);
$idSucursalDev = intval($_POST["idSucursalDev"] ?? 0);

//TODO hacer insert con datos

?>