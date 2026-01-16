<?php
include "db.php";
sesion_start();

//servlet para eliminar el usuario que le da al boton
//(borra el usuario que tenga el id de la sesion almacenada)
//(si el que lo ejecuta tiene sesion del usuario 11, elimina el 11)
//---
/*
Errores: 
0. Error en la base de datos
1. El usuario no existe
*/

$sesion = $_SESSION["sesion"];
try {
    $id = $session->id;

    //hacer consulta
    $stmt = $cn->prepare("SELECT COUNT(*) AS count FROM usuario WHERE id = ? AND eliminado = 0;");
    $stmt->bind_param("d", $id);
    $stmt->execute();

    //lectura de datos
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $recuento = $r["count"];
    if ($recuento != 1) {
        //error 1: el usuario no existe (o ya esta eliminado)
        header("Location: index.php?error=1");
    }

    //borrar usuario
    $stmt = $cn->prepare("UPDATE usuario SET eliminado = 1 WHERE eliminado = 0 AND id = ?;");
    $stmt->bind_param("d", $id);
    $stmt->execute();

    //cerrar sesion
    unset($_SESSION["sesion"]);
    unset($sesion);
    header("Location: index.php");

} catch (mysqli_sql_exception $e) {
    //nada
}

?>