<?php

<<<<<<< HEAD
//define("RUTA_ABS", "http://localhost/php/git/proyectofinal/Proyecto-final/");
//define("RUTA_ABS", "http://localhost/Proyecto-final/Proyecto-final/");
define("RUTA_ABS", "http://localhost/Proyecto_Final/"); //RUTA DEFINITIVA
define("RUTA_IMG", "assets/img/");
define("RUTA_VID", "assets/vid/");
define("RUTA_SRV", "servlets/");
=======
define("RUTA_ABS", "http://localhost/Proyecto_Final/");
//define("RUTA_ABS", "http://localhost/Proyecto_Final/Alquiza/");
//define("RUTA_ABS", "http://localhost/git/proyectofinal/");
define("RUTA_IMG", RUTA_ABS . "assets/img/");
define("RUTA_VID", RUTA_ABS . "assets/vid/");
define("RUTA_SRV", RUTA_ABS . "servlets/");
>>>>>>> f17284cdd076003e0255006ead602123c6abf5c4

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