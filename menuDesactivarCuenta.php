<?php
include "include.php";
session_start();
if (isset($_SESSION["sesion"])) {
    $sesion = unserialize($_SESSION["sesion"]);
} else {
    $sesion = "";
}

if ($sesion == "") {
    header("Location: index.php");
}
?>
<h1>¿De verdad deseas desactivar tu cuenta?</h1>
<form action="index.php"><input type="submit" value="Volver atrás"></form>
<form action="desactivarMiCuenta.php"><input type="submit" value="Estoy segur@"></form>