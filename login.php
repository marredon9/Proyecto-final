<?php
include "include.php";
$codigoError = $_GET["error"] ?? -1;
$errores = [
    "Error en la base de datos.",
    "La contraseña es incorrecta o el usuario no existe"
];

if ($codigoError != -1) $codigoError = $errores[$codigoError];
//var_dump($codigoError);
?>
<form action="iniciarSesion.php" method="POST">
    <table border="1">
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
            <td><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>
<?php
if ($codigoError != -1) {
    ?><h1><?=$codigoError?></h1><?php
}
?>