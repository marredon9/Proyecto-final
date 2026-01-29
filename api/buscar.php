<?php
include "include.php";

/*
PARAMETROS:
tipo
Marca
Modelo
Asientos
Puertas
Maletero
Capacidad --quitado
Modo (Manual/Automatico)
Emisiones
id_sucursal
desde
hasta
json -> devolver como json o como html

*/

$tipo = $_GET["tipo"] ?? "%";
$marca = $_GET["marca"] ?? "%";
$modelo = $_GET["modelo"] ?? "%";
$asientos = $_GET["asientos"] ?? "%";
$puertas = $_GET["puertas"] ?? "%";
$maletero = $_GET["maletero"] ?? "%";
//$capacidad = $_GET["capacidad"] ?? "%";
$modo = $_GET["modo"] ?? "%";
$id_sucursal = $_GET["id_sucursal"] ?? "%";
$desde = $_GET["desde"] ?? "%";
$hasta = $_GET["hasta"] ?? "%";
$json = $_GET["json"] ?? "true";

//fechas 1 y 3 -> desde
//fechas 2 y 4 -> hasta
/*$query = '
SELECT v.*, a.* FROM vehiculo v INNER JOIN alquiler a ON v.id = a.id_ve
WHERE
NOT ((? <= a.desde OR ? >= a.hasta) AND (? BETWEEN a.desde AND a.hasta OR ? BETWEEN a.desde AND a.hasta))
AND v.tipo LIKE ?
AND v.marca LIKE ?
AND v.modelo LIKE ?
AND v.asientos LIKE ?
AND v.puertas LIKE ?
AND v.maletero LIKE ?
AND v.modo LIKE ?
AND v.emisiones LIKE ?
AND v.id_sucursal LIKE ?;
';*/

$query = "
SELECT v.*
FROM vehiculo v
LEFT JOIN alquiler a
  ON a.id_ve = v.id
 AND a.desde <= ?
 AND a.hasta >= ?
WHERE a.id IS NULL
AND v.tipo LIKE ?
AND v.marca LIKE ?
AND v.modelo LIKE ?
AND v.asientos LIKE ?
AND v.puertas LIKE ?
AND v.maletero LIKE ?
AND v.modo LIKE ?
AND v.emisiones LIKE ?
AND v.id_sucursal LIKE ?
;
"; //gracias stackoverflow

try {
    $stmt = $cn->prepare($query);
    $stmt->bind_param("sssssssssss", $desde, $hasta,
    $tipo, $marca, $modelo, $asientos, $puertas, $maletero, $modo, $emisiones, $id_sucursal
    );
    $stmt->execute();
    $res = $stmt->get_result();

    while ($r = $res->fetch_assoc()) {

    }
} catch (mysqli_sql_exception $e) {

}

?>