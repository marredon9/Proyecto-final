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

    <!-- Navbar -->
    <?= navbar() ?>

    <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="img/coches/focus.png" class="card-img-top" alt="fiat 500">
                <div class="card-body">
                    <p class="card-header">Ford Focus</p>
                </div>
                <div class="card-body">
                    <p></p>
                </div>
                <div class="card-footer text-muted">Card footer</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Texto de ejemplo 2.</p>
                </div>
                <div class="card-footer text-muted">Card footer</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Texto de ejemplo 3.</p>
                </div>
                <div class="card-footer text-muted">Card footer</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Texto de ejemplo 4.</p>
                </div>
                <div class="card-footer text-muted">Card footer</div>
            </div>
        </div>
    </div>
</div>
