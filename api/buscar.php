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
Capacidad
Modo (Manual/Automatico)
Emisiones
id_sucursal
desde
hasta

*/

$query = '
SELECT v.*, a.* FROM vehiculo v INNER JOIN alquiler a ON v.id = a.id_ve
WHERE
NOT (("2026-02-28" <= a.desde OR "2026-03-28" >= a.hasta) AND ("2026-02-28" BETWEEN a.desde AND a.hasta OR "2026-03-28" BETWEEN a.desde AND a.hasta))
AND v.tipo LIKE "%"
AND v.marca LIKE "%"
AND v.modelo LIKE "%"
AND v.asientos LIKE "%"
AND v.puertas LIKE "%"
AND v.maletero LIKE "%"
AND v.capacidad LIKE "%"
AND v.modo LIKE "%"
AND v.emisiones LIKE "%"
AND v.id_sucursal LIKE "%";
';

?>