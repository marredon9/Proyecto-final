<?php
include "include.php";
obtenerSesion();
//verificarAdmin();
?>
<h1>Listado de usuarios</h1>

<?php
//hacer consulta a base de datos con todos los usuarios
$stmt = $cn->prepare("SELECT * FROM usuario;");
$stmt->execute();
$res = $stmt->get_result();
?>

<table border="1">
    <tr>
        <td><b>ID</b></td>
        <td><b>DNI</b></td>
        <td><b>E-mail</b></td>
        <td><b>Nombre</b></td>
        <td><b>Apellido 1</b></td>
        <td><b>Apellido 2</b></td>
        <td><b>Fecha de nacimiento</b></td>
        <td><b>Adminsitrador</b></td>
        <td><b>Desactivado</b></td>
    </tr>
    <?php
while ($r = $res->fetch_assoc()) {
    $id = (htmlspecialchars($r["id"]) ?? "");
    $nombre = (htmlspecialchars($r["nombre"]) ?? "");
    $apellido1 = (htmlspecialchars($r["apellido1"]) ?? "");
    $apellido2 = (htmlspecialchars($r["apellido2"]) ?? "");
    $dni = (htmlspecialchars($r["dni"]) ?? "");
    $fecha_nac = (htmlspecialchars($r["fecha_nac"]) ?? "");
    $es_admin = (htmlspecialchars($r["es_admin"]) ?? "");
    $desactivado = (htmlspecialchars($r["desactivado"]) ?? "");
    $email = (htmlspecialchars($r["email"]) ?? "");
    ?>
    <tr>
        <td><?=$id?></td>
        <td><?=$dni?></td>
        <td><?=$email?></td>
        <td><?=$nombre?></td>
        <td><?=$apellido1?></td>
        <td><?=$apellido2?></td>
        <td><?=$fecha_nac?></td>
        <td><?=$es_admin?></td>
        <td><?=$desactivado?></td>
    </tr>
    <?php
}
    ?>
</table>