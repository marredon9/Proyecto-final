<?php
include "include.php";
session_start();

/*
0. Conexion a BD
1. Obtener datos
*/

$dni = $_POST["dni"];
$contraseña = $_POST["contraseña"];
$contraseña = hash("sha256", $contraseña);
var_dump($dni);
try {
    //contar usuarios y comprobar que no hay ninguno



    //obtener usuarios con ese dni
    $query = "SELECT * FROM usuario WHERE dni = ? AND desactivado = 0 LIMIT 1;";
    //echo $query;
    $stmt = $cn->prepare($query);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    //leer resultados y comprarar contraseña hasheada
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($contraseña != $r["contraseña"]) {
        //contraseña incorrecta
        header("Location: login.php");
    }

    $sesion = new SesionUsuario(
        $r["id"], $r['nombre'], $r["apellido1"], $r["apellido2"], $r["dni"], $r["email"], $r["fecha_nac"], $r["es_admin"]
    );

    $_SESSION["sesion"] = serialize($sesion);
    /*?><a href="index.php">Continuar</a><?php*/
    header("Location: index.php");

} catch (mysqli_sql_exception $e) {
    //nada
}

?>