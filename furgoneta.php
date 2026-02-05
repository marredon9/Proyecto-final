<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?=headerPagina()?>
</head>

<body>

<div class="card" style="width: 18rem;">
            <img src="<?=img("van.png")?>"class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Furgonetas</h5>
                </div>
                <a href="<?=lnk("buscar.php")?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="<?=img("van.png")?>"class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Furgonetas</h5>
                </div>
                <a href="<?=lnk("buscar.php")?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="<?=img("van.png")?>"class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Furgonetas</h5>
                </div>
                <a href="<?=lnk("buscar.php")?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
    <!-- Navbar -->
    <?= navbar() ?>