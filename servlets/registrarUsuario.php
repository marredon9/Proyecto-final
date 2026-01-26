<?php
include "include.php";
session_start();

/*
ACCIONES:
comprobar que se han introducido todos los campos
comprobar que las contraseñas sean iguales
Revisar que no haya usuarios con ese mismo DNI
Hacer insert con datos

ERRORES:
0: Error con la base de datos
1: Ya hay un usuario registrado con ese DNI
2: Las contraseñas no coinciden
3: Campos insuficientes
*/

$nombre = $_POST["nombre"] ?? "";
$apellido1 = $_POST["apellido1"] ?? "";
$apellido2 = $_POST["apellido2"] ?? "";
$dni = $_POST["dni"] ?? "";
$email = $_POST["email"] ?? "";
$contraseña = $_POST["contraseña"] ?? "";
$repetirContraseña = $_POST["repetirContraseña"] ?? "";

//comprobar campos uno a uno
$comprobarCampos = [$nombre, $apellido1, $dni, $contraseña, $repetirContraseña, $email];
for ($i = 0; $i > sizeof($comprobarCampos); $i++) {
    //echo ($i);
    if ($comprobarCampos[$i] == "") {
        header("Location: registro.php?error=3"); //error 3: datos insuficientes
        return;
    }
}
unset($comprobarCampos);

$contraseña = hash("sha256", $contraseña);
$repetirContraseña = hash("sha256", $repetirContraseña);
if ($contraseña != $repetirContraseña) {
    header("Location: registro.php?error=2"); //error 2: las contraseñas no coinciden
    return;
}

//consultas a base de datos
try {
    //contar usuarios con ese dni
    $stmt = $cn->prepare("SELECT COUNT(*) AS count FROM usuario WHERE dni = ?;");
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $recuento = $r["count"];
    if ($recuento != 0) { //si el recuento no es 0
        header("Location: registro.php?error=1");
        return;
    }

    //hacer insert con datos
    $query = "INSERT INTO usuario (nombre, apellido1, apellido2, dni, email, contraseña, es_admin) VALUES (?, ?, ?, ?, ?, ?, FALSE);";
    $stmt = $cn->prepare($query);
    $stmt->bind_param("ssssss", $nombre, $apellido1, $apellido2, $dni, $email, $contraseña);
    $stmt->execute();
    
    //final redirigir a login.php
    header("Location: login.php");
    return;
} catch (mysqli_sql_exception $e) {
    header("Location: registro.php?error=0"); //error 0: error con base de datos
    return;
}



?>