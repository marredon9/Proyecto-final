<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alquiza</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Alquiza Ibiza</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="IniciarSesion.php">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#coches">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#motos">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#furgonetas">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>

        <div class="form-container">
            <form method="post" action="Registrarse.php" class="w-100">
                <h5 class="text-center mb-4"><b>Registrarse</b></h5>

                <div class="mb-2">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control email-input" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Apellido 1</label>
                        <input type="text" name="apellido1" class="form-control email-input" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Apellido 2</label>
                        <input type="text" name="apellido2" class="form-control email-input" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="telefono" class="form-control email-input"
                            maxlength="9" pattern="[0-9]{9}" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label">DNI</label>
                        <input type="text" name="dni" class="form-control email-input"
                            maxlength="9" pattern="[0-9]{8}[A-Za-z]" required>
                    </div>
                </div>

                <div class="mb-2">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control email-input" required>
                </div>

                <div class="mb-2">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control email-input" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control password-input" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Repetir contraseña</label>
                        <input type="password" name="password2" class="form-control password-input" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn-custom">Crear cuenta</button>
                </div>
            </form>

            <div class="register-text mt-3">
                <strong>¿Ya tienes cuenta?</strong>
                <a href="IniciarSesion.php">Inicia sesión</a>
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
                    <p>Preguntas frecuentes</p>
                    <p>Contacta con nosotros</p>
                    <p>NUESTRAS SUCURSALES</p>
                </div>
                <!-- DERECHA -->
                <div class="col-lg-4 col-md-3 col-6 footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p>Información legal</p>
                    <p>Política de gestión de daños</p>
                    <p>Política de depósito</p>
                    <p>Política de Privacidad</p>
                    <p>Términos y Condiciones</p>
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