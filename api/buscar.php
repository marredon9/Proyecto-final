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
$emisiones = $_GET["emisiones"] ?? "%";
$id_sucursal = $_GET["id_sucursal"] ?? "%";
$desde = $_GET["desde"] ?? "%";
$hasta = $_GET["hasta"] ?? "%";
$json = $_GET["json"] ?? "true";

if ($desde == "") $desde = "%";
if ($hasta == "") $hasta = "%";
if ($tipo == "") $tipo = "%";
if ($marca == "") $marca = "%";
if ($modelo == "") $modelo = "%";
if ($asientos == "") $asientos = "%";
if ($puertas == "") $puertas = "%";
if ($maletero == "") $maletero = "%";
if ($modo == "") $modo = "%";
if ($emisiones == "") $emisiones = "%";
if ($id_sucursal == "") $id_sucursal = "%";

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

/*$query = "
SELECT v.*, s.nombre as sucursal
FROM vehiculo v
INNER JOIN sucursal s ON v.id_sucursal = s.id
LEFT JOIN alquiler a ON a.id_ve = v.id
WHERE a.id IS NULL
AND a.desde <= ?
AND a.hasta >= ?
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
";*/


// ...
$query = "
SELECT sub.*, s.nombre AS sucursal FROM (
	SELECT 
		v.*,
		COUNT(a.id) AS total_alquileres,
        ABS(DATEDIFF(?, ?)) AS dias,
        ABS(DATEDIFF(?, ?) - 1) * v.precioDia AS preciototal
	FROM vehiculo v
	LEFT JOIN alquiler a
		ON a.id_ve = v.id
		AND ((a.desde <= ? AND ? <= a.hasta) OR (a.desde <= ? AND ? <= a.hasta))
	GROUP BY v.id, v.matricula, v.marca, v.modelo
	ORDER BY total_alquileres DESC
) sub INNER JOIN sucursal s ON sub.id_sucursal = s.id
WHERE sub.total_alquileres = 0
AND sub.tipo LIKE ?
AND sub.marca LIKE ?
AND sub.modelo LIKE ?
AND sub.asientos LIKE ?
AND sub.puertas LIKE ?
AND sub.maletero LIKE ?
AND sub.modo LIKE ?
AND sub.emisiones LIKE ?
AND sub.id_sucursal LIKE ?;";

//echo $tipo;

echo "tipo: " . $tipo . "<br>";
echo "marca: " . $marca . "<br>";
echo "modelo: " . $modelo . "<br>";
echo "asientos: " . $asientos . "<br>";
echo "puertas: " . $puertas . "<br>";
echo "maletero: " . $maletero . "<br>";
echo "modo: " . $modo . "<br>";
echo "id_sucursal: " . $id_sucursal . "<br>";
echo "desde: " . $desde . "<br>";
echo "hasta: " . $hasta . "<br>";
echo "json: " . $json . "<br>";

try {
    //echo "consultando...<br>";
    $stmt = $cn->prepare($query);
    $stmt->bind_param("sssssssssssssssss", $desde, $hasta, $desde, $hasta, $desde, $desde, $hasta, $hasta,
    $tipo, $marca, $modelo, $asientos, $puertas, $maletero, $modo, $emisiones, $id_sucursal
    );
    $stmt->execute();
    $res = $stmt->get_result();

    var_dump($res);
    $jsonArray = [];
    while ($r = $res->fetch_assoc()) {
        if ($json == "true") {
            array_push($jsonArray, $r);
        } else {
            cardBusquedaCoche($r);
        }
    }
    //echo "<br>consulta terminada<br>";
} catch (mysqli_sql_exception $e) {
    echo $e;
}

?>