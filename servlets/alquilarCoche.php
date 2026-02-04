<?php
include "inlcude.php";
session_start();
$sesion = obtenerSesion();

$desde = $_POST["desde"] ?? "";
$hasta = $_POST["hasta"] ?? "";
$idCoche = intval($_POST["id"] ?? 0);
$idSucursalRec = intval($_POST["idSucursalRec"] ?? 0);
$idSucursalDev = intval($_POST["idSucursalDev"] ?? 0);

// TODO hacer insert con datos
/*
ACCIONES:
Comprobar que el usuario esta logueado -> Echarlo al index
hacer insert a base de datos con los datos recogidos del formulario
redirigir a pagina de gracias por el alquiler
*/

// Comprobar que el usuario está logueado
if ($sesion == "") {
    header("Location: index.php");
    exit;
}

// Obtener id de usuario (soporta array o objeto sesión)
//$userId = is_array($sesion) ? intval($sesion['id'] ?? 0) : (method_exists($sesion, 'getId') ? $sesion->getId() : $sesion->id ?? 0);
$userId = $sesion->id;
try {
    $alquiler = new AlquilerCoche($cn);
    $insertId = $alquiler->create($userId, $idCoche, $desde, $hasta, $idSucursalRec, $idSucursalDev, 'WEB');

    // Redirigir a la página de agradecimiento con el id del alquiler
    redirect("GraciasAlquiler.php?id=" . $insertId);
    exit;
} catch (RuntimeException $e) {
    if ($e->getMessage() === 'not_available') {
        redirect("alquilarCoche.php?id=$idCoche&desde=$desde&hasta=$hasta&error=not_available");
        exit;
    }
    // En caso de otros errores devolvemos al buscador
    redirect("buscar.php");
    exit;
} catch (Exception $e) {
    redirect("buscar.php");
    exit;
}
?>
