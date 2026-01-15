<?php
include "db.php";
session_start();

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$repetirContraseña = $_POST["repetirContraseña"];
$fechaNacimiento = $_POST["fecha-nacimiento"];

if ($contraseña != $repetirContraseña) header("Location: index.php");

$contraseña = hash("sha256", $contraseña);
//echo $contraseña;

try {
    //comprobar que no se ha registrado el correo electronico
    $stmt = $cn->prepare("SELECT COUNT(email) AS count FROM usuario WHERE email = '?'");
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($r != 0) header("Location: registro.php");
    

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
