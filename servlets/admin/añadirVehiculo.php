<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

//guardar parametros en variables
/* s */$matricula = $_POST["matricula"] ?? "";
/* s */$marca = $_POST["marca"] ?? "";
/* s */$modelo = $_POST["modelo"] ?? "";
/* s */$tipo = $_POST["tipo"] ?? "";
/* d */$asientos = intval($_POST["asientos"] ?? 0);
/* d */$puertas = intval($_POST["puertas"] ?? 0);
/* d */$maletero = ($_POST["maletero"] == "on") ? 1 : 0;
/* s */$modo = $_POST["modo"] ?? "";
/* d */$km = intval($_POST["km"] ?? 0);
/* d */$capacidad = intval($_POST["capacidad"] ?? 0);
/* s */$emisiones = $_POST["emisiones"] ?? "";
/* d */$sucursal = intval($_POST["sucursal"] ?? 0);

//hacer insert en base de datos
try {
    $query = "
INSERT INTO vehiculo (matricula, marca, modelo, tipo, asientos, puertas, maletero, modo, km, capacidad, emisiones, id_sucursal)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
    ";
    $stmt = $cn->prepare($query);
    $stmt->bind_param("ssssdddsddsd",
    $matricula, $marca, $modelo, $tipo, $asientos, $puertas, $maletero, $modo, $km, $capacidad, $emisiones, $sucursal
    );
    $stmt->execute();
    redirect("admin/vehiculos.php");
} catch (mysqli_sql_exception $e) {
    echo $e;
    //redirect("admin/añadirVehiculo.php?error=0");
}

?>