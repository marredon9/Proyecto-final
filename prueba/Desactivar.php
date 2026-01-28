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
    <link rel="stylesheet" href="style.css">
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

                    <form action="CuentaDesactivada.php" onsubmit="return confirmarDesactivacion();">
                        <button type="submit" class="btn btn-danger px-4" href="CuentaDesactivada.php">
                            Estoy segur@
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <footer class="mt-5 text-center">
        <div class="container">
            <p>&copy; 2024 Alquiza Ibiza. Todos los derechos reservados.</p>
            <p>
                <a href="#">Política de Cookies</a> |
                <a href="#">Aviso Legal</a>
            </p>
        </div>
    </footer>

    <!-- Scripts Bootstrap y personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>