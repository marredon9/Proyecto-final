<?php
include "include.php";
session_start();
$sesion = obtenerSesion();

/*
INPUTS:
desde (fecha)
hasta (fecha)
tipo (enum->COCHE/MOTO/FURGONETA)
marca (texto)
modelo (texto)
asientos (numero)
puertas (numero)
maletero (checkbox)
modo (enum->AUTOMATICO/MANUAL)
emisiones (enum->NINGUNO/0/ECO/C/B)
id_sucursal (enum -> clave = nombre, valor = id)
preciomin (numero)
preciomax (numero)
*/

?>

<!DOCTYPE HTML>
<html lang="es">

<head>
    <?= headerPagina() ?>
</head>

<body>
    <?= navbar() ?>

    <div class="container-md">
        <div class="row">
            <div class="col-12 col-lg-4 justify-content-center d-flex">
                <div class="form-container" oninput="buscar()">
                    <h5 class="text-center mb-4"><b>Buscar Vehículos</b></h5>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Desde: </label>
                            <input type="date" id="desde" class="form-control email-input" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Hasta: </label>
                            <input type="date" id="hasta" class="form-control email-input">
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Tipo: </label>
                        <select class="form-select" id="tipo">
                            <?php
                            for ($i = 0; $i < sizeof(DB_TIPOS); $i++) {
                                $v = DB_TIPOS[$i];
                            ?>
                                <option value="<?= $v ?>"><?= $v ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Marca: </label>
                            <input type="text" id="marca" class="form-control email-input" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Modelo: </label>
                            <input type="text" id="modelo" class="form-control email-input">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Asientos: </label>
                            <input type="number" min="1" max="9" id="asientos" class="form-control email-input" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Puertas: </label>
                            <input type="number" min="1" max="9" id="puertas" class="form-control email-input">
                        </div>
                    </div>

                    <!--
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Maletero: </label>
                            <input type="checkbox" id="maletero" class="form-check-input form-control">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Sucursal: </label>
                            <select class="form-select" id="id_sucursal">
                                <?php
                                //consulta para crear select con sucursales al vuelo
                                try {
                                    $stmt = $cn->prepare("SELECT id, nombre FROM sucursal;");
                                    $stmt->execute();
                                    $res = $stmt->get_result();
                                    while ($r = $res->fetch_assoc()) {
                                        $id = $r["id"];
                                        $nombre = $r["nombre"];
                                ?>
        <option value="<?= $id ?>"><?= $nombre ?></option>
        <?php
                                    }
                                } catch (mysqli_sql_exception $e) {
                                }
        ?>
                            </select>
                        </div>
                    </div>
                    -->

                    <!--
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Modo: </label>
                            <select class="form-select" id="modo">
                                <?php
                                for ($i = 0; $i < sizeof(DB_MODOS); $i++) {
                                    $v = DB_MODOS[$i];
                                ?>
                                    <option value="<?= $v ?>"><?= $v ?></option>
                                    <?php
                                }
                                    ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Emisiones: </label>
                            <select class="form-select" id="emisiones">
                                <?php
                                for ($i = 0; $i < sizeof(DB_EMISIONES); $i++) {
                                    $v = DB_EMISIONES[$i];
                                ?>
                                    <option value="<?= $v ?>"><?= $v ?></option>
                                    <?php
                                }
                                    ?>
                            </select>
                        </div>
                    </div>
                    -->

                    <div class="mb-2">
                        <label class="form-label">Sucursal: </label>
                        <select class="form-select" id="id_sucursal">
                            <?php
                            //consulta para crear select con sucursales al vuelo
                            try {
                                $stmt = $cn->prepare("SELECT id, nombre FROM sucursal;");
                                $stmt->execute();
                                $res = $stmt->get_result();
                                while ($r = $res->fetch_assoc()) {
                                    $id = $r["id"];
                                    $nombre = $r["nombre"];
                            ?>
                                    <option value="<?= $id ?>"><?= $nombre ?></option>
                            <?php
                                }
                            } catch (mysqli_sql_exception $e) {
                            }
                            ?>
                        </select>
                    </div>

                    <input type="hidden" id="maletero" value="%">
                    <input type="hidden" id="modo" value="%">
                    <input type="hidden" id="emisiones" value="%">

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Precio Min.: </label>
                            <input type="number" min="0" max="999999" id="preciomin" class="form-control email-input" value="0" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Precio Max.: </label>
                            <input type="number" min="0" max="999999" id="preciomax" class="form-control email-input" value="999999">
                        </div>
                    </div>

                    <!--
                    <div class="mb-2">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control email-input" required>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control email-input" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Teléfono</label>
                            <input type="text" name="telefono" class="form-control email-input" maxlength="9"
                                pattern="[0-9]{9}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">DNI</label>
                            <input type="text" name="dni" class="form-control email-input" maxlength="9"
                                pattern="[0-9]{8}[A-Za-z]" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control email-input" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control password-input" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Repetir contraseña</label>
                            <input type="password" name="repetirContraseña" class="form-control password-input" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-custom">Crear cuenta</button>
                    </div>
                    -->
                </div>
                </section>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row d-flex justify-content-center" id="resultados"></div>
            </div>
        </div>
    </div>

    <?= footer() ?>
</body>
<html lang="es">

<!-- FORMULARIO ANTIGUO -->
<!--
<fieldset oninput="buscar()">
    <table>
        <tr>
            <td>Desde: </td>
            <td><input type="text" id="desde"></td>
        </tr>
        <tr>
            <td>Hasta: </td>
            <td><input type="text" id="hasta"></td>
        </tr>
        <tr>
            <td>Tipo: </td>
            <td><input type="text" id="tipo"></td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td><input type="text" id="marca"></td>
        </tr>
        <tr>
            <td>Modelo: </td>
            <td><input type="text" id="modelo"></td>
        </tr>
        <tr>
            <td>Asientos: </td>
            <td><input type="text" id="asientos"></td>
        </tr>
        <tr>
            <td>Puertas: </td>
            <td><input type="text" id="puertas"></td>
        </tr>
        <tr>
            <td>Maletero: </td>
            <td><input type="text" id="maletero"></td>
        </tr>
        <tr>
            <td>Modo: </td>
            <td><input type="text" id="modo"></td>
        </tr>
        <tr>
            <td>Emisiones: </td>
            <td><input type="text" id="emisiones"></td>
        </tr>
        <tr>
            <td>Sucursal: </td>
            <td><input type="text" id="id_sucursal"></td>
        </tr>
        <tr>
            <td>Precio Mínimo: </td>
            <td><input type="text" id="preciomin"></td>
        </tr>
        <tr>
            <td>Precio Máximo: </td>
            <td><input type="text" id="preciomax"></td>
        </tr>
    </table>
</fieldset>
<div id="resultados"></div>
-->

<script>
    let desde = document.getElementById("desde");
    let hasta = document.getElementById("hasta");
    let tipo = document.getElementById("tipo");
    let marca = document.getElementById("marca");
    let modelo = document.getElementById("modelo");
    let asientos = document.getElementById("asientos");
    let puertas = document.getElementById("puertas");
    let maletero = document.getElementById("maletero");
    let modo = document.getElementById("maletero");
    let emisiones = document.getElementById("emisiones");
    let id_sucursal = document.getElementById("id_sucursal");
    let preciomin = document.getElementById("preciomin");
    let preciomax = document.getElementById("preciomax");

    let resultados = document.getElementById("resultados");

    function buscar() {
        console.log("desde: " + encodeURI(desde.value));
        console.log("hasta: " + encodeURI(hasta.value));
        console.log("tipo: " + encodeURI(tipo.value));
        console.log("marca: " + encodeURI(marca.value));
        console.log("modelo: " + encodeURI(modelo.value));
        console.log("asientos: " + encodeURI(asientos.value));
        console.log("puertas: " + encodeURI(puertas.value));
        console.log("maletero: " + encodeURI(maletero.value));
        console.log("modo: " + encodeURI(modo.value));
        console.log("emisiones: " + encodeURI(emisiones.value));
        console.log("id_sucursal: " + encodeURI(id_sucursal.value));
        console.log("---");

        let params = "desde=" + encodeURI(desde.value) +
            "&hasta=" + encodeURI(hasta.value) +
            "&tipo=" + encodeURI(tipo.value) +
            "&marca=" + encodeURI(marca.value) +
            "&modelo=" + encodeURI(modelo.value) +
            "&asientos=" + encodeURI(asientos.value) +
            "&puertas=" + encodeURI(puertas.value) +
            "&maletero=" + encodeURI(maletero.value) +
            "&modo=" + encodeURI(modo.value) +
            "&emisiones=" + encodeURI(emisiones.value) +
            "&id_sucursal=" + encodeURI(id_sucursal.value) +
            "&preciomin=" + encodeURI(preciomin.value) +
            "&preciomax=" + encodeURI(preciomax.value) +
            "&json=false";
        let url = "api/buscar.php?" + params;
        fetch(url)
            .then(response => response.text())
            .then(data => {
                resultados.innerHTML = data;
            })
            .catch(error => {
                resultados.innerHTML = error;
            });
    }
    buscar();
</script>