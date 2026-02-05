<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro()
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
            <h1 class="text-center mb-3"><b>Política de deposito</b></h1>
            <p>
                Para el alquiler del vehículo se requiere un depósito de seguridad, el cual será retenido en la tarjeta
                de crédito
                del conductor principal al momento de la entrega del coche.
            </p>

            <p>
                El depósito será liberado tras la devolución del vehículo en las mismas condiciones,
                sin daños, multas ni cargos adicionales. En caso contrario, podrá retenerse total o parcialmente.
            </p>
        </div>
    </section>

    <?= footer() ?>
</body>

</html>