<?php
include "include.php";
$json = file_get_contents("php://input");
$usuario = json_decode($json);

$query = "
UPDATE usuario SET nombre = ?, apellido1 = ?, apellido2 = ?, dni = ?, email = ?, es_admin = ? WHERE id = ?;
";

try {
    $stmt = $cn->prepare($query);
    $stmt->bind_param("sssssdd", $usuario[1], $usuario[2], $usuario[3], $usuario[4], $usuario[5], $usuario[6], $usuario[0]);
    $stmt->execute();
    echo "OK";
} catch (mysqli_sql_exception $e) {
    echo $e;
}



?>