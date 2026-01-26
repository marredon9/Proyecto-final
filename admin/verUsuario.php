<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}
//comprobar que se está seleccionando un usuario (el parametro id de la url)
$id = $_GET["id"] ?? 0;
if ($id == 0) {
    //redirect("admin/usuarios.php");
}

//obtener datos del usuario
try {
    $stmt = $cn->prepare("SELECT * FROM usuario WHERE id = ?;");
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();

    $nombre = htmlspecialchars($r["nombre"] ?? "");
    $apellido1 = htmlspecialchars($r["apellido1"] ?? "");
    $apellido2 = htmlspecialchars($r["apellido2"] ?? "");
    $dni = htmlspecialchars($r["dni"] ?? "");
    $email = htmlspecialchars($r["email"] ?? "");
    $esAdmin = $r["es_admin"] == 1;
} catch (mysqli_sql_exception $e) {
    //redirect("admin/usuarios.php");
}

?>
<h1>Editar usuario</h1>

<table>
    <form action="<?= srv("admin/editarUsuario") ?>" method="POST">
        <tr>
            <td>ID: </td>
            <td><input type="text" disabled value="<?= $id ?>"><input type="hidden" value="<?= $id ?>"></td>
        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" value="<?= $nombre ?>" name="nombre"></td>
        </tr>
        <tr>
            <td>1<sup>er</sup> apellido: </td>
            <td><input type="text" value="<?= $apellido1 ?>" name="apellido1"></td>
        </tr>
        <tr>
            <td>2<sup>do</sup> apellido: </td>
            <td><input type="text" value="<?= $apellido2 ?>" name="apellido2"></td>
        </tr>
        <tr>
            <td>DNI: </td>
            <td><input type="text" value="<?= $dni ?>" name="dni"></td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td><input type="email" value="<?= $email ?>" name="email"></td>
        </tr>
        <tr>
            <td>Administrador</td>
            <td><input type="checkbox" name="esAdmin" <?= (($esAdmin) ? "checked" : "") ?>></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" value="<?= $id ?>" name="id">
                <input type="submit" value="Editar Usuario">
            </td>
            <td></td>
        </tr>
    </form>
    <tr>
        <td>
            <form action="<?= srv("admin/borrarUsuario") ?>">
                <input type="hidden" value="<?= $id ?>" name="id">
                <input type="submit" value="Borrar Usuario">
            </form>
        </td>
        <td></td>
    </tr>
</table>