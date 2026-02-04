<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro();
?>

<!DOCTYPE HTML>
<head>
    <?=headerPagina()?>
</head>

<body>

    <!-- Navbar -->
    <?= navbar() ?>

    <!-- Form de contacto -->
    <section class="hero-section position-relative min-vh-100">
        <?=fondoVideo()?>    
    
        <div id="contact-card" class="card" style="width: 600px;">

            <div class="card-body">
                <h5 class="card-title">Contacta con nosotros</h5>
                <p>Puedes encontrarnos en:</p>
                <div class="branch">
                    <p>Av. d'Isidor Macabich, 24, 07800 Eivissa</p>
                    <p class="phone">+34 971 31 80 84</p>
                </div>
                <hr class="separator">
                <div class="branch">
                    <p>Carretera del Aeropuerto, km 7.5, 07818 - Sant Jordi de ses Salines</p>
                    <p class="phone">+34 971 39 87 31</p>
                </div>
            </div>
            <div class="card-body">
                <a href="mailto:info@alquizaibiza.com" class="email-link">info@alquizaibiza.com</a>
            </div>
        </div>
    </section>
    <!-- Footer -->

    <?= footer() ?>


</body>

</html>