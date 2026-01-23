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
                    <li class="nav-item"><a class="nav-link" href="#flota">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#coches">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#motos">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#furgonetas">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección hero con fondo de video y formulario -->
    <!-- Sección hero con fondo de video y formulario -->
    <!-- Sección hero con fondo de video y formulario -->
    <section class="hero-section">
        <video class="background-video" autoplay muted loop>
            <source src="img/olas.mp4" type="video/mp4" />
            Tu navegador no soporta la etiqueta de video.
        </video>
        <!-- Contenedor del formulario en un cuadro azul con transparencia -->
        <div class="form-container">
            <!-- Formulario de login -->
            <form method="post" action="" class="w-100">
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
                    <input type="text" name="telefono" class="form-control"
                        maxlength="9" pattern="[0-9]{9}" placeholder="612345678" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input type="text" name="dni" class="form-control"
                        maxlength="9" pattern="[0-9]{8}[A-Za-z]" placeholder="12345678A" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>
                </div>

                <!-- USUARIO / EMAIL -->
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="email-input" required>
                </div>

                <!-- CONTRASEÑA -->
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" id="password1" class="password-input" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Repetir Contraseña</label>
                    <input type="password" id="password2" class="password-input" required>
                    <div id="error-password" class="text-danger mt-2 d-none">
                        Las contraseñas no coinciden
                    </div>
                </div>

                <!-- BOTÓN -->
                <div class="text-center">
                    <button type="submit" class="btn-custom">
                        Crear cuenta
                    </button>
                </div>
            </form>


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