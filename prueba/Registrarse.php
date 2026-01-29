<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "includes/footer.php";
include "includes/navbar.php";
session_start();

if (isset($_GET['tema'])) {
    // Cambiar el modo según el parámetro GET y guardar en cookie
    $nuevo_tema = $_GET['tema'];
    setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
    // Redirigir para evitar que se vuelva a enviar el formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Obtener el tema de la cookie
$tema = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

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
    <link rel="stylesheet" href="sass/main-<?php echo $_COOKIE['theme'] ?>.css" />
    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>
<body>

    <!-- Navbar -->
    <?= navbar() ?>

    <section class="hero-section mb-5 position-relative min-vh-100">
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
                        <input type="text" name="telefono" class="form-control email-input" maxlength="9"
                            pattern="[0-9]{9}" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label">DNI</label>
                        <input type="text" name="dni" class="form-control email-input" maxlength="9"
                            pattern="[0-9]{8}[A-Za-z]" required>
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
    <?= footer() ?>
</body>

</html>