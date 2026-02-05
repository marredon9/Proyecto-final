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
<?= navbar() ?>
<body>
    <h2 class="section-title mb-4 text-center mt-3" id="flota">Nuestros furgonetas</h2>
    <div class="d-flex justify-content-center gap-3 flex-wrap align-items-stretch" style ="padding-bottom:30px;">
        <div class="card" style="width: 18rem;">
            <img src="<?= img("furgoneta1.png") ?>" class="card-img-top" alt="coche">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Mercedes Sprinter</h5>
                </div>
                <span class="text-card"><img src="<?= img("marchas.png") ?>" style="width: 20px;">Manual <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 3 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;"> Maletas</span>
                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li>Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Vehículo de diesel</li>
                <li> Aire acondicionado</li>
            </div>
            <div class="card-footer">
                <p>30€/día</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("furgoneta2.png") ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
             <div>
                    <h5 class="card-title">Peugeot Partner</h5>
                </div>
                <span class="text-card"><img src="<?= img("marchas.png") ?>" style="width: 20px;">Manual <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 5 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;">4 Maletas</span>
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
            <img src="<?= img("furgoneta3.png") ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Opel Vivaro</h5>
                </div>
                <span class="text-card"><img src="<?= img("marchas.png") ?>" style="width: 20px;">Automatico <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;"> 9 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;">5 Maletas</span>

                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li>Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Vehículo de gasolina</li>
                <li> Aire acondicionado</li>
            </div>
            <div class="card-footer">
                <p>25€/día</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?= img("furgoneta4.png") ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title">Mercedes Clase V</h5>
                </div>
                <span class="text-card"><img src="<?= img("marchas.png") ?>" style="width: 20px;">Automatico <img
                        src="<?= img("grupo.png") ?>" style="width: 20px;">7 Personas <img
                        src="<?= img("maleta.png") ?>" style="width: 20px;">4 Maletas</span>

                <h5 style="margin-top: 10px;">Características del vehículo</h5>

                <li>Radio estéreo AM/FM</li>
                <li> Airbags</li>
                <li> Vehículo de gasolina</li>
                <li> Aire acondicionado</li>
            </div>
            <div class="card-footer">
                <p>50€/día</p>
            </div>
    </div>
    </div>

    <?= footer() ?>
</body>
</html>