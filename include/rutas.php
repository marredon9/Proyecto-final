<?php

define("RUTA_ABS", "http://localhost/Proyecto_Final/");
//define("RUTA_ABS", "http://localhost/Proyecto_Final/Alquiza/");
//define("RUTA_ABS", "http://localhost/git/proyectofinal/");
define("RUTA_IMG", RUTA_ABS . "assets/img/");
define("RUTA_VID", RUTA_ABS . "assets/vid/");
define("RUTA_SRV", RUTA_ABS . "servlets/");

function img($nombre) {
    return RUTA_IMG . $nombre;
}

function vid($nombre) {
    return RUTA_VID . $nombre;
}

function srv($nombre) {
    return RUTA_SRV . $nombre . ".php";
}

function lnk($ruta) {
    return RUTA_ABS . $ruta;
}

function redirect($ruta) {
    header("Location: " . RUTA_ABS . $ruta);
}

?>