<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";
session_start();

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?=headerPagina()?>
</head>

<body>

    <!-- Navbar -->
    <?= navbar() ?>

    