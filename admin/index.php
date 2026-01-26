<?php
include "include.php";
obtenerSesion();
verificarAdmin();
if ($sesion == "") debug_header("Location: ../login.php");
?>
<h1>Has iniciado sesión como administrador!</h1>
<p>Cosas que hacer</p>
<ul>
    <li><a href="gestionUsuarios.php">Gestionar usuarios</a></li>
    <li>Gestionar coches</li>
    <li>Gestionar modelos</li>
    <li>Gestionar sucursales</li>
</ul>
