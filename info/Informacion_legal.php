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
            <h1 class="text-center mb-3"><b>Informacion Legal</b></h1>
            <div>
                <div class="informacion-legal">
                    <p>Bienvenido a <strong>Alquiza Ibiza</strong>. Antes de utilizar nuestros servicios, por
                        favor lee detenidamente la siguiente información legal:</p>
                    <p>Para cualquier duda o consulta, contacta con nosotros en <a href="mailto:info@alquizaibiza.com"
                            class="email-link">info@alquizaibiza.com</a> o en el
                        teléfono +34 912 345 678.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>

    <!-- Scripts -->
</body>

</html>