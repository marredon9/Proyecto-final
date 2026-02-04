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
            <h1 class="text-center mb-3"><b>Menciones Legales</b></h1>
            <p>En cumplimiento con la normativa vigente, el presente sitio web <strong>Alquiza</strong> informa a los usuarios que el acceso y uso de esta página implica la aceptación de las condiciones establecidas en estas menciones legales, así como el compromiso de hacer un uso adecuado de los contenidos y servicios ofrecidos.</p>

            <p>El titular de este sitio web se reserva el derecho de modificar en cualquier momento la información, contenidos o configuración del sitio, sin necesidad de previo aviso, con el fin de adaptarlo a cambios legales, técnicos o de funcionamiento.</p>

            <p>Para cualquier consulta relacionada con este aviso legal o con el uso del sitio web, puede ponerse en contacto a través del correo electrónico <strong>info@alquizaibiza.com</strong>.</p>

        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>
</body>

</html>