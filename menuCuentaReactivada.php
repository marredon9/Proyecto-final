<?php
include "include.php";
session_start();
if (isset($_SESSION["sesion"]))
    $session = unserialize($_SESSION["sesion"]);
else
    $session = "";
?>
<!DOCTYPE html>
<?= footer() ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuenta reactivada</title>

    <script>
        function mostrarMensaje() {
            alert("Tu cuenta ha sido reactivada");
            return true; 
        }
    </script>
</head>
<body>

<h1>Tu cuenta ha sido reactivada.</h1>

<form action="index.php" onsubmit="return mostrarMensaje();">
    <input type="submit" value="Aceptar">
</form>

</body>
</html>
