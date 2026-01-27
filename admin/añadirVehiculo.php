<?php
include "include.php";
session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

?>
<form>
    <table>
        <tr>
            <td>Matrícula: </td>
            <td><input type="text" name="matricula" required></td>
        </tr>
        <tr>
            <td>Marca: </td>
            <td><input type="text" name="marca" required></td>
        </tr>
        <tr>
            <td>Modelo: </td>
            <td><input type="text" name="modelo" required></td>
        </tr>
        <tr>
            <td>Asientos: </td>
            <td><input type="number" name="asientos" required></td>
        </tr>
        <tr>
            <td>Puertas: </td>
            <td><input type="number" name="puertas" required></td>
        </tr>
        <tr>
            <td>Maletero: </td>
            <td><input type="checkbox" name="maletero" required></td>
        </tr>
        <tr>
            <td>Modo: </td>
            <td>
                <select name="modo">
                    <option value="automatico">Automático</option>
                    <option value="manual">Manual</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kilometraje: </td>
            <td><input type="number" name="km" required></td>
        </tr>
        <tr>
            <td>Capacidad: </td>
            <td><input type="number" name="capacidad" required></td>
        </tr>
        <tr>
            <td>Emisiones: </td>
            <td>
                <select name="emisiones">
                    <option value="ninguno">Ninguno</option>
                    <option value="0">0</option>
                    <option value="eco">ECO</option>
                    <option value="c">C</option>
                    <option value="b">B</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Sucursal: </td>
            <td>
                <select name="sucursal">
                    <?php

//consulta para crear select con sucursales al vuelo
try {
    $stmt = $cn->prepare("SELECT id, nombre FROM sucursal;");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
        $id = $r["id"];
        $nombre = $r["nombre"];
        ?>
                    <option value="<?=$id?>"><?=$nombre?></option>
        <?php
    }
} catch (mysqli_sql_exception $e) {
    
}

                    ?>
                </select>
            </td>
        </tr>
    </table>
</form>