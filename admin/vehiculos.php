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
tipo
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
<h3><a href="añadirVehiculo.php">Añadir Vehículo</a></h3>
<!-- no uso inputs porque no entran los campos en pantalla -->
<table border="1">
    <tr>
        <td></td>
        <td><b>ID</b></td>
        <td><b>Matrícula</b></td>
        <td><b>Marca</b></td>
        <td><b>Modelo</b></td>
        <td><b>Tipo</b></td>
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
        $sucursal = $r["sucursal"];
        $tipo = $r["tipo"];
        ?>
    <tr>
        <td><a href="verVehiculo.php?id=<?=$id?>">Ver</a></td>
        <td><?=$id?></td>
        <td><?=$matricula?></td>
        <td><?=$marca?></td>
        <td><?=$modelo?></td>
        <td><?=$tipo?></td>
        <td><?=$asientos?></td>
        <td><?=$puertas?></td>
        <td><?=$maletero?></td>
        <td><?=$modo?></td>
        <td><?=$km?></td>
        <td><?=$capacidad?></td>
        <td><?=$emisiones?></td>
        <td><?=$sucursal?></td>
    </tr>
    <?php
    }
} catch (mysqli_sql_exception $e) {

}
    ?>
</table>