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
    <div class="d-flex justify-content-center gap-3 flex-wrap align-items-stretch" style="padding-bottom: 30px;">
        <div class="card" style="width: 18rem;">
            <img src="<?= img("focus (2).png") ?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Ford Focus</h5>
                </div>
                <span class="text-card"><img src="<?= img("marchas.png") ?>" style="width: 20px;">Automático <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 5 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;"> 2 Maletas</span>
                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li>Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Vehículo de gasolina</li>
                <li> Aire acondicionado</li>
            </div>
            <div class="card-footer">
                <p>20€/día</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("citroen.png") ?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Citroen e-C4</h5>
                </div>
                <span class="text-card"><img src="<?= img("enchufe.png") ?>" style="width: 20px;"> Eléctrico <img
                        src="<?= img("marchas.png") ?>" style="width: 20px;">Automático <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 5 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;"> 2 Maletas</span>
                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li> Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Rango de conducción estimado hasta 175 millas</li>
                <li> Aire acondicionado</li>
                <li> Vehículo eléctrico</li>
            </div>
            <div class="card-footer">
                <p>25€/día</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("peugeot.png") ?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Peugeot 508 SW </h5>
                </div>
                <span class="text-card"><img src="<?= img("enchufe.png") ?>" style="width: 20px;"> Eléctrico <img
                        src="<?= img("marchas.png") ?>" style="width: 20px;">Automático <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 5 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;"> 3 Maletas</span>
                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li>Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Vehículo de gasolina</li>
                <li> Aire acondicionado</li>
            </div>
            <div class="card-footer">
                <p>30€/día</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("descapotable.png") ?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Audi A5 </h5>
                </div>
                <span class="text-card"><img src="<?= img("marchas.png") ?>" style="width: 20px;">Automático <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 4 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;"> 1 Maletas</span>
                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li>Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Vehículo de gasolina</li>
                <li> Aire acondicionado</li>
            </div>
            <div class="card-footer">
                <p>40€/día</p>
            </div>
        </div>

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

        <div class="card" style="width: 18rem;">
            <img src="<?=img("van.png")?>"class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Furgonetas</h5>
                </div>
                <a href="<?=lnk("buscar.php")?>" class="btn btn-outline-dark">Ver más</a>
            </div>
        </div>
    <?= footer() ?>
</body>

</html>