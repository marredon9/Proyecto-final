<?php
include "db.php";
include "sesionUsuario.php";
session_start();

/*
0. Conexion a BD
1. Obtener datos
*/

$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$contraseña = hash("sha256", $contraseña);
var_dump($email);
try {
    //obtener usuarios con ese email
    $query = "SELECT * FROM usuario WHERE email = ? AND eliminado = 0 LIMIT 1;";
    //echo $query;
    $stmt = $cn->prepare($query);
    $stmt->bind_param("s", $email);
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

    /*?><a href="index.php">Continuar</a><?php*/
    header("Location: index.php");

} catch (mysqli_sql_exception $e) {
    //nada
}

?>
