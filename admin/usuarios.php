<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}
?>
<!-- 
Esta hoja de estilos es solo para que el listado en HTML quede mas organizado.
Se puede quitar en cualquier momento sin problema
-->
<style>
    form {
        margin: 0px;
    }
</style>

<h1>Listado de usuarios</h1>
<table>
    <tr>
        <td></td>
        <td><b>ID</b></td>
        <td><b>Nombre Completo</b></td>
        <td><b>DNI</b></td>
        <td><b>E-mail</b></td>
        <td><b>Admin</b></td>
    </tr>
    <?php
//hacer consulta a base de datos
try {
    $stmt = $cn->prepare("SELECT * FROM usuario;");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $id = $r["id"] ?? "";
        $nombre = $r["nombre"]?? "";
        $apellido1 = $r["apellido1"] ?? "";
        $apellido2 = $r["apellido2"] ?? "";
        $nombreCompleto = htmlspecialchars($nombre . " " . $apellido1 . " " . $apellido2);
        $dni = $r["dni"] ?? "";
        $email = $r["email"] ?? "";
        $esAdmin = $r["es_admin"] == 1;
        ?>
    <tr>
        <td>
            <a href="verUsuario.php?id=<?=$id?>">Ver</a>
        </td>
        <td><input type="text" disabled value="<?=$id?>"></td>
        <td><input type="text" disabled value="<?=$nombreCompleto?>"></td>
        <td><input type="text" disabled value="<?=$dni?>"></td>
        <td><input type="text" disabled value="<?=$email?>"></td>
        <?php

        if ($esAdmin) {
            ?>
            <td><input type="checkbox" disabled checked></td>
            <?php
        } else {
            ?>
            <td><input type="checkbox" disabled></td>
            <?php
        }

        ?>
    </tr>

        <?php
    }
} catch (mysqli_sql_exception $e) {

}
    ?>
</table>