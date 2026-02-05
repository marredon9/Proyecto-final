<?php
include "../../include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    http_response_code(403);
    exit;
}

try {
    $stmt = $cn->prepare("SELECT id, nombre, apellido1, apellido2, dni, email, es_admin FROM usuario ORDER BY id ASC");
    $stmt->execute();
    $res = $stmt->get_result();
    
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="usuarios_' . date('Y-m-d_H-i-s') . '.csv"');
    
    $output = fopen('php://output', 'w');
    
    fputcsv($output, ['ID', 'Nombre', 'Apellido 1', 'Apellido 2', 'DNI', 'Email', 'Es Admin'], ',');

    while ($usuario = $res->fetch_assoc()) {
        fputcsv($output, [
            $usuario['id'],
            $usuario['nombre'],
            $usuario['apellido1'],
            $usuario['apellido2'],
            $usuario['dni'],
            $usuario['email'],
            $usuario['es_admin'] == 1 ? 'true' : 'false'
        ], ',');
    }
    
    fclose($output);
    exit;
    
} catch (mysqli_sql_exception $e) {
    echo "Error al exportar usuarios";
    exit;
}
?>
