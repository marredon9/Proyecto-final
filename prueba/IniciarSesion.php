<?php
// Iniciar sesión o verificar si hay una cookie de tema
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
    <link rel="stylesheet" href="sass/style.css" />
    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body class="<?php echo $tema === 'dark' ? 'dark-theme' : ''; ?>">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">Alquiza Ibiza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="index.php">Principal</a></li>
                    <li class="nav-item"><a class="nav-link" href="coches.php">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="motos.php">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="furgonetas.php">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    <!-- Enlace para cambiar a modo oscuro -->
                    <a href="?tema=dark" class="btn btn-secondary">Modo Oscuro</a>

                    <!-- Enlace para cambiar a modo claro -->
                    <a href="?tema=light" class="btn btn-light">Modo Claro</a>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-section">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
        <!-- Contenedor del formulario en un cuadro azul con transparencia -->
        <div class="form-container">
            <!-- Formulario de login -->
            <form method="post" action="">
                <div class="login-card">
                    <h4 class="text-center mb-3"><b>Usuario</b></h4>
                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control email-input" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control password-input" required />
                    </div>
                    <div class="text-end">
                        <input type="submit" class="btn btn-custom" value="Entrar" />
                    </div>
                </div>
            </form>
            <!-- Texto de registro justo debajo del formulario -->
            <div class="register-text mt-2">
                <strong class="negro">¿Aún no tienes cuenta con nosotros?</strong>
                <a href="Registrarse.php">Regístrate aquí</a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer-alquiza seccion-azul">
        <div class="container">
            <div class="row">
                <!-- IZQUIERDA: LOGO + MAPA -->
                <div class="col-lg-5 col-md-6 col-12 footer-map">
                    <!-- MAPA NO SE TOCA -->
                    <div id="map" style="height: 350px; width: 100%; border-radius: 15px; margin: 30px 0;"></div>
                </div>
                <!-- CENTRO -->
                <div class="col-lg-3 col-md-3 col-6 footer-col">
                    <h4>MÁS INFORMACIÓN</h4>
                    <p><a href="PreguntasFrecuentes.php">Preguntas frecuentes</a></p>
                    <p><a href="Contacto.php">Contacta con nosotros</a></p>
                    <p><a href="NuestrasSucursales.php">Nuestras sucursales</a></p>
                </div>

                <!-- DERECHA -->
                <div class="col-lg-4 col-md-3 col-6 footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p><a href="Informacion_legal.php">Información legal</a></p>
                    <p><a href="PoliticasDaños.php">Política de gestión de daños</a></p>
                    <p><a href="PoliticasDeposito.php">Política de gestión de daños</a></p>
                    <p><a href="PoliticaPrivacidad.php">Política de Privacidad</a></p>
                    <p><a href="TerminosCondiciones.php">Términos y Condiciones</a></p>
                </div>
            </div>
        </div>
        <!-- BARRA INFERIOR -->
        <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
            <span>© Alquiza 2026</span>
            <span>Política de cookies | Menciones legales | Sites maps</span>
            <span class="footer-social">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-x-twitter"></i>
            </span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Coordenadas de Ibiza
        var map = L.map("map").setView([38.9089, 1.4321], 13);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "© OpenStreetMap contributors",
        }).addTo(map);
        L.marker([38.9089, 1.4321])
            .addTo(map)
            .bindPopup("Alquiza - Tu alquiler en Ibiza")
            .openPopup();
    </script>
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
</body>

</html>