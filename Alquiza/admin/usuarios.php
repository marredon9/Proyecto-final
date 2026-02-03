<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

// Iniciar sesión o verificar si hay una cookie de tema

if (isset($_GET['tema'])) {
    // Cambiar el modo según el parámetro GET y guardar en cookie
    $nuevo_tema = $_GET['tema'];
    setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
    // Redirigir para evitar que se vuelva a enviar el formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}if(!isset($_COOKIE['theme'])){
    setcookie('theme', 'light', time() + (30 * 24 * 60 * 60), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Obtener el tema de la cookie
$tema = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alquiza - Alquiler de Coches en Ibiza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Estilos personalizados -->
<link rel="stylesheet" href="../sass/main-<?php echo $_COOKIE['theme'] ?>.css" />    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>
<body>
    <!-- Navbar -->
    <?= navbarAdmin() ?>
<!-- 
Esta hoja de estilos es solo para que el listado en HTML quede mas organizado.
Se puede quitar en cualquier momento sin problema
-->


<h1>Listado de usuarios</h1>
<table>
    <tr>
        <td></td>
        <td><b>ID</b></td>
        <td><b>Nombre Completo</b></td>
        <td><b>DNI</b></td>
        <td><b>E-mail</b></td>
        <td><b>Admin</b></td>
    </tr>
    <?php
//hacer consulta a base de datos
try {
    $stmt = $cn->prepare("SELECT * FROM usuario;");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $id = $r["id"] ?? "";
        $nombre = $r["nombre"]?? "";
        $apellido1 = $r["apellido1"] ?? "";
        $apellido2 = $r["apellido2"] ?? "";
        $nombreCompleto = htmlspecialchars($nombre . " " . $apellido1 . " " . $apellido2);
        $dni = $r["dni"] ?? "";
        $email = $r["email"] ?? "";
        $esAdmin = $r["es_admin"] == 1;
        ?>
    <tr>
        <td>
            <a href="verUsuario.php?id=<?=$id?>">Ver</a>
        </td>
        <td><input type="text" disabled value="<?=$id?>"></td>
        <td><input type="text" disabled value="<?=$nombreCompleto?>"></td>
        <td><input type="text" disabled value="<?=$dni?>"></td>
        <td><input type="text" disabled value="<?=$email?>"></td>
        <?php

        if ($esAdmin) {
            ?>
            <td><input type="checkbox" disabled checked></td>
            <?php
        } else {
            ?>
            <td><input type="checkbox" disabled></td>
            <?php
        }

        ?>
    </tr>

        <?php
    }
} catch (mysqli_sql_exception $e) {

}
    ?>
</table>
<?= footer() ?>
</body>
</html>