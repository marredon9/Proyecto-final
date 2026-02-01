<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

//obtener id de la url y, si no existe, redirigir a pagina de vehiculos
$id = intval($_GET["id"] ?? 0);
if ($id == 0) {
    redirect("vehiculos.php");
}

//obtener info de la base de datos
try {
    $stmt = $cn->prepare("SELECT * FROM vehiculo WHERE id = ?");
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    
    //establecer variables
    $id = $r["id"];
    $matricula = $r["matricula"];
    $marca = $r["marca"];
    $modelo = $r["modelo"];
    $asientos = $r["asientos"];
    $puertas = $r["puertas"];
    $maletero = ($r["maletero"] == 1);
    $modo = $r["modo"];
    $km = $r["km"];
    $capacidad = $r["capacidad"];
    $emisiones = $r["emisiones"];
    $id_sucursal = $r["id_sucursal"];
    $tipo = $r["tipo"];
    $precioDia = $r["precioDia"];
} catch (mysqli_sql_exception $e) {
    redirect("vehiculos.php");
}

/*
//obtener datos de indices para el select de emisiones
$listaEmisiones = [
    ["NINGUNO", "Ninguno"],
    ["0", "0"],
    ["ECO", "ECO"],
    ["C", "C"],
    ["B", "B"]
];

$indiceEmisiones = 0;

for ($i = 0; $i < sizeof($listaEmisiones); $i++) {
    if ($listaEmisiones[$i][0] == $emisiones) {
        $indiceEmisiones = $i;
        break;
    }
}

//obtener datos de indices para la lista de tipos de vehiculos
$listaTipos = [
    ["COCHE", "Coche"],
    ["MOTO", "Moto"],
    ["FURGONETA", "Furgoneta"]
];

$indiceTipos = 0;
for ($i = 0; $i < sizeof($listaTipos); $i++) {
    if ($listaTipos[$i][0] = $tipo) {
        $indiceTipos = $i;
        break;
    }
}

//obtener datos de modos para la lista de modos
$listaModos = [
    ["AUTOMATICO", "Automático"],
    ["MANUAL", "Manual"]
];

$indiceModos = 0;
for ($i = 0; $i < sizeof($listaModos); $i++) {
    if ($listaModos[$i][0] == $modo) {
        $indiceModos = $i;
        break;
    }
}
    
*/
?>
<h3><a href="vehiculos.php">Atrás</a></h3>
<form action="<?=srv("admin/editarVehiculo")?>" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <table>
        <tr>
            <td>Matrícula: </td>
            <td><input type="text" name="matricula" required value="<?=$matricula?>"></td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td><input type="text" name="marca" required value="<?=$marca?>"></td>
        </tr>
        <tr>
            <td>Modelo: </td>
            <td><input type="text" name="modelo" required value="<?=$modelo?>"></td>
        </tr>
        <tr>
            <td>Tipo: </td>
            <td>
                <select name="tipo">
                    <?php
                    /*
for ($i = 0; $i < sizeof($listaTipos); $i++) {
    ?>
                    <option value="<?=$listaTipos[$i][0]?>" <?=($i == $indiceTipos) ? 'selected="selected"' : ""?>>
                        <?=$listaTipos[$i][1]?>
                    </option>
    <?php
}
*/
//$lista = cambiarPrioridad(DB_TIPOS, $tipo);
for ($i = 0; $i < sizeof(DB_TIPOS); $i++) {
    $v = DB_TIPOS[$i];
    ?>
                    <option value="<?=$v?>" <?=($v == $tipo) ? 'selected="selected"' : ""?>><?=$v?></option>
    <?php
}
                    ?>
                    <!--
                    <option value="coche">Coche</option>
                    <option value="moto">Moto</option>
                    <option value="furgoneta">Furgoneta</option>
                    -->
                </select>
            </td>
        </tr>
        <tr>
            <td>Asientos: </td>
            <td><input type="number" name="asientos" required value="<?=$asientos?>"></td>
        </tr>
        <tr>
            <td>Puertas: </td>
            <td><input type="number" name="puertas" required value="<?=$puertas?>"></td>
        </tr>
        <tr>
            <td>Maletero: </td>
            <td><input type="checkbox" name="maletero" required <?=$maletero ? "checked" : ""?>></td>
        </tr>
        <tr>
            <td>Modo: </td>
            <td>
                <select name="modo">
                    <?php
/*
for ($i = 0; $i < sizeof($listaModos); $i++) {
    ?>
                    <option value="<?=$listaModos[$i][0]?>" <?=($i == $indiceModos) ? 'selected="selected"' : ""?>>
                        <?=$listaModos[$i][1]?>
                    </option>
    <?php
}
*/
//$lista = cambiarPrioridad(DB_MODOS, $modo);
for ($i = 0; $i < sizeof(DB_MODOS); $i++) {
    $v = DB_MODOS[$i];
    ?>
                    <option value="<?=$v?>" <?=($v == $modo) ? 'selected="selected"' : ""?>><?=$v?></option>
    <?php
}
                    ?>
                    <!--
                    <option value="automatico">Automático</option>
                    <option value="manual">Manual</option>
                    -->
                </select>
            </td>
        </tr>
        <tr>
            <td>Kilometraje: </td>
            <td><input type="number" name="km" required value="<?=$km?>"></td>
        </tr>
        <!--
        <tr>
            <td>Capacidad: </td>
            <td><input type="number" name="capacidad" required value="<?=$capacidad?>"></td>
        </tr>
        -->
        <tr>
            <td>Emisiones: </td>
            <td>
                <select name="emisiones">
                    <?php
/*
for ($i = 0; $i < sizeof($listaEmisiones); $i++) {
    ?>
                    <option value="<?=$listaEmisiones[$i][0]?>" <?=($i == $indiceEmisiones) ? 'selected="selected"' : ""?>>
                        <?=$listaEmisiones[$i][1]?>
                    </option>
    <?php
}
*/
//$lista = cambiarPrioridad(DB_EMISIONES, $emisiones);
for ($i = 0; $i < sizeof(DB_EMISIONES); $i++) {
    $v = DB_EMISIONES[$i];
    ?>
                    <option value="<?=$v?>" <?=($v == $emisiones) ? 'selected="selected"' : ""?>><?=$v?></option>
    <?php
}
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Sucursal: </td>
            <td>
                <select name="sucursal">
                    <?php

//consulta para crear select con sucursales al vuelo
try {
    //sucursal actual
    $stmt = $cn->prepare("SELECT id, nombre FROM sucursal WHERE id = ?;");
    $stmt->bind_param("d", $id_sucursal);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    ?>
                    <option value="<?=$r["id"]?>"><?=$r["nombre"]?></option>
    <?php


    $stmt = $cn->prepare("SELECT id, nombre FROM sucursal WHERE id <> ?;");
    $stmt->bind_param("d", $id_sucursal);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $id = $r["id"];
        $nombre = $r["nombre"];
        ?>
                    <option value="<?=$id?>"><?=$nombre?></option>
        <?php
    }
} catch (mysqli_sql_exception $e) {
    
}

                    ?>
                    <tr>
                        <td>Precio por día: </td>
                        <td><input type="number" name="precioDia" required value="<?=$precioDia?>"></td>
                    </tr>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Guardar Coche"></td>
        </tr>
    </table>
</form>