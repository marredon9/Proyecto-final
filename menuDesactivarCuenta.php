<?php
include "include.php";
session_start();
if (isset($_SESSION["sesion"])) {
    $sesion = unserialize($_SESSION["sesion"]);
} else {
    $sesion = "";
}

if ($sesion == "") {
    //header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desactivar cuenta</title>

    <script>
        function confirmarDesactivacion() {
            let respuesta = confirm("¿Quieres desactivar la cuenta?");
            
            if (respuesta) {
                alert("Tu cuenta ha sido desactivada. Esperamos verte pronto de nuevo.");
                return true; 
            } else {
                return false; 
            }
        }
    </script>
</head>
<body>

<h1>¿Deseas desactivar tu cuenta?</h1>

<form action="index.php">
    <input type="submit" value="Volver atrás">
</form>

<form action="desactivarMiCuenta.php" onsubmit="return confirmarDesactivacion();">
    <input type="submit" value="Estoy segur@">
</form>

</body>
</html>
