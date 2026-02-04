<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}
//comprobar que se está seleccionando un usuario (el parametro id de la url)
$id = $_GET["id"] ?? 0;
if ($id == 0) {
    //redirect("admin/usuarios.php");
}

//obtener datos del usuario
try {
    $stmt = $cn->prepare("SELECT * FROM usuario WHERE id = ?;");
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();

    $nombre = htmlspecialchars($r["nombre"] ?? "");
    $apellido1 = htmlspecialchars($r["apellido1"] ?? "");
    $apellido2 = htmlspecialchars($r["apellido2"] ?? "");
    $dni = htmlspecialchars($r["dni"] ?? "");
    $email = htmlspecialchars($r["email"] ?? "");
    $esAdmin = $r["es_admin"] == 1;
} catch (mysqli_sql_exception $e) {
    //redirect("admin/usuarios.php");
}


if (isset($_GET['tema'])) {
    // Cambiar el modo según el parámetro GET y guardar en cookie
    $nuevo_tema = $_GET['tema'];
    setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
    // Redirigir para evitar que se vuelva a enviar el formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
if (!isset($_COOKIE['theme'])) {
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
    <?= navbarAdmin() ?>
    <h1>Editar usuario</h1>
    <h3><a href="usuarios.php">Volver atrás</a></h3>

    <table>
        <form action="<?= srv("admin/editarUsuario") ?>" method="POST">
            <tr>
                <td>ID: </td>
                <td><input type="text" disabled value="<?= $id ?>"><input type="hidden" value="<?= $id ?>"></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" value="<?= $nombre ?>" name="nombre"></td>
            </tr>
            <tr>
                <td>1<sup>er</sup> apellido: </td>
                <td><input type="text" value="<?= $apellido1 ?>" name="apellido1"></td>
            </tr>
            <tr>
                <td>2<sup>do</sup> apellido: </td>
                <td><input type="text" value="<?= $apellido2 ?>" name="apellido2"></td>
            </tr>
            <tr>
                <td>DNI: </td>
                <td><input type="text" value="<?= $dni ?>" name="dni"></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td><input type="email" value="<?= $email ?>" name="email"></td>
            </tr>
            <tr>
                <td>Administrador</td>
                <td><input type="checkbox" name="esAdmin" <?= (($esAdmin) ? "checked" : "") ?>></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <input type="submit" value="Guardar Cambios">
                </td>
                <td></td>
            </tr>
        </form>
        <tr>
            <td>
                <form action="<?= srv("admin/borrarUsuario") ?>">
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <input type="submit" value="Borrar Usuario">
                </form>
            </td>
            <td></td>
        </tr>
    </table>
</body>

</html>