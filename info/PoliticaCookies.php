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
            <h1 class="text-center mb-3"><b>Politica de Cookies</b></h1>
            <p>En el sitio web <strong>Alquiza</strong> utilizamos cookies propias y de terceros con el objetivo de
                garantizar el correcto funcionamiento de la página.</p>

            <p>Al acceder y navegar por este sitio web, el usuario acepta el uso de cookies conforme a las condiciones
                establecidas en esta Política. El usuario puede permitir, bloquear o eliminar las cookies instaladas en
                su dispositivo mediante la configuración del navegador, aunque la desactivación de cookies puede afectar
                al correcto funcionamiento de nuestra web.</p>

            <p>Alquiza se reserva el derecho de modificar esta Política de Cookies en cualquier momento para adaptarla a
                cambios legales o técnicos. Para cualquier consulta relacionada con el uso de cookies en este sitio web,
                puede contactar a través del correo electrónico <strong>info@alquizaibiza.com</strong>.</p>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>
    <script>
        // Animación al scroll para la sección "¿QUIENES SOMOS?" (si la tienes)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                }
            });
        });
        document.querySelectorAll(".slide-in-left, .slide-in-right").forEach((el) => {
            observer.observe(el);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>