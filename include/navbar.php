<?php
function navbar()
{
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?=lnk("index.php")?>">Alquiza Ibiza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="<?=lnk("IniciarSesion.php")?>">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=lnk("buscar.php?tipo=coche")?>">Coches</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=lnk("buscar.php?tipo=moto")?>">Motos</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=lnk("buscar.php?tipo=furgoneta")?>">Furgonetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?=lnk("contacto.php")?>">Contacto</a></li>
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

function navbarAdmin(){
    ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">Alquiza Ibiza Administrador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="sucursales.php">Sucursales</a></li>
                    <li class="nav-item"><a class="nav-link" href="vehiculos.php">Vehículos</a></li>
                    <li class="nav-item"><a class="nav-link" href="usuarios.php">Usuarios</a></li>
                    
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