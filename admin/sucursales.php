<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}
?>
<h1>Gestión de sucursales</h1>
<h3><a href="index.php">Volver atrás</a></h3>
<a href="sucursalAñadir.php">Añadir Sucursal</a>
<table>
    <tr>
        <td><b></b></td>
        <td><b>ID</b></td>
        <td><b>Nombre</b></td>
    </tr>
    <?php
//consulta a base de datos
try {
    $stmt = $cn->prepare("SELECT * FROM sucursal;");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $id = $r["id"];
        $nombre = $r["nombre"];
        ?>
    <tr>
        <td><a href="verSucursal.php?id=<?=$id?>">Ver Detalles</a></td>
        <td><input type="text" disabled value="<?=$id?>"></td>
        <td><input type="text" disabled value="<?=$nombre?>"></td>
    </tr>
        <?php
    }
} catch (mysqli_sql_exception $e) {

}
    ?>
</table>