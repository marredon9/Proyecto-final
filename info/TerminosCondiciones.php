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
            <h1 class="text-center mb-3"><b>Terminos Y Condiciones</b></h1>
            <p>
                Al realizar una reserva, el cliente acepta los presentes términos y condiciones establecidos por la
                empresa.
            </p>

            <p>
                El vehículo deberá ser devuelto en la fecha y condiciones acordadas. Cargos adicionales podrán aplicarse
                en caso
                de retrasos, daños, multas o incumplimiento del contrato.
            </p>

            <p>
                El uso del vehículo está limitado al conductor autorizado y para fines legales únicamente.
            </p>

            <p>
                La empresa se reserva el derecho de modificar estos términos sin previo aviso.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>
</body>

</html>