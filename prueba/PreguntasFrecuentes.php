<!DOCTYPE html>
<html lang="en">

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
            <a class="navbar-brand" href="#">Alquiza Ibiza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
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

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQ Alquiza</title>
        <link rel="stylesheet" href="faq.css">
    </head>

    <body>
      
    <section class="hero-section">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>

            <section class="faq-container mt-5 mb-5">
                <h1 class="faq-title"><strong>Preguntas Frecuentes</strong></h1>

                <ul class="faq-list">

                    <li class="faq-item">
                        <input type="checkbox" id="faq1" class="faq-toggle">
                        <label for="faq1" class="faq-question"><strong>Cliente:</strong> ¿Qué requisitos necesito para alquilar un coche?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Carnet válido, ser mayor de 21 años y tarjeta de pago.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq2" class="faq-toggle">
                        <label for="faq2" class="faq-question"><strong>Cliente:</strong> ¿Puedo cancelar una reserva?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Sí, gratis hasta 24h antes de la recogida.</div>
                    </li>
                 
                    <li class="faq-item">
                        <input type="checkbox" id="faq3" class="faq-toggle">
                        <label for="faq3" class="faq-question"><strong>Cliente:</strong> ¿El precio incluye seguro?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Sí, incluye seguro básico. Puedes añadir todo riesgo.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq4" class="faq-toggle">
                        <label for="faq4" class="faq-question"><strong>Cliente:</strong> ¿Hay límite de kilómetros?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Depende del modelo. Muchos incluyen kilometraje ilimitado.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq5" class="faq-toggle">
                        <label for="faq5" class="faq-question"><strong>Cliente:</strong> ¿Puedo devolver el coche en otra sucursal?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Sí, sin ningun problema.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq6" class="faq-toggle">
                        <label for="faq6" class="faq-question"><strong>Cliente:</strong> ¿Se necesita depósito o fianza?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Sí, se bloquea una fianza en tarjeta al recoger el coche.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq8" class="faq-toggle">
                        <label for="faq8" class="faq-question"><strong>Cliente:</strong> ¿Ofrecen entrega en el aeropuerto?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Sí, puedes recoger el coche directamente en el aeropuerto.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq9" class="faq-toggle">
                        <label for="faq9" class="faq-question"><strong>Cliente:</strong> ¿Qué pasa si devuelvo el coche tarde?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Puede aplicarse un cargo adicional según el retraso.</div>
                    </li>

                    <li class="faq-item">
                        <input type="checkbox" id="faq10" class="faq-toggle">
                        <label for="faq10" class="faq-question"><strong>Cliente:</strong> ¿Puedo alquilar algun otro vehiculo en vez de un coche?</label>
                        <div class="faq-answer"><strong>Alquiza:</strong> Sí, tenemos motos y furgonetas disponibles en Ibiza.</div>
                    </li>
                </ul>
            </section>
        </section>

    </body>

    </html>
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

</html>