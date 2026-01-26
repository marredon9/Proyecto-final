<?php
include "include.php";
session_start();
$sesion = obtenerSesion();

if ($sesion == "") { //si no ha iniciado sesión
    ?>

<h1>No has iniciado sesión</h1>
<a href="buscar.php">Buscar</a>
<a href="login.php">Iniciar sesión</a>
<a href="registro.php">Registrarse</a>

    <?php
} else { //si ha iniciado sesión (si es admin, redirige automáticamente a su página propia)
    ?>

<h1>Bienvenido, <?=$sesion->nombre?></h1>
<a href="buscar.php">Buscar</a>
<a href="<?=srv("cerrarSesion")?>">Cerrar Sesión</a>

    <?php
}
?>