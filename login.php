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
<?= navbar() ?>
<?= footer() ?>