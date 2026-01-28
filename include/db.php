<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $host = "192.168.0.180";
    $user = "root";
    $pass = "root";
    $db = "alquiler";

    $cn = new mysqli($host, $user, $pass, $db);
    $cn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}

?>