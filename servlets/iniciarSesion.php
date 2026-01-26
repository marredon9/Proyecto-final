<?php
include "include.php";
session_start();

/*
ACCIONES:
obtener recuento de registros con el dni de bd
obtener datos de usuario de bd
comprobar que la contraseña sea correcta
si lo es, crear un objeto de tipo sesionusuario y guardarla en los datos de sesion

ERRORES:
0: Error en la conexion con la base de datos
1: Campos insuficientes
2: el usuario no existe o la contraseña es incorrecta
*/

//obtener datos de formulario
$dni = $_POST["dni"] ?? "";
$contraseña = $_POST["contraseña"] ?? "";

//comprobar que esten todos los datos
if ($dni == "" || $contraseña == "") {
    redirect("login.php?error=1"); //error 1: parametros insuficientes
    return;
}

//hashear contraseña
$contraseña = hash("sha256", $contraseña);

//consultas a base de datos
try {
    //comprobar que hay usuarios con ese id en la base de datos
    $stmt = $cn->prepare("SELECT *, COUNT(*) AS count FROM usuario WHERE dni = ?;");
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $recuento = $r["count"];
    if ($recuento == 0) { //si no existe un usuario con ese dni
        redirect("login.php?error=1"); //error 2: el usuario no existe o la contraseña es incorrecta
    }
    
    //comprobar que la contraseña es correcta
    if ($contraseña != $r["contraseña"]) {
        redirect("login.php?error=1"); //error 2: el usuario no existe o la contraseña es incorrecta
    }

    //guardar objeto sesionusuario en datos de sesion
    $sesion = new SesionUsuario(
        $r["id"], $r["nombre"], $r["apellido1"], $r["apellido2"], $r["dni"], $r["email"], $r["es_admin"]
    );
    guardarSesion($sesion);
    redirect("index.php");
} catch (mysqli_sql_exception $e) {
    redirect("login.php?error=0"); //error 0: problema con la base de datos
}


?>