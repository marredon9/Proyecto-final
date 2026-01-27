<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

//obtener campos del formulario
$id = intval($_POST["id"] ?? 0);
$nombre = $_POST["nombre"] ?? "";
$direccion = $_POST["direccion"] ?? "";

if ($id == 0) {
    redirect("admin/sucursales.php");
}

$urlRetorno = "admin/verSucursal.php?id=" . $id;

//hacer update en la base de datos
try {
    $stmt = $cn->prepare("UPDATE sucursal SET nombre = ?, direccion = ? WHERE id = ?;");
    $stmt->bind_param("ssd", $nombre, $direccion, $id);
    $stmt->execute();
    redirect($urlRetorno);
} catch (mysqli_sql_exception $e) {
    redirect("admin/verSucursal.php");
}


?>