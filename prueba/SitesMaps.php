<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "includes/footer.php";
include "includes/navbar.php";
session_start();

if (isset($_GET['tema'])) {
    // Cambiar el modo según el parámetro GET y guardar en cookie
    $nuevo_tema = $_GET['tema'];
    setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
    // Redirigir para evitar que se vuelva a enviar el formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Obtener el tema de la cookie
$tema = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alquiza - Alquiler de Coches en Ibiza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="sass/main-<?php echo $_COOKIE['theme'] ?>.css" />
    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>

    <!-- Navbar -->
    <?= navbar() ?>

    <section class="hero-section mb-5 position-relative min-vh-100">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>