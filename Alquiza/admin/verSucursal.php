<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

$id = intval($_GET["id"] ?? 0);
if ($id == 0) {
    redirect("admin/sucursales.php");
}

//hacer consulta a base de datos
try {
    $stmt = $cn->prepare("SELECT * FROM sucursal WHERE id = ?;");
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();

    //guardar datos de la consulta en variables especificas
    //var_dump($r);
    $nombre = htmlspecialchars($r["nombre"]);
    $direccion = htmlspecialchars($r["direccion"]);
} catch (mysqli_sql_exception $e) {
    redirect("admin/sucursales.php");
}
//mostrar como código html

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
    <form action="<?= srv("admin/editarSucursal") ?>" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <table>
            <tr>
                <td>ID: </td>
                <td><input type="text" disabled value="<?= $id ?>"></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="nombre" value="<?= $nombre ?>" required></td>
            </tr>
            <tr>
                <td>Dirección: </td>
                <td><textarea required name="direccion"><?= $direccion ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Guardar Cambios"></td>
            </tr>
        </table>
    </form>
    <?= footer() ?>
</body>

</html>