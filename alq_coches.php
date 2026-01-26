<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alquiza — Alquiler de coches</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Tu CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="fondo-imagen">
        <nav class="navbar position-relative mb-3">
            <div class="container-fluid d-flex align-items-center">
                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand logo-center" href="#">
                    <img src="../img/logo.png" class="logo" alt="Logo">
                </a>

                <div class="usuario-container ms-auto">
                    <a href="#">
                        <img src="../img/usuario.png" class="usuario-img" alt="Usuario">
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Título -->
    <section class="cards-title-alquiler">
        <h2>Nuestros coches</h2>
    </section>

    <!-- Contenedor de cards (centrado) -->
    <section class="cards-section">
        <div class="cards-wrapper">
            <main class="cards-container-alquiler" id="miCard">
                <!-- Card: Mini Cooper (única) -->
                <article class="car-card card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 d-flex justify-content-center p-3">
                            <div class="car-image-wrap">
                                <img src="img/mini.png" alt="Mini Cooper" class="img-fluid car-image">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="car-title mb-1">Mini Cooper</h3>
                                        <div class="car-subtitle text-muted small">Urbano · Muy maniobrable</div>
                                    </div>
                                </div>

                                <div class="car-specs d-flex flex-wrap gap-3 my-3">
                                    <div class="spec d-flex align-items-center">
                                        <i class="fa-solid fa-gear me-2 spec-icon"></i>
                                        <span class="text-muted small">Automático</span>
                                    </div>
                                    <div class="spec d-flex align-items-center">
                                        <i class="fa-solid fa-user-friends me-2 spec-icon"></i>
                                        <span class="text-muted small">4 plazas</span>
                                    </div>
                                    <div class="spec d-flex align-items-center">
                                        <i class="fa-solid fa-suitcase me-2 spec-icon"></i>
                                        <span class="text-muted small">2 maletas</span>
                                    </div>
                                </div>

                                <p class="car-desc text-muted mb-3">Perfecto para moverse por el centro con facilidad.
                                    Consumo eficiente.</p>
                            </div>

                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <div class="price-block">
                                    <div class="d-flex align-items-baseline">
                                        <span class="price-eur">€32</span>
                                        <span class="per-day ms-2 text-muted small">/día</span>
                                    </div>
                                    <div class="text-muted small">Kilometraje: 200 km/día · Seguro básico</div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <a class="btn btn-reservar" href="reserva.php?car=mini-cooper">
                                        <i class="fa-solid fa-calendar-plus me-1"></i>Reservar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </section>

    <!-- Footer transparente con emoji -->
    <div class="seccion-azul mt-5 footer-wrapper">
        <footer class="footer-alquiza">
            <div class="footer-grid">
                <div class="footer-col footer-map">
                    <img src="../img/logo.png" class="logo-foter" alt="Logo Alquiza">
                    <div id="map" style="height: 350px; width: 100%; border-radius: 15px; margin: 30px 0;"></div>
                </div>

                <div class="footer-col">
                    <h4>MÁS INFORMACIÓN</h4>
                    <p>Preguntas frecuentes</p>
                    <p>Contacta con nosotros</p>
                    <p>NUESTRAS SUCURSALES</p>
                </div>

                <div class="footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p>Información legal</p>
                    <p>Política de gestión de daños</p>
                    <p>Política de depósito</p>
                    <p>Política de Privacidad</p>
                    <p>Términos y Condiciones</p>
                </div>
            </div>

            <div class="footer-bottom">
                <span>© Alquiza 2026 — 🚗</span>
                <span>Política de cookies | Menciones legales | Sites maps</span>
                <span class="footer-social">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-x-twitter"></i>
                </span>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>
<?= navbar() ?>
<?= footer() ?>