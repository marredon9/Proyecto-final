<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiza</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="../CSS/index.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>

    <div class="fondo-imagen">
        <nav class="navbar position-relative mb-3">
            <div class="container-fluid d-flex align-items-center">

                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
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


        <div class="container d-flex justify-content-center mt-4">
            <div class="escaparate p-4">

                <div class="text-center mb-3">
                    ¿Tipo de vehículo?
                    <div class="mt-2">
                        <img src="../img/coche.png" width="40">
                        <img src="../img/motos.png" width="35">
                        <img src="../img/camion.png" width="40">
                    </div>
                </div>

                <form>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-2 d-flex align-items-center">
                            <label class="fondo-blanco me-2">Fecha Inicio</label>
                            <input type="date" class="form-control input-fecha">
                        </div>

                        <div class="col-md-6 mb-2 d-flex align-items-center">
                            <label class="fondo-blanco me-2">Fecha Final</label>
                            <input type="date" class="form-control input-fecha">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Nº de personas</label>
                        <input type="number" min="1" max="9" class="form-control input-fecha">
                    </div>

                    <div class="mb-3">
                        Asiento de seguridad infantil
                        <br>
                        <label class="mycheckbox ms-2">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>

                    <div class="mb-4">
                        Mascotas
                        <br>
                        <label class="mycheckbox ms-2">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>

                    <div class="text-end">
                        <button id="boton" class="btn btn-light">Buscar</button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <div class="fondo-blanco">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-sm">
                    <div class="card rounded-pill text-center overflow-hidden border-0 shadow m-5" style="max-width: 18rem;">
                        <img src="../img/Ofertas.png" class="card-img-top" alt="...">
                        <div class="card-body bg-dark text-white mt-2">
                            <h5 class="card-title fw-bold">Ofertas y Promociones</h5>
                            <p class="card-text">Obtén un 20% en el alquiler de coches, motos y furgonetas este invierno.</p>
                            <a href="#" class="btn btn-light px-3 rounded-pill">Ir Oferta</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card rounded-pill text-center overflow-hidden border-0 shadow m-5" style="max-width: 18rem;">
                        <img src="../img/Ruta.png" class="card-img-top" alt="...">
                        <div class="card-body bg-dark text-white mt-2">
                            <h5 class="card-title fw-bold">Planifica tu ruta</h5>
                            <p class="card-text">Planifica los sitios a los que deseas ir y te aconsejamos</p>
                            <a href="#" class="btn btn-light px-3 rounded-pill">Hacer Ruta</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card rounded-pill text-center overflow-hidden border-0 shadow m-5" style="max-width: 18rem;">
                        <img src="../img/furgoneta1.png" class="card-img-top" alt="...">
                        <div class="card-body bg-dark text-white mt-2">
                            <h5 class="card-title fw-bold">Alquila tu furgoneta</h5>
                            <p class="card-text">Tu furgoneta con un 25% de descuento.</p>
                            <a href="#" class="btn btn-light px-3 rounded-pill">Ir Oferta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion-gris">
        <div class="container justify-content-center text-center">
            <h1>¿QUIENES SOMOS?</h1>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="../img/escaparate.png" width="auto" height="300px" class="img-borde">
                    </div>
                    <div class="col">
                        En Alquiza, somos una empresa familiar con corazón ibicenco, dedicada a ofrecerte la mejor experiencia de alquiler de vehículos en la isla. Sabemos lo importante que es moverse con libertad, por eso ponemos a tu disposición una flota variada de coches, motos y furgonetas, perfectos tanto para los turistas que quieren explorar cada rincón,
                        como para los locales que necesitan soluciones de movilidad para su día a día. Nos enorgullece nuestro trato cercano y la flexibilidad para adaptarnos a todas tus necesidades, garantizando siempre la calidad y el mejor servicio.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fondo-blanco container">
        <div class="col-2"></div>
        <div class="container-fluid">
            <h2 class="mb-4">Nuestra flota de coches, motos y furgonetas</h2>
        </div>
        <hr>
    </div>


    <div class="seccion-azul mt-5">
        <footer class="footer-alquiza">
            <div class="footer-grid">

                <!-- IZQUIERDA: LOGO + MAPA -->
                <div class="footer-col footer-map">
                    <img src="../img/logo.png" class="logo-foter" alt="Logo Alquiza" class="footer-logo">
                    <!-- MAPA NO SE TOCA -->
                    <div id="map" style="height: 350px; width: 100%; border-radius: 15px; margin: 30px 0;"></div>
                </div>

                <!-- CENTRO -->
                <div class="footer-col">
                    <h4>MÁS INFORMACIÓN</h4>
                    <p>Preguntas frecuentes</p>
                    <p>Contacta con nosotros</p>
                    <p>NUESTRAS SUCURSALES</p>
                </div>

                <!-- DERECHA -->
                <div class="footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p>Información legal</p>
                    <p>Política de gestión de daños</p>
                    <p>Política de depósito</p>
                    <p>Política de Privacidad</p>
                    <p>Términos y Condiciones</p>
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
    </div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Coordenadas de Ibiza (puedes cambiarlas por la dirección exacta de tu sucursal)
        var map = L.map('map').setView([38.9089, 1.4321], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([38.9089, 1.4321]).addTo(map)
            .bindPopup('Alquiza - Tu alquiler en Ibiza')
            .openPopup();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>