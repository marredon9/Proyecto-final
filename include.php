<?php
//PONER NOMBRES DE ARCHIVOS A IMPORTAR DE LA CARPETA INCLUDE
$files = "
db.php
sesionUsuario.php
debug.php
rutaAssets.php
";

//sustituir espacios, tabulaciones y saltos de linea 
$files = preg_replace('/\s+/S', " ", $files);
$files = explode(" ", $files);
//var_dump($files);
for ($i = 0; $i < sizeof($files); $i++) {
    $element = $files[$i];
    if ($element == "") continue;
    //echo $element;
    include "include/" . $element;
}
//echo "Include realizado correctamente!";
?>