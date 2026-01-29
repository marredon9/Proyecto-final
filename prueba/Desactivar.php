<?php
session_start();
if (isset($_SESSION["sesion"])) {
    $sesion = unserialize($_SESSION["sesion"]);
} else {
    $sesion = "";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Desactivar cuenta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="sass/style.css" />
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
                    <li class="nav-item"><a class="nav-link" href="#flota">Nuestra flota</a></li>
                    <li class="nav-item"><a class="nav-link" href="#coches">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#motos">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#furgonetas">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg border-0 p-4" style="max-width: 500px; width: 100%;">
            <div class="card-body text-center">
                <h2 class="fw-bold mb-3 text-primary">¿Deseas desactivar tu cuenta?</h2>
                <p class="text-muted mb-4">
                    Esta acción desactivará tu cuenta temporalmente.
                    Podrás volver cuando quieras.
                </p>

                <div class="d-flex justify-content-center gap-3">
                    <form action="index.php">
                        <button type="submit" class="btn btn-outline-secondary px-4">
                            Volver atrás
                        </button>
                    </form>

                    <form action="desactivarMiCuenta.php" onsubmit="return confirmarDesactivacion();">
                        <button type="submit" class="btn btn-danger px-4">
                            Estoy segur@
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
                    <p><a href="contacto.php">Contacta con nosotros</a></p>
                    <p><a href="NuestrasSucursales.php">Nuestras sucursales</a></p>
                </div>

                <!-- DERECHA -->
                <div class="col-lg-4 col-md-3 col-6 footer-col">
                    <h4>INFORMACIÓN LEGAL</h4>
                    <p><a href="Informacion_legal.php">Información legal</a></p>
                    <p><a href="PoliticasDaños.php">Política de gestión de daños</a></p>
                    <p><a href="PoliticasDeposito.php">Política de depósito</a></p>
                    <p><a href="PoliticaPrivacidad.php">Política de Privacidad</a></p>
                    <p><a href="TerminosCondiciones.php">Términos y Condiciones</a></p>
                </div>
            </div>
        </div>
        <!-- BARRA INFERIOR -->
        <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center gap-2">
            <span>© Alquiza 2026</span>
            <span><a href="PoliticaCookies.php">Política de cookies</a> | <a href="MencionesLegales.php">Menciones legales</a> | <a href="SitesMaps.php">Sites maps</a></span>
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

</html>