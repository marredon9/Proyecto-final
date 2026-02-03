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
}if(!isset($_COOKIE['theme'])){
    setcookie('theme', 'light', time() + (30 * 24 * 60 * 60), "/");
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

    <section class="hero-section position-relative min-vh-100">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
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