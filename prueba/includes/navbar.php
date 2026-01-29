<?php

function navbar()
{
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">Alquiza Ibiza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="IniciarSesion.php">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="coches.php">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="motos.php">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="furgonetas.php">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    <!-- Enlace para cambiar a modo oscuro -->
                    <a href="?tema=dark" class="btn btn-secondary">Modo Oscuro</a>

                    <!-- Enlace para cambiar a modo claro -->
                    <a href="?tema=light" class="btn btn-light">Modo Claro</a>
                </ul>
            </div>
        </div>
    </nav>
    <?php
}
?>