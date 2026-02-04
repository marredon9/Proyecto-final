<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

/*
Formulario para añadir sucursales:
Nombre
Direccion
*/

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?=headerPagina()?>
</head>

<body>
    <?= navbarAdmin() ?>
    
        <form action="<?= srv("admin/añadirSucursal") ?>" method="post">
            <table>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="nombre" required></td>
                </tr>
                <tr>
                    <td>Dirección: </td>
                    <td><textarea name="direccion"></textarea></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Vaciar campos"></td>
                    <td><input type="submit" value="Añadir sucursal"></td>
                </tr>
            </table>
        </form>
    
    <?= footer() ?>
</body>

</html>