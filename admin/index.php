<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}


gestionarModoOscuro();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?= headerPagina() ?>
</head>

<body>

    <!-- Navbar -->
    <?= navbarAdmin() ?>
    <section class="hero-section position-relative min-vh-100">
        <?= fondoVideo() ?>
        <div id="contact-card" style="width: 800px;">
            <h1 class="text-center mb-3">Bienvenido, <?= $sesion->nombre ?></h1>
            <h3>Has iniciado sesión como administrador.</h3>
            <div>
                <ul>
                    <li><a href="<?= lnk("admin/usuarios.php") ?>">Administrar usuarios</a></li>
                    <li><a href="<?= lnk("admin/vehiculos.php") ?>">Administrar vehiculos</a></li>
                    <li><a href="<?= lnk("admin/alquileres.php") ?>">Administrar alquileres</a></li>
                    <li><a href="<?= lnk("admin/sucursales.php") ?>">Administrar sucursales</a></li>
                </ul>
                <a href="<?=lnk("servlets/cerrarSesion.php")?>" class="btn btn-primary btn-lg px-5">Cerrar Sesion</a>
            </div>
        </div>
    </section>

    <?= footer() ?>
</body>

</html>