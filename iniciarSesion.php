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
    //contar usuarios y comprobar que no hay ninguno
    //obtener usuarios con ese dni
    $query = "SELECT * FROM usuario WHERE dni = ? LIMIT 1;";
    //echo $query;
    $stmt = $cn->prepare($query);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    //leer resultados y comprarar contraseña hasheada
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($contraseña != $r["contraseña"]) {
        //contraseña incorrecta
        header("Location: login.php?error=1");
    }

    $reactivado = ($r["desactivado"] == 1);
    $sesion = new SesionUsuario(
        $r["id"], $r['nombre'], $r["apellido1"], $r["apellido2"], $r["dni"], $r["email"], $r["fecha_nac"], $r["es_admin"]
    );

    $_SESSION["sesion"] = serialize($sesion);
    if ($sesion->esAdmin) {
        header("Location: admin/index.php");
    } else if ($reactivado) {
        header("Location: menuCuentaReactivada.php");
    } else {
        header("Location: index.php");
    }

} catch (mysqli_sql_exception $e) {
    header("Location: login.php?error=0");
}

?>