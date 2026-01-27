<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

/*
DATOS DE UN COCHE:
id
matricula
marca
modelo
asientos (int)
puertas (int)
maletero (bool)
modo (automatico o manual)
km
extras -> no mostrar aqui
ruta_img -> no mostrar aqui
capacidad (int)
emisiones
sucursal (nombre mediante inner join)
*/

?>
<h1>Gestión de vehículos</h1>
<h3><a href="index.php">Volver atrás</a></h3>

<table>
    <tr>
        <td></td>
        <td><b>ID</b></td>
        <td><b>Matrícula</b></td>
        <td><b>Marca</b></td>
        <td><b>Modelo</b></td>
        <td><b>Asientos</b></td>
        <td><b>Puertas</b></td>
        <td><b>Maletero</b></td>
        <td><b>Modo</b></td>
        <td><b>KM</b></td>
        <td><b>Capacidad</b></td>
        <td><b>Emisiones</b></td>
        <td><b>Sucursal</b></td>
    </tr>
    <?php

//hacer consulta a base de datos
try {
    $stmt = $cn->prepare("SELECT v.*, s.nombre AS sucursal FROM vehiculo v INNER JOIN sucursal s ON s.id = v.id_sucursal;");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $id = $r["id"];
        $marca = $r["marca"];
        $modelo = $r["modelo"];
        $asientos = $r["asientos"];
        $puertas = $r["puertas"];
        $maletero = ($r["maletero"] == 1);
        $modo = $r["modo"];
        $km = $r["km"];
        $capacidad = $r["capacidad"];
        $emisiones = $r["emisiones"];
        $sucursal = $r["sucursal"];
        ?>
    <tr>
        <td><input type="text" value="<?=$id?>" disabled></td>
        <td><input type="text" value="<?=$marca?>" disabled></td>
        <td><input type="text" value="<?=$modelo?>" disabled></td>
        <td><input type="text" value="<?=$asientos?>" disabled></td>
        <td><input type="text" value="<?=$puertas?>" disabled></td>
        <td><input type="text" value="<?=$maletero?>" disabled></td>
        <td><input type="text" value="<?=$modo?>" disabled></td>
        <td><input type="text" value="<?=$km?>" disabled></td>
        <td><input type="text" value="<?=$capacidad?>" disabled></td>
        <td><input type="text" value="<?=$emisiones?>" disabled></td>
        <td><input type="text" value="<?=$sucursal?>" disabled></td>
    </tr>
        <?php
    }
} catch (mysqli_sql_exception $e) {

}


    ?>
</table>