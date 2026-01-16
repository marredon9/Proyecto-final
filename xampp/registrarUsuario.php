<?php
include "db.php";
session_start();
/*
Errores:
0. Error con la conexion a la Base de Datos
1. Hay campos incompletos en el formulario
2. Ya hay un usuario registrado con ese correo
3. Las contraseñas no coinciden
*/

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$repetirContraseña = $_POST["repetirContraseña"];
$fechaNacimiento = $_POST["fecha-nacimiento"];

$datosRequeridos = [
    "nombre",
    "apellido1",
    "dni",
    "email",
    "contraseña",
    "repetirContraseña",
    "fecha-nacimiento"
];

//comprobar que estan todos los datos necesarios
for ($i = 0; $i < sizeof($datosRequeridos); $i++) {
    $campo = $_POST[$datosRequeridos[$i]] ?? "";
    if ($campo == "") //error 1: faltan datos necesarios
        header("Location: registro.php?error=1");
}

$contraseña = hash("sha256", $contraseña);

try {
    //comprobar que no se ha registrado el correo electronico
    $stmt = $cn->prepare("SELECT COUNT(email) AS count FROM usuario WHERE email = '?' AND eliminado = 0;");
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($r != 0) //error 2: ya hay un usuario registrado con ese correo electrónico
        header("Location: registro.php?error=2");
    
    if ($contraseña != $repetirContraseña) //error 3: las contraseñas no coinciden
        header("Location: registro.php?error=3");

    //insertar usuario
    $stmt = $cn->prepare(
        "INSERT INTO usuario (nombre, apellido1, apellido2, dni, email, contraseña, fecha_nac, es_admin)
         VALUES (?, ?, ?, ?, ?, ?, ?, FALSE);");
    $stmt->bind_param(
        "sssssss", 
        $nombre,
        $apellido1,
        $apellido2,
        $dni,
        $email,
        $contraseña,
        $fechaNacimiento
    );
    $stmt->execute();

    //obtener id del ultimo insert
    $stmt = $cn->prepare("SELECT LAST_INSERT_ID() AS id;");
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $_SESSION["userID"] = $r["id"];
    echo "Usuario registrado correctamente!!!!";
} catch (mysqli_sql_exception $e) {
    //nada
}

?>
