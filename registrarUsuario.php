<?php
include "include.php";
session_start();
/*
Errores:
0. Error con la conexion a la Base de Datos
1. Hay campos incompletos en el formulario
2. Ya hay un usuario registrado con ese correo
3. Las contraseñas no coinciden
*/

//PARAMETROS DEL FORMULARIO
$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"]; //Opcional
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
$repetirContraseña = hash("sha256", $repetirContraseña);

try {
    echo "haciendo select...";
    //comprobar que no se ha registrado el correo electronico
    $stmt = $cn->prepare("SELECT COUNT(dni) AS count FROM usuario WHERE dni = ? AND desactivado = 0;");
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($r["count"] != 0) //error 2: ya hay un usuario registrado con ese DNI
        header("Location: registro.php?error=2");
    
    if ($contraseña != $repetirContraseña) //error 3: las contraseñas no coinciden
        header("Location: registro.php?error=3");

    echo "insertando usuario...";
    //insertar usuario
    $stmt = $cn->prepare(
        "INSERT INTO usuario (nombre, apellido1, apellido2, dni, email, contraseña, fecha_nac, es_admin, desactivado)
         VALUES (?, ?, ?, ?, ?, ?, ?, FALSE, FALSE);");
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
    //echo "Todo bien aqui...";
    $stmt->execute();

    echo "obteniendo id de ultimo insert...";
    //obtener id del ultimo insert
    $stmt = $cn->prepare("SELECT LAST_INSERT_ID() AS id;");
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $_SESSION["userID"] = $r["id"];
    echo "Usuario registrado correctamente!!!!";
    header("Location: index.php");

} catch (mysqli_sql_exception $e) {
    echo $e;
    header("Location: registro.php?error=0");
}

?>
