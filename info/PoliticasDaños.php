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
            <h1 class="text-center mb-3"><b>Política de gestión de daños</b></h1>
            <div>
                <div class="informacion-legal">
                    <p>
                        Todos los vehículos son inspeccionados antes y después de cada alquiler.
                        El estado del vehículo se documenta y se pone a disposición del cliente.
                    </p>

                    <p>
                        Si al finalizar el alquiler se detectan daños adicionales, la empresa
                        informará al cliente de forma transparente, incluyendo evidencia y
                        valoración del coste de reparación.
                    </p>

                    <p>
                        La responsabilidad del cliente se aplicará conforme al contrato y a la
                        cobertura contratada. El desgaste normal del vehículo no será considerado
                        daño imputable.
                    </p>

                    <p>
                        Nuestro objetivo es garantizar una gestión justa, clara y conforme a la
                        normativa vigente.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>
</body>

</html>