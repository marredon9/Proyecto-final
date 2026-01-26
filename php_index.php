<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiza</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>
    <!-- Fondo de imagen + Navbar-->
    <div class="fondo-imagen">
        <nav class="navbar mb-3">
            <div class="container-fluid">
<<<<<<< HEAD:php_index.php
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" class="logo" alt="Logo">
                </a>



=======
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand mx-auto" href="#">
                    <img src="../img/logo.png" class="logo" alt="Logo">
                </a>

>>>>>>> de87242e8113722c4216288b25a5b2d6c7c6669e:PHP/index.php
                <div class="usuario-container">
                    <a href="#">
                        <img src="assets/img/usuario.png" class="usuario-img" alt="Usuario">
                    </a>
                </div>

            </div>
        </nav>


        <!--Zona azul para buscar coches-->
        <div class="container d-flex justify-content-center mt-4">
            <div class="escaparate p-4">
                <div class="text-center mb-3">
                    <h1>¿Tipo de vehículo?</h1>
                    <div class="mt-2">
                        <img src="assets/img/coche.png" width="40">
                        <img src="assets/img/motos.png" width="35">
                        <img src="assets/img/camion.png" width="40">
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
    <!--Cards-->
    <div class="fondo-blanco">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-sm">
                    <div class="card rounded-pill text-center overflow-hidden border-0 shadow m-5" style="max-width: 18rem;">
                        <img src="assets/img/Ofertas.png" class="card-img-top" alt="...">
                        <div class="card-body bg-dark text-white mt-2">
                            <h5 class="card-title fw-bold">Ofertas y Promociones</h5>
                            <p class="card-text">Obtén un 20% en el alquiler de coches, motos y furgonetas este invierno.</p>
                            <a href="#" class="btn btn-light px-3 rounded-pill">Ir Oferta</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card rounded-pill text-center overflow-hidden border-0 shadow m-5" style="max-width: 18rem;">
                        <img src="assets/img/Rutas.png" class="card-img-top" alt="...">
                        <div class="card-body bg-dark text-white mt-2">
                            <h5 class="card-title fw-bold">Planifica tu ruta</h5>
                            <p class="card-text">Planifica los sitios a los que deseas ir y te aconsejamos</p>
                            <a href="#" class="btn btn-light px-3 rounded-pill">Hacer Ruta</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card rounded-pill text-center overflow-hidden border-0 shadow m-5" style="max-width: 18rem;">
                        <img src="assets/img/furgoneta1.png" class="card-img-top" alt="...">
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

            <!--Zona gris -->
            <h1>¿QUIENES SOMOS?</h1>

            <div class="container">
                <div class="row">
                    <div class="col slide-in-left">
<<<<<<< HEAD:php_index.php
                        <img src="assets/img/escaparate.png" width="auto" height="300px" class="img-borde">
=======
                        <img src="../img/escaparate.png" width="auto" height="300px" class="img-borde">
>>>>>>> de87242e8113722c4216288b25a5b2d6c7c6669e:PHP/index.php
                    </div>
                    <div class="col slide-in-right">
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
        <!-- Carousel Section -->
        <div class="py-3" style="width: 90%; margin: 0 auto;">
            <div class="container">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
<<<<<<< HEAD:php_index.php
                            <img src="assets/img/porche.jpg" class="d-block carousel-img" alt="Coche">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/audi-Q8.jpg" class="d-block w-100 carousel-img" alt="Coche">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/bmw.jpg" class="d-block w-100 carousel-img" alt="Coche">
=======
                            <img src="../img/porche.jpg" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Coche">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/audi-Q8.jpg" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Moto">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/bmw.jpg" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Camión">
>>>>>>> de87242e8113722c4216288b25a5b2d6c7c6669e:PHP/index.php
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary">Explorar Flota</button>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer-alquiza seccion-azul mt-5">
        <div class="container">
            <div class="row">
                <!-- IZQUIERDA: LOGO + MAPA -->
                <div class="col-lg-5 col-md-6 col-12 footer-map">
<<<<<<< HEAD:php_index.php
                    <img src="assets/img/logo.png" class="logo-foter footer-logo" alt="Logo Alquiza">
=======
                    <img src="../img/logo.png" class="logo-foter footer-logo" alt="Logo Alquiza">
>>>>>>> de87242e8113722c4216288b25a5b2d6c7c6669e:PHP/index.php
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
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Coordenadas de Ibiza
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
    <script>
        // Animación al scroll para la sección "¿QUIENES SOMOS?"
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        });

        document.querySelectorAll('.slide-in-left, .slide-in-right').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>