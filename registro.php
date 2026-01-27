<?php
include "include.php";
session_start();
$sesion = obtenerSesion();

?>

<h1>REGISTRO</h1>

<!-- <form action="<?=srv("registrarUsuario")?>" method="POST"> -->
<!-- <form action="registrarUsuario.php" method="POST"> -->
<form action="<?=srv("registrarUsuario")?>" method="POST">
    <table border="1">
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td>1<sup>er</sup> apellido: </td>
            <td><input type="text" name="apellido1" required></td>
        </tr>
        <tr>
            <td>2<sup>do</sup> apellido: </td>
            <td><input type="text" name="apellido2"></td>
        </tr>
        <tr>
            <td>DNI:</td>
            <td><input type="text" name="dni" required></td>
        </tr>
        <tr>
            <td>Correo electrónico:</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Contraseña:</td>
            <td><input type="password" name="contraseña"></td>
        </tr>
        <tr>
            <td>Repetir Contraseña:</td>
            <td><input type="password" name="repetirContraseña"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Reiniciar Campos"></td>
            <td><input type="submit" value="Crear Cuenta"></td>
        </tr>
    </table>
</form>