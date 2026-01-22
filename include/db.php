<?php

try {
    $host = "servidoralquiza";
    $user = "root";
    $pass = "root";
    $db = "alquiler";

    $cn = new mysqli($host, $user, $pass, $db);
    $cn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
}

?>