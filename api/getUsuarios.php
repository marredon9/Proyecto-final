<?php
include "include.php";
$query = "SELECT id, nombre, apellido1, apellido2, dni, email, es_admin FROM usuario;";
try {
    $stmt = $cn->prepare($query);
    $stmt->execute();
    $res = $stmt->get_result();
    $jsonArray = [];
    while ($r = $res->fetch_assoc()) {
        //array_push($jsonArray, $r);
        $user = $r;
        $user["es_admin"] = ($user["es_admin"] == 1);
        array_push($jsonArray, $user);
    }
    //$jsonArray = ["userData" => $jsonArray];
    echo json_encode($jsonArray);
} catch (mysqli_sql_exception $e) {}

?>