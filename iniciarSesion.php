<?php
include "include.php";
session_start();

/*
0. Error con la conexion a la base de datos
1. La contraseña es incorrecta o el usuario no existe
*/

$dni = $_POST["dni"];
$contraseña = $_POST["contraseña"];
$contraseña = hash("sha256", $contraseña);
//var_dump($dni);
try {
    //contar usuarios
    $stmt = $cn->prepare("SELECT COUNT(*) AS count FROM usuario;");
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($r["count"] == 0) {
        debug_header("Location: login.php?error=0");
        return;
    }


    //contar usuarios con ese dni y comprobar que no hay ninguno
    $stmt = $cn->prepare("SELECT COUNT(*) AS count FROM usuario WHERE dni = ? LIMIT 1;");
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    //var_dump($r);
    //echo $r["count"];
    if ($r["count"] == 0) {
        //contraseña incorrecta o el usuario ya existe
        debug_header("Location: login.php?error=1");
        return;
    } 
    //echo "aaaa";

    //obtener usuarios con ese dni
    //echo $query;
    $stmt = $cn->prepare("SELECT * FROM usuario WHERE dni = ? LIMIT 1;");
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    //leer resultados y comprarar contraseña hasheada
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    var_dump($r);
    var_dump()
    if ($contraseña != $r["contraseña"]) {
        //contraseña incorrecta o el usuario ya existe
        debug_header("Location: login.php?error=1");
        return;
    }

    $reactivado = ($r["desactivado"] == 1);
    $sesion = new SesionUsuario(
        $r["id"], $r['nombre'], $r["apellido1"], $r["apellido2"], $r["dni"], $r["email"], $r["fecha_nac"], $r["es_admin"]
    );

    $_SESSION["sesion"] = serialize($sesion);
    if ($sesion->esAdmin) {
        debug_header("Location: admin/index.php");
        return;
    } else if ($reactivado) {
        debug_header("Location: menuCuentaReactivada.php");
        return;
    } else {
        debug_header("Location: index.php");
        return;
    }

} catch (mysqli_sql_exception $e) {
    debug_header("Location: login.php?error=0");
    return;
}

?>