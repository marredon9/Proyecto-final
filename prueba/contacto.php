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

    <!-- Form de contacto -->
    <section class="hero-section mb-5 position-relative min-vh-100">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
        <div id="contact-card" class="card" style="width: 600px;">

            <div class="card-body">
                <h5 class="card-title">Contacta con nosotros</h5>
                <p>Puedes encontrarnos en:</p>
                <div class="branch">
                    <p>Av. d'Isidor Macabich, 24, 07800 Eivissa</p>
                    <p class="phone">+34 971 31 80 84</p>
                </div>
                <hr class="separator">
                <div class="branch">
                    <p>Carretera del Aeropuerto, km 7.5, 07818 - Sant Jordi de ses Salines</p>
                    <p class="phone">+34 971 39 87 31</p>
                </div>
            </div>
            <div class="card-body">
                <a href="mailto:info@alquizaibiza.com" class="email-link">info@alquizaibiza.com</a>
            </div>
        </div>
    </section>
    <!-- Footer -->

    <?= footer() ?>


</body>

</html>