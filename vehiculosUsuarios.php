<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<?= headerPagina() ?>

<body>

    <!-- Navbar -->
    <?= navbar()?>

    


    <!-- Footer -->
    <?= footer()?>
</body>
</html>