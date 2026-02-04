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
    <?= navbar() ?>

    <section class="hero-section position-relative min-vh-100">
        <?= fondoVideo() ?>
        <!-- Contenedor del formulario en un cuadro azul con transparencia -->
        <div id="contact-card">
            <h1 class="text-center mb-3"><b>Mapa del Sitio</b></h1>
            <p>El presente mapa del sitio web <strong>Alquiza</strong> tiene como finalidad facilitar a los usuarios el acceso a los contenidos y secciones disponibles, permitiendo una navegación más clara y organizada dentro de la página.</p>

            <p>A través del sitemap, el usuario puede localizar de manera rápida las principales páginas, servicios e información ofrecida en este sitio web, mejorando así la experiencia de navegación y la accesibilidad.</p>

            <p>Alquiza se reserva el derecho de actualizar o modificar la estructura y contenidos del sitio web en cualquier momento. Para cualquier consulta, puede contactar a través del correo electrónico <strong>info@alquizaibiza.com</strong>.</p>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>
</body>
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
</html>