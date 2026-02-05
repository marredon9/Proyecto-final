<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?=headerPagina()?>
</head>

<body>

    <!-- Navbar -->
    <?= navbar() ?>

    <section class="hero-section position-relative min-vh-100">
        <?=fondoVideo()?>
        <!-- Contenedor del formulario en un cuadro azul con transparencia -->
        <div id="contact-card">
            <h1><b>Política de Privacidad</b></h1>

            <p>
                La información personal proporcionada por los usuarios será utilizada únicamente para la gestión de
                reservas,
                atención al cliente y cumplimiento de obligaciones legales.
            </p>

            <p>
                No compartimos ni vendemos datos personales a terceros, salvo cuando sea necesario para prestar el
                servicio
                o por requerimiento legal.
            </p>

            <p>
                Al utilizar este sitio web, el usuario acepta esta política de privacidad.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>

</body>

</html>