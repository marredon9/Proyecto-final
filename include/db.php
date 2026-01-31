<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $host = "192.168.0.180";
    //$host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "alquiler";

    $cn = new mysqli($host, $user, $pass, $db);
    $cn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}

const DB_EMISIONES = [
    "NINGUNO",
    "0",
    "ECO",
    "B",
    "C"
];

const DB_MODOS = [
    "AUTOMATICO",
    "MANUAL"
];

const DB_TIPOS = [
    "COCHE",
    "MOTO",
    "FURGONETA"
];

function cambiarPrioridad($array, $valorPrimero) {
    $nuevo = [$valorPrimero];
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] == $valorPrimero) continue;
        array_push($nuevo, $array[$i]);
    }
    return $nuevo;
}

?>