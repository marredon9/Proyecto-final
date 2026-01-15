<?php
include "db.php";
session_start();
?>

<form action="registrarUsuario.php" method="POST">
    <table border="1">
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td>1<sup>er</sup> apellido: </td>
            <td><input type="text" name="apellido1" required></td>
        </tr>
        <tr>
            <td>2<sup>do</sup> apellido: </td>
            <td><input type="text" name="apellido2" required></td>
        </tr>
        <tr>
            <td>DNI: </td>
            <td><input type="text" name="dni" required></td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Contraseña: </td>
            <td><input type="password" name="contraseña" required></td>
        </tr>
        <tr>
            <td>Repetir Contrasñea: </td>
            <td><input type="password" name="repetirContraseña" required></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento: </td>
            <td><input type="date" name="fecha-nacimiento" max="<?=date("Y-m-d")?>" min="1900-01-01" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>
<?php
$error = $_GET["error"];
$listaErrores = [
    "Error en la base de datos",
    "Hay campos incompletos en el formulario",
    "Ya hay un usuario registrado con ese correo",
    "Las contraseñas no coinciden"
];
if (isset($error)) {
    ?><h1><?=$listaErrores[$error]?></h1><?php
}
?>