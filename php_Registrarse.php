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
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <!-- LOGO IZQUIERDA -->
        <a class="navbar-brand me-4" href="#">
            <img src="assets/img/logo.png" alt="Alquiza" class="navbar-logo">
        </a>

        <!-- BOTÓN MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- LINKS -->
        <div class="collapse navbar-collapse" id="navbarDark">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-white active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="#">Vehículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="#">Sucursales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="#">Quiénes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


</body>

    <form method="post" action="" id="registroForm">
        <div class="container d-flex justify-content-center mt-4">
    <div class="login-card col-12 col-sm-10 col-md-7 col-lg-6">

            <h5 class="text-center mb-4"><b>Registrarse</b></h5>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido 1</label>
                    <input type="text" name="apellido1" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido 2</label>
                    <input type="text" name="apellido2" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" maxlength="16" pattern="[0-9]{9}"
                        placeholder="612345678" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input type="text" name="dni" class="form-control" maxlength="9" pattern="[0-9]{8}[A-Za-z]"
                        placeholder="12345678A" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" required>
                </div>


                <div class="mb-4">
                    <label class="form-label">Repetir Contraseña</label>
                    <input type="password" id="password2" class="form-control" required>
                    <div id="error-password" class="text-danger mt-2 d-none">
                        Las contraseñas no coinciden
                    </div>
                </div>

                <div class="text-end">
                    <input type="submit" class="btn btn-custom" value="Entrar">
                </div>

            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../javaScript/script.js"></script>

    <!--Footer-->
    <footer class="footer-alquiza seccion-azul mt-5">
        <div class="container">
            <div class="row">
                <!-- IZQUIERDA: LOGO + MAPA -->
                <div class="col-lg-5 col-md-6 col-12 footer-map">
                    <img src="assets/img/logo.png" class="logo-foter footer-logo" alt="Logo Alquiza">
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