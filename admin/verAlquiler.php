<?php
include "../include.php";
require_once __DIR__ . '/../../include/Alquiler.php';
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

$id = intval($_GET['id'] ?? 0);
if ($id === 0) {
    redirect("admin/Alquiler.php");
}

$id = $_GET["id"] ?? 0; //obtener id del parametro GET en el enlace. si no existe, se establece en 0
if ($id == 0) { //si el id es 0, redirigir a otra pagina
    redirect("admin/alquileres.php"); //url de la página con listado de alquileres
}

//$alquilerClass = new Alquiler($cn);

/*
try {
    $r = $alquilerClass->getByIdDetailed($id);
    if (!$r) {
        redirect("admin/Alquiler.php");
    }
} catch (mysqli_sql_exception $e) {
    redirect("admin/Alquiler.php");
}*/

$query = "
SELECT a.*,
sr.nombre AS nombre_recogida,
sd.nombre AS nombre_devolucion,
u.nombre AS us_nombre,
u.apellido1 AS us_apellido1,
u.apellido2 AS us_apellido2,
u.dni AS us_dni,
v.marca AS marca,
v.modelo AS modelo,
v.matricula AS matricula
FROM alquiler a
INNER JOIN sucursal sr ON a.id_suc_rec = sr.id 
INNER JOIN sucursal sd ON a.id_suc_dev = sd.id
INNER JOIN usuario u ON u.id = a.id_us
INNER JOIN vehiculo v ON a.id_ve
WHERE a.id = ?;
";

// Obtener lista de sucursales para selects
$sucursales = [];
try {
    $stmt = $cn->prepare($query);
    $stmt->bind_param("d", intval($id));
    $stmt->execute();
    $res = $stmt->get_result();
    /*
    while ($s = $res->fetch_assoc()) {
        $sucursales[] = $s;
    }*/
    $r = $res->fetch_assoc();

    $devuelto = $r["devuelto"] ?? "";
    $desde = $r["desde"] ?? "";
    $hasta = $r["hasta"] ?? "";
    $precio = $r["precio"] ?? "";
    $nombre_recogida = $r["nombre_recogida"] ?? "";
    $nombre_devolucion = $r["nombre_devolucion"] ?? "";
    $us_nombre = $r["us_nombre"] ?? "";
    $us_apellido1 = $r["us_apellido1"] ?? "";
    $us_apellido2 = $r["us_apellido2"] ?? "";
    $us_dni = $r["us_dni"] ?? "";
    $marca = $r["marca"] ?? "";
    $modelo = $r["modelo"] ?? "";
    $matricula = $r["matricula"] ?? "";
    $fianza = $r["fianza"] ?? "";

} catch (mysqli_sql_exception $e) {
    // ignore, mostrará selects vacíos
}

// Campos
/*
$usuario = htmlspecialchars(($r['usuario_nombre'] ?? '') . ' (' . ($r['usuario_email'] ?? '') . ')');
$vehiculo = htmlspecialchars(($r['vehiculo_marca'] ?? '') . ' ' . ($r['vehiculo_modelo'] ?? '') . ' - ' . ($r['vehiculo_matricula'] ?? ''));
$desde = htmlspecialchars($r['desde'] ?? '');
$hasta = htmlspecialchars($r['hasta'] ?? '');
$fianza = htmlspecialchars(number_format($r['fianza'] ?? 0, 2));
$precio = htmlspecialchars(number_format($r['precio'] ?? 0, 2));
$metodo = htmlspecialchars($r['metodo_pago'] ?? '');
$devuelto = intval($r['devuelto']) ? true : false;
$id_suc_rec = intval($r['id_suc_rec'] ?? 0);
$id_suc_dev = intval($r['id_suc_dev'] ?? 0);
*/
?>
<h1>Ver / Editar Alquiler</h1>
<h3><a href="Alquiler.php">Volver atrás</a></h3>

<form action="<?= srv('admin/editarAlquiler') ?>" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <table>
        <tr>
            <td>ID: </td>
            <td><input type="text" disabled value="<?= $id ?>"></td>
        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" disabled value="<?= $us_nombre ?>"></td>
        </tr>
         <tr>
            <td>Apellido 1: </td>
            <td><input type="text" disabled value="<?=  $us_apellido1 ?>"></td>
        </tr>
         <tr>
            <td>Apellido 2: </td>
            <td><input type="text" disabled value="<?= $us_apellido2 ?>"></td>
        </tr>
         <tr>
            <td>DNI: </td>
            <td><input type="text" disabled value="<?= $us_dni ?>"></td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td><input type="text" disabled value="<?= $marca ?>"></td>
        </tr>
        <tr>
            <td>Modelo: </td>
            <td><input type="text" disabled value="<?= $modelo ?>"></td>
        </tr>
        <tr>
            <td>Matricula: </td>
            <td><input type="text" disabled value="<?= $matricula ?>"></td>
        </tr>
        <tr>
            <td>Desde: </td>
            <td><input type="date" name="desde" value="<?= $desde ?>" required></td>
        </tr>
        <tr>
            <td>Hasta: </td>
            <td><input type="date" name="hasta" value="<?= $hasta ?>" required></td>
        </tr>
        <tr>
            <td>Fianza: </td>
            <td><input type="number" step="0.01" name="fianza" value="<?= $fianza ?>" required></td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td><input type="number" step="0.01" name="precio" value="<?= $precio ?>" required></td>
        </tr>
        <tr>
            <td>Recogida: </td>
            <td><input type="text" disabled value="<?= $nombre_recogida ?>"></td>
        </tr>
        <tr>
            <td>Devuelto: </td>
            <td><input type="checkbox" name="devuelto" value="1" <?=$nombre_devolucion ? 'checked' : '' ?>></td>
        </tr>
        <tr>
            <td>Sucursal recogida: </td>
            <td>
                <select name="id_suc_rec">
                    <?php foreach ($sucursales as $s): ?>
                        <option value="<?= $s['id'] ?>" <?= $s['id'] == $id_suc_rec ? 'selected' : '' ?>><?= htmlspecialchars($s['nombre']) ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Sucursal devolución: </td>
            <td>
                <select name="id_suc_dev">
                    <?php foreach ($sucursales as $s): ?>
                        <option value="<?= $s['id'] ?>" <?= $s['id'] == $id_suc_dev ? 'selected' : '' ?>><?= htmlspecialchars($s['nombre']) ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Guardar Cambios"></td>
        </tr>
    </table>
</form>