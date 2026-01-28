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
    <link rel="stylesheet" href="style.css" />
    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>
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
                    <li class="nav-item"><a class="nav-link" href="IniciarSesion.php">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="coches.php">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="motos.php">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="furgonetas.php">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Form de contacto -->
    <section class="hero-section mb-5 position-relative">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
        <div class="hero-content container h-100 d-flex flex-column justify-content-center align-items-center position-relative">
            <div class="form-container" id="contacto">
                <form method="post" action="contacto.php" class="w-100">
                    <h5 class="text-center mb-4 text-white"><b>Contáctanos</b></h5>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control email-input" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control email-input" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asunto</label>
                        <input type="text" name="asunto" class="form-control email-input" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Mensaje</label>
                        <textarea name="mensaje" class="form-control email-input" rows="3"
                            placeholder="Introduzca el mensaje aquí" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-custom">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Footer -->

    <footer class="mt-5 text-center">
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
                    <p>Preguntas frecuentes</p>
                    <p>Contacta con nosotros</p>
                    <p>NUESTRAS SUCURSALES</p>
                </div>

                <!-- DERECHA -->
                <div class="col-lg-4 col-md-3 col-6 footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p><a href="Informacion_legal.php">Información legal</a></p>
                    <p><a href="">Política de gestión de daños</a></p>
                    <p><a href="">Política de depósito</a></p>
                    <p><a href="">Política de Privacidad</a></p>
                    <p><a href="">Términos y Condiciones</a></p>
                </div>
            </div>
        </div>

        <!-- BARRA INFERIOR -->
        <div class="footer-bottom">
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

    <!-- Scripts Bootstrap y personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map').setView([38.9089, 1.4321], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([38.9089, 1.4321]).addTo(map)
            .bindPopup('Alquiza - Tu alquiler en Ibiza')
            .openPopup();
    });
</script>

</html>