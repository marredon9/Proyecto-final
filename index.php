<?php
include "include.php";
//header("Location: registro.php");
session_start();
if (isset($_SESSION["sesion"])) {
    $sesion = unserialize($_SESSION["sesion"]);
    //var_dump($sesion);
    ?><h1>Bienvenido, <?=$sesion->nombre?></h1><?php
}
?>
<?= footer() ?>
<a href="registro.php">Registrar usuario</a>
<a href="login.php">Iniciar Sesión</a>
<a href="cerrarSesion.php">Cerrar Sesión</a>
<a href="menuDesactivarCuenta.php">Desactivar mi cuenta</a>
<?= navbar() ?>
<br>
<hr>