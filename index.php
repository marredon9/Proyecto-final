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

    <!-- Banner destacado con video -->
    <section class="hero-section position-relative min-vh-100">

        <?=fondoVideo()?>
        <div class="hero-content container h-100 d-flex flex-column justify-content-center align-items-center text-center text-white position-relative"
            style="z-index: 1;">
            <h1 class="display-4 fw-bold mb-3">¡Tu mejor opción en Ibiza!</h1>
<<<<<<< HEAD
            <p class="lead mb-4">Alquiler de coches y furgonetas con la mejor calidad y precio</p>            <!--
            <button type="button" class="btn btn-primary btn-lg btn-rounded" data-bs-toggle="modal"
                data-bs-target="#reservaModal">Reserva Ahora</button>
            -->
            <a class="btn btn-primary btn-lg btn-rounded" href="<?=lnk("buscar.php")?>">Reserva Ahora</a>
=======
            <p class="lead mb-4">Alquiler de coches y furgonetas con la mejor calidad y precio</p>
            
            <a class="btn btn-primary btn-lg btn-rounded" href="<?=lnk("Registrarse.php")?>">Regístrate</a>
>>>>>>> c05d2b3fb77a8694e406bf4d06d19d981431e9f7
        </div>

    </section>



    <!-- Sección cards -->
    <h2 class="section-title mb-4 text-center mt-3" id="flota">Descubra Nuestra Flota</h2>
    <div class="d-flex justify-content-center gap-3 flex-wrap align-items-stretch">
        <div class="card" style="width: 18rem;">
            <img src="<?=img("coche.png")?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Coches</h5>
                </div>
                <a href="coche.php" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=img("van.png")?>"class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Furgonetas</h5>
                </div>
                <a href="<?=lnk("furgoneta.php")?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>

    </div>
    </div>
    <div style="text-align: center; margin-top: 50px;">
        <a class="view-button" href="<?=lnk("vehiculo.php")?>">Ver Nuestros Vehículos</a>
    </div>

    <!--Zona gris -->
    <!--Zona gris -->

    <div class="seccion-gris mt-5">
        <div class="container justify-content-center text-center">
            <h1><b>¿QUIENES SOMOS?</b></h1>
            <div class="row mt-3 align-items-center">
                <!-- Columna de la imagen -->
                <div class="col-12 col-md-6 slide-in-left mb-3 mb-md-0">
                    <img src="<?=img("escaparate.png")?>" width="auto" height="300px" class="img-fluid img-borde"
                        alt="Escaparate">
                </div>
                <!-- Columna del texto -->
                <div class="col-12 col-md-6 slide-in-right">
                    <p>
                        En Alquiza, somos una empresa familiar con corazón ibicenco, dedicada a ofrecerte la mejor
                        experiencia de alquiler de vehículos en la isla. Sabemos lo importante que es moverse con
                        libertad,
                        por eso ponemos a tu disposición una flota variada de coches, motos y furgonetas, perfectos
                        tanto
                        para los turistas que quieren explorar cada rincón,
                        como para los locales que necesitan soluciones de movilidad para su día a día. Nos enorgullece
                        nuestro trato cercano y la flexibilidad para adaptarnos a todas tus necesidades, garantizando
                        siempre la calidad y el mejor servicio.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?= footer() ?>
</body>
<!-- Leaflet JS -->


</html>