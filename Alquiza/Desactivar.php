<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

if (isset($_GET['tema'])) {
    // Cambiar el modo según el parámetro GET y guardar en cookie
    $nuevo_tema = $_GET['tema'];
    setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
    // Redirigir para evitar que se vuelva a enviar el formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}if(!isset($_COOKIE['theme'])){
    setcookie('theme', 'light', time() + (30 * 24 * 60 * 60), "/");
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


    <?= footer() ?>

</body>

</html>