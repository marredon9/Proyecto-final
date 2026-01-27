<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

/*
ACCIONES:
1. Comprobar que los campos tienen texto
2. Hacer insert

ERRORES:
0. Error en la conexion a la base de datos
1. Los campos están incompletos
*/

$nombre = $_POST["nombre"] ?? "";
$direccion = $_POST["direccion"] ?? "";

//si el nombre o la direccion estan vacios, redirigir a la página anterior
if ($nombre == "" || $direccion == "") {
    redirect("admin/sucursalAñadir.php?error=1");
}

//hacer insert a base de datos
try {
    $stmt = $cn->prepare("INSERT INTO sucursal (nombre, direccion) VALUES (?, ?);");
    $stmt->bind_param("ss", $nombre, $direccion);
    $var = $stmt->execute();
    //var_dump($var);
    //echo $stmt->error;
    redirect("admin/sucursalAñadir.php");
} catch (mysqli_sql_exception $e) {
    redirect("admin/sucursalAñadir.php?error=0");
}

?>