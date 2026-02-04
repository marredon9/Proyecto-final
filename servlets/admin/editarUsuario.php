<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}



// TODO arreglar este servlet, al entrar se queda infinitamente cargando
echo "Calculando url de retorno...<br>";

echo "Guardando parámetros en variables...<br>";
//guardar parametros en variables
$id = $_POST["id"] ?? 0;
$nombre = $_POST["nombre"] ?? "";
$apellido1 = $_POST["apellido1"] ?? "";
$apellido2 = $_POST["apellido2"] ?? "";
$dni = $_POST["dni"] ?? "";
$email = $_POST["email"] ?? "";
$esAdmin = (($_POST["esAdmin"] ?? "") == "on") ? 1 : 0;

echo "Comprobando que están todos los parametros...<br>";
//comprobar que los parametros necesarios esten completos
if ($id == 0)
    redirect("admin/verUsuario.php");
$campos = [$nombre, $apellido1, $dni, $email];
for ($i = 0; $i < sizeof($campos); $i++) {
    if ($campos[$i] == "") redirect("admin/verUsuario.php");
}
unset($campos);

$id = intval($id);
$urlRetorno = "admin/verUsuario.php?id=" . $id;
    

echo "Ejecutando update...<br>";
//hacer update segun campos recibidos
try {
    $query = "UPDATE usuario SET nombre = ?, apellido1 = ?, apellido2 = ?, dni = ?, email = ?, es_admin = ? WHERE id = ?;";
    $stmt = $cn->prepare($query);
    $stmt->bind_param("sssssdd", $nombre, $apellido1, $apellido2, $dni, $email, $esAdmin, $id);
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
    redirect($urlRetorno . "&error=0");
}
redirect($urlRetorno);


?>