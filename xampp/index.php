<?php
include "sesionUsuario.php";
//header("Location: registro.php");
session_start();
$sesion = unserialize($_SESSION["sesion"] ?? serialize(0));
if ($sesion != 0) {
    var_dump($sesion);
    ?><h1>Bienvenido, <?=$sesion->nombre?></h1><?php
}
?>
<a href="registro.php">Registrar usuario</a>
<a href="login.php">Iniciar Sesión</a>
<?=serialize($sesion)?>