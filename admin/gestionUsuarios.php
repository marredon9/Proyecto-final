<?php
include "include.php";
obtenerSesion();
verificarAdmin();
?>
<h1>Listado de usuarios</h1>

<?php
//hacer consulta a base de datos con todos los usuarios
$stmt = $cn->prepare("SELECT * FROM usuario;");
$stmt->execute();
?>

<table border="1">
    <?php
while ($r = $res->fetch_assoc()) {
    $id = htmlspecialchars($r["id"]);
    $nombre = htmlspecialchars($r["nombre"]);
    $apellido1 = htmlspecialchars($r["apellido1"]);
    $apellido2 = htmlspecialchars($r["apellido2"]);
    $dni = htmlspecialchars($r["dni"]);
    $fecha_nac = htmlspecialchars($r["fecha_nac"]);
    $es_admin = htmlspecialchars($r["es_admin"]);
    $desactivado = htmlspecialchars($r["desactivado"]);
    $email = htmlspecialchars($r["email"]);
}
    ?>
</table>