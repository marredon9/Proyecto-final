<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
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

        <section class="faq-container">
            <h1 class="faq-title"><strong>Nuestras Sucursales</strong></h1>

            <ul class="faq-list">
                <li class="faq-item">
                    <input type="checkbox" id="faq2" class="faq-toggle">
                    <label for="faq2" class="faq-question"><strong>Sucursal Nº1:</strong> Aeropuerto Ibiza</label>
                    <div class="faq-answer">Nuestra primera sucursal se encuentra en el aeropuerto de Ibiza, haciendo
                        asi que nuestros clientes tengan facilidad para llegar a la ciudad.</div>
                </li>

                <ul class="faq-list">
                    <li class="faq-item">
                        <input type="checkbox" id="faq1" class="faq-toggle">
                        <label for="faq1" class="faq-question"><strong>Sucursal Nº2:</strong>Eivissa</label>
                        <div class="faq-answer">Nuestra segunda sucursal se encuentra en la Calle Carrer de Madrid, al
                            lado de la incorporación Carrer de Jaume |.</div>
                    </li>

                </ul>
        </section>
    </section>

    <?= footer() ?>
</body>

</html>