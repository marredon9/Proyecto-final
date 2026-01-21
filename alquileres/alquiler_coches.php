<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Alquiza</title>
</head>

<body>
    <!--Navbar-->
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
    <!--Card1-->
    <div class="cards-title-alquiler">
        <h2>Nuestros coches</h2>
    </div>
    <div class="cards-container-alquiler" id="miCard">
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/ford-focus-eu-Column_Card_Focus-ST-Line-X-3x2-1000x667-front-view-removebg-preview.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Ford Focus</h5>
                        <img src="img/cambio-de-marchas-manual.png" style="width: 20px;padding-right: 5px;"><spam style="padding-right: 15px;">Manual</spam><img src="img/grupo.png" style="width: 20px;padding-right: 5px;"><spam style="padding-right: 15px;">5</spam><img src="img/image (1).png" style="width: 25px;padding-right: 5px;"><spam style="padding-right: 15px;">5</spam><img src="img/copo-de-nieve.png" style="width: 20px;padding-right: 5px;"><spam style="padding-right: 15px;">AC</spam>
                        
                        <div class="card-footer">
                            <button onclick="abrirModal()" id="btnExpandir" class="btn-saber-mas">Saber más +</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal-->
        <div id="miModal" class="modal-overlay">
            <div class="modal-content">
                <span class="cerrar" onclick="cerrarModal()">&times;</span>
                <div class="card-detallada">
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button onclick="cerrarModal()" class="btn-cerrar">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!--Pagination-->
    <div class="pagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!--footer-->
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
    <script src="script.js"></script>
</body>

</html>