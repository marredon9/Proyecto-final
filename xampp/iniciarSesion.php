<?php
include "db.php";
include "sesionUsuario.php";
session_start();

$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$contraseña = hash("sha256", $contraseña);
var_dump($email);
try {
    //obtener usuarios con ese email
    $query = "SELECT * FROM usuario WHERE email = ? LIMIT 1;";
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
    //($id, $nombre, $apellido1, $apellido2, $dni, $email, $fechaNacimiento, $esAdmin)
    //var_dump($r);
    $sesion = new SesionUsuario(
        $r["id"], $r["nombre"], $r["apellido1"], $r["apellido2"], $r["dni"], $r["email"], $r["fecha_nac"], $r["es_admin"]
    );
    $sesion = serialize($sesion);
    echo "\n";
    echo $sesion;
    echo "\n";
    $_SESSION["sesion"] = $sesion;
    echo $_SESSION["sesion"];
    //echo serialize($sesion);
    header("Location: index.php");

} catch (mysqli_sql_exception $e) {
    //nada
}

?>