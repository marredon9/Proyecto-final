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

        <section class="faq-container mt-5 mb-5">
            <h1 class="faq-title"><strong>Preguntas Frecuentes</strong></h1>

            <ul class="faq-list">

                <li class="faq-item">
                    <input type="checkbox" id="faq1" class="faq-toggle">
                    <label for="faq1" class="faq-question"><strong>Cliente:</strong> ¿Qué requisitos necesito para
                        alquilar un coche?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Carnet válido, ser mayor de 21 años y tarjeta de
                        pago.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq2" class="faq-toggle">
                    <label for="faq2" class="faq-question"><strong>Cliente:</strong> ¿Puedo cancelar una
                        reserva?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Sí, gratis hasta 24h antes de la recogida.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq3" class="faq-toggle">
                    <label for="faq3" class="faq-question"><strong>Cliente:</strong> ¿El precio incluye seguro?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Sí, incluye seguro básico. Puedes añadir todo
                        riesgo.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq4" class="faq-toggle">
                    <label for="faq4" class="faq-question"><strong>Cliente:</strong> ¿Hay límite de kilómetros?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Depende del modelo. Muchos incluyen kilometraje
                        ilimitado.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq5" class="faq-toggle">
                    <label for="faq5" class="faq-question"><strong>Cliente:</strong> ¿Puedo devolver el coche en otra
                        sucursal?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Sí, sin ningun problema.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq6" class="faq-toggle">
                    <label for="faq6" class="faq-question"><strong>Cliente:</strong> ¿Se necesita depósito o
                        fianza?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Sí, se bloquea una fianza en tarjeta al recoger el
                        coche.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq8" class="faq-toggle">
                    <label for="faq8" class="faq-question"><strong>Cliente:</strong> ¿Ofrecen entrega en el
                        aeropuerto?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Sí, puedes recoger el coche directamente en el
                        aeropuerto.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq9" class="faq-toggle">
                    <label for="faq9" class="faq-question"><strong>Cliente:</strong> ¿Qué pasa si devuelvo el coche
                        tarde?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Puede aplicarse un cargo adicional según el
                        retraso.</div>
                </li>

                <li class="faq-item">
                    <input type="checkbox" id="faq10" class="faq-toggle">
                    <label for="faq10" class="faq-question"><strong>Cliente:</strong> ¿Puedo alquilar algun otro
                        vehiculo en vez de un coche?</label>
                    <div class="faq-answer"><strong>Alquiza:</strong> Sí, tenemos motos y furgonetas disponibles en
                        Ibiza.</div>
                </li>
            </ul>
        </section>
    </section>


    <!-- Footer -->
    <?= footer() ?>
</body>

</html>