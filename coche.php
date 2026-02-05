<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?= headerPagina() ?>
</head>

<body>

    <!-- Navbar -->
    <?= navbar() ?>

    <h2 class="section-title mb-4 text-center mt-3" id="flota">Nuestros coches</h2>
    <div class="d-flex justify-content-center gap-3 flex-wrap align-items-stretch">
        <div class="card" style="width: 18rem;">
            <img src="<?= img("focus (2).png") ?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Ford Focus</h5>
                </div>
                <span><img src="<?= img("marchas.png") ?>" style="width: 20px;">Automático <img src="<?= img("grupo.png") ?>" style="width: 20px;"> 5 Personas <img src="<?= img("maleta.png") ?>"style="width: 20px;"> 2 Maletas</span>
                <a href="coche.php" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("van.png") ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Furgonetas</h5>
                </div>
                <a href="<?= lnk("furgoneta.php") ?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("moto.png") ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Motos</h5>
                </div>
                <a href="<?= lnk("moto.php") ?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("moto.png") ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Motos</h5>
                </div>
                <a href="<?= lnk("moto.php") ?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
    </div>
    </div>