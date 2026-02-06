<?php
include "include.php";

$json = file_get_contents("php://input");
tablaUsuarios($json);


?>