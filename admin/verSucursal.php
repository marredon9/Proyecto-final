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
?>
<form action="<?=srv("admin/editarSucursal")?>" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <table>
        <tr>
            <td>ID: </td>
            <td><input type="text" disabled value="<?=$id?>"></td>
        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name="nombre" value="<?=$nombre?>" required></td>
        </tr>
        <tr>
            <td>Dirección: </td>
            <td><textarea required name="direccion"><?=$direccion?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Guardar Cambios"></td>
        </tr>
    </table>
</form>