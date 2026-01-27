<?php

define("RUTA_ABS", "http://localhost/php/git/proyectofinal/Proyecto-final/");
define("RUTA_IMG", "assets/img/");
define("RUTA_VID", "assets/vid/");
define("RUTA_SRV", "servlets/");

function img($nombre) {
    return RUTA_ABS . RUTA_IMG . $nombre;
}

function vid($nombre) {
    return RUTA_ABS . RUTA_VID . $nombre;
}

function srv($nombre) {
    return RUTA_ABS . RUTA_SRV . $nombre . ".php";
}

function lnk($ruta) {
    return RUTA_ABS . $ruta;
}

function redirect($ruta) {
    header("Location: " . RUTA_ABS . $ruta);
}

?>