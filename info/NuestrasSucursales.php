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

    <section class="hero-section position-relative min-vh-100">
        <?=fondoVideo()?>

        <section class="faq-container">
            <h1 class="faq-title"><strong>Nuestras Sucursales</strong></h1>

            <ul class="faq-list">
                <li class="faq-item">
                    <input type="checkbox" id="faq2" class="faq-toggle">
                    <label for="faq2" class="faq-question"><strong>Sucursal Nº1:</strong> Aeropuerto Ibiza</label>
                    <div class="faq-answer">Nuestra primera sucursal se encuentra en el aeropuerto de Ibiza, haciendo
                        asi que nuestros clientes tengan facilidad para llegar a la ciudad.</div>
                </li>

                <ul class="faq-list">
                    <li class="faq-item">
                        <input type="checkbox" id="faq1" class="faq-toggle">
                        <label for="faq1" class="faq-question"><strong>Sucursal Nº2:</strong>Eivissa</label>
                        <div class="faq-answer">Nuestra segunda sucursal se encuentra en la Calle Carrer de Madrid, al
                            lado de la incorporación Carrer de Jaume |.</div>
                    </li>

                </ul>
        </section>
    </section>

    <?= footer() ?>
</body>

</html>