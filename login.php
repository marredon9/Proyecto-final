<?php
include "include.php";
?>
<form action="<?=srv("iniciarSesion")?>" method="POST">
    <table>
        <tr>
            <td>DNI: </td>
            <td><input type="text" name="dni" required></td>
        </tr>
        <tr>
            <td>Contraseña: </td>
            <td><input type="password" name="contraseña" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Iniciar Sesión"></td>
        </tr>
    </table>
</form>