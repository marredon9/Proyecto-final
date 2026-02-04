<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "includes/footer.php";
include "includes/navbar.php";
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
            <h1 class="text-center mb-3"><b>Política de deposito</b></h1>
            <p>
              Muchas gracias por elegir Alquiza para su alquiler de coches en Ibiza.
            </p>
            <p>
                Esperemos que disfrute de su estancia en Ibiza y de su experiencia con Alquiza. Nos vemos pronto.
            </p>
        </div>
    </section>

    <?= footer() ?>
</body>

</html>