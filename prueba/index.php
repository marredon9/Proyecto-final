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
            <a class="navbar-brand" href="#">Alquiza Ibiza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="#flota">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#coches">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#motos">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#furgonetas">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner destacado con video -->
    <section class="hero-section mb-5 position-relative">
        <!-- Video de olas -->
        <video class="background-video" autoplay muted loop playsinline>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
        <!-- Contenido -->
        <div class="hero-content container h-100 d-flex flex-column justify-content-center align-items-center text-center text-white position-relative" style="z-index: 1;">
            <h1 class="display-4 fw-bold mb-3">¡Tu mejor opción en Ibiza!</h1>
            <p class="lead mb-4">Alquiler de coches, motos y furgonetas con la mejor calidad y precio</p>
            <button type="button" class="btn btn-primary btn-lg btn-rounded" data-bs-toggle="modal"
                data-bs-target="#reservaModal">
                Reserva Ahora
            </button>
        </div>
    </section>

    <!-- Modal de reserva -->
    <div class="modal fade" id="reservaModal" tabindex="-1" aria-labelledby="reservaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content custom-modal">
                <div class="modal-header border-0 d-flex justify-content-between align-items-center p-4">
                    <h5 class="modal-title" id="reservaModalLabel">Reserva tu vehículo</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <form id="reservaForm" action="reservar.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="123-456-7890" required>
                            </div>
                            <div class="col-md-6">
                                <label for="vehiculo" class="form-label">Tipo de vehículo</label>
                                <select class="form-select" id="vehiculo" name="vehiculo" required>
                                    <option value="">Selecciona un vehículo</option>
                                    <option value="coches">Coches</option>
                                    <option value="motos">Motos</option>
                                    <option value="furgonetas">Furgonetas</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha" class="form-label">Fecha de reserva</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                            <div class="col-md-6">
                                <label for="horario" class="form-label">Horario</label>
                                <input type="time" class="form-control" id="horario" name="horario" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Enviar reserva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección flota vehículos -->
    <h2 class="section-title mb-4 text-center">Descubra Nuestra Flota</h2>
    <div class="vehicles-wrapper d-flex justify-content-center overflow-x-auto">
        <div class="vehicles d-flex gap-3">
            <!-- Vehículos en línea -->
            <div class="vehicle">
                <a href="#"><img src="https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.4&auto=format&fit=crop&w=800&q=80" alt="Minivans" /></a>
                <p>Minivans</p>
            </div>
            <div class="vehicle">
                <a href="#"><img src="https://images.unsplash.com/photo-1616077788687-26f7f4f2f93c?ixlib=rb-4.0.4&auto=format&fit=crop&w=800&q=80" alt="Eléctricos" /></a>
                <p>Eléctricos</p>
            </div>
            <div class="vehicle">
                <a href="#"><img src="https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.4&auto=format&fit=crop&w=800&q=80" alt="Gasolina" /></a>
                <p>Gasolina</p>
            </div>
            <div class="vehicle">
                <a href="#"><img src="https://images.unsplash.com/photo-1575767741836-1f8f4f7b1f2f?ixlib=rb-4.0.4&auto=format&fit=crop&w=800&q=80" alt="Scooter" /></a>
                <p>Motos</p>
            </div>
            <div class="vehicle">
                <a href="#"><img src="https://images.unsplash.com/photo-1625165519484-7f94b3b6f7d8?ixlib=rb-4.0.4&auto=format&fit=crop&w=800&q=80" alt="Furgoneta" /></a>
                <p>Furgonetas</p>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <button class="view-button">Ver Nuestros Vehículos</button>
    </div>

    <!--Zona gris -->

    <div class="seccion-gris mt-5">
        <div class="container justify-content-center text-center">
            <h1><b>¿QUIENES SOMOS?</b></h1>
            <div class="row mt-3">
                <div class="col slide-in-left">
                    <img src="../img/escaparate.png" width="auto" height="300px" class="img-borde">
                </div>
                <div class="col slide-in-right mt-3">
                    En Alquiza, somos una empresa familiar con corazón ibicenco, dedicada a ofrecerte la mejor experiencia de alquiler de vehículos en la isla. Sabemos lo importante que es moverse con libertad, por eso ponemos a tu disposición una flota variada de coches, motos y furgonetas, perfectos tanto para los turistas que quieren explorar cada rincón,
                    como para los locales que necesitan soluciones de movilidad para su día a día. Nos enorgullece nuestro trato cercano y la flexibilidad para adaptarnos a todas tus necesidades, garantizando siempre la calidad y el mejor servicio.
                </div>
            </div>
        </div>
    </div>

    <!-- Contacto y footer -->
    <div class="container my-5 py-4" id="contacto">
        <h2 class="section-title mb-4">Contacto</h2>
        <p class="text-center">¿Tienes dudas? Contáctanos y te ayudaremos.</p>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <p><strong>Email:</strong> contacto@alquiza.com</p>
                <p><strong>Teléfono:</strong> +34 600 123 456</p>
            </div>
        </div>
    </div>

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
                    <p>Información legal</p>
                    <p>Política de gestión de daños</p>
                    <p>Política de depósito</p>
                    <p>Política de Privacidad</p>
                    <p>Términos y Condiciones</p>
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
    document.addEventListener("DOMContentLoaded", function() {
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