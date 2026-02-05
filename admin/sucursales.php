<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

// Iniciar sesión o verificar si hay una cookie de tema

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?=headerPagina()?>
</head>

<body>
    <!-- Navbar -->
    <?= navbarAdmin() ?>
    <div class="admin mt-5 mb-5 text-center">
        <h1>Gestión de sucursales</h1>
        <h3><a href="<?=lnk("admin/index.php")?>">Volver atrás</a></h3>
        <a href="<?=lnk("admin/añadirSucursal.php")?>">Añadir Sucursal</a>
        <table class="mx-auto">
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
                        <td><a href="<?=lnk("admin/usuarios.php?id=" . $id)?>">Ver Detalles</a></td>
                        <td><input type="text" disabled value="<?= $id ?>"></td>
                        <td><input type="text" disabled value="<?= $nombre ?>"></td>
                    </tr>
                    <?php
                }
            } catch (mysqli_sql_exception $e) {

            }
            ?>
        </table>
    </div>
    <?= footer() ?>
</body>

</html>