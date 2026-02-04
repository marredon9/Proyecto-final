<?php
include "include.php";
session_start();

$sesion = obtenerSesion();
if ($sesion == "") {
    redirect("login.php");
    exit;
}

$id = intval($_POST['id'] ?? $_GET['id'] ?? 0);
if ($id === 0) {
    redirect("index.php");
    exit;
}

// Comprobar que quien borra es el dueño o admin
try {
    $stmt = $cn->prepare("SELECT id_us FROM alquiler WHERE id = ? LIMIT 1;");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if (!$r) {
        redirect("miPerfil.php");
        exit;
    }
    $owner = $r['id_us'];
    //$userId = method_exists($sesion, 'getId') ? $sesion->getId() : $sesion->id;
    $userId = $sesion->id;
    /*if ($owner != $userId && !$sesion->esAdmin) {
        // no es propietario ni admin
        //si el que lo borra 
        redirect("miPerfil.php");
        exit;
    }*/
    if ($sesion->esAdmin) { //si el que lo borra es administrador...
        redirect("admin/verAlquileres.php"); //redirigir a página de ver listado de alquileres (NO EXISTE, HAY QUE CREARLO)
        exit;
    }

    // Marcamos como devuelto (seguro) para no perder historial
    /*$stmt = $cn->prepare("UPDATE alquiler SET devuelto = 1 WHERE id = ?;");
    $stmt->bind_param("i", $id);
    $stmt->execute();*/
    //si el que lo borra es el dueño del alquiler, redirigir a su perfil
    redirect("miPerfil.php");
    exit;
} catch (mysqli_sql_exception $e) {
    redirect("miPerfil.php");
    exit;
}
?>