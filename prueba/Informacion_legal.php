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

<body class="<?php echo $tema === 'dark' ? 'dark-theme' : ''; ?>">

    <!-- Navbar -->
    <?= navbar() ?>

    <section class="hero-section mb-5 position-relative min-vh-100">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
        <!-- Contenedor del formulario en un cuadro azul con transparencia -->
        <div id="contact-card">
            <h1 class="text-center mb-3"><b>Informacion Legal</b></h1>
            <div>
                <div class="informacion-legal">
                    <p>Bienvenido a <strong>[Nombre de tu empresa]</strong>. Antes de utilizar nuestros servicios, por
                        favor lee detenidamente la siguiente información legal:</p>
                    <p>Para cualquier duda o consulta, contacta con nosotros en <a>[correo electrónico]</a> o en el
                        teléfono [número de teléfono].</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?= footer() ?>

    <!-- Scripts -->
</body>

</html>