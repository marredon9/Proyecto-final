<?php
include "include.php";
session_start();
$sesion = $_SESSION["sesion"] ?? "";
if ($sesion == "") debug_header("Location: ../login.php");
?>
<h1>Has iniciado sesión como administrador!</h1>
<p>Cosas que hacer</p>
<ul>
    <li>Gestionar coches</li>
    <li>Gestionar modelos</li>
    <li>Gestionar sucursales</li>
    <li>Gestionar usuarios</li>
</ul>
