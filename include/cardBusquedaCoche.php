<?php

function cardBusquedaCoche($result, $desde, $hasta) {
    $r = $result;
    //var_dump($r);
    $id = $r["id"];
    $marca = $r["marca"];
    $modelo = $r["modelo"];
    $tipo = $r["tipo"];
    $asientos = $r["asientos"];
    $puertas = $r["puertas"];
    $maletero = ($r["maletero"] == 1);
    $modo = $r["modo"];
    $emisiones = $r["emisiones"];
    $sucursal = $r["sucursal"];
    $precioDia = $r["precioDia"];
    $precioTotal = $r["preciototal"];
    $diasRecuento = $r["diasRecuento"];
    ?>
<!-- 
Esta version del card es solo para comprobar que todo funciona bien.
Luego se tiene que cambiar por otra que implemente los estilos
de la página de la rama proto. 
-->
<fieldset>
    <legend><?=$marca?> <?=$modelo?></legend>
    <table>
        <tr>
            <td>Tipo: </td>
            <td><input type="text" value="<?=$tipo?>"></td>
        </tr>
        <tr>
            <td>Asientos: </td>
            <td><input type="text" value="<?=$asientos?>"></td>
        </tr>
        <tr>
            <td>Puertas: </td>
            <td><input type="text" value="<?=$puertas?>"></td>
        </tr>
        <tr>
            <td>Maletero: </td>
            <td><input type="text" value="<?=$maletero?>"></td>
        </tr>
        <tr>
            <td>Modo: </td>
            <td><input type="text" value="<?=$modo?>"></td>
        </tr>
        <tr>
            <td>Emisiones: </td>
            <td><input type="text" value="<?=$emisiones?>"></td>
        </tr>
        <tr>
            <td>Sucursal: </td>
            <td><input type="text" value="<?=$sucursal?>"></td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td><?=$precioTotal?> (<?=$precioDia?>€ x <?=$diasRecuento?> dias)</td>
        </tr>
    </table>
    <form action="alquilarCoche.php" method="get">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="desde" value="<?=$desde?>">
        <input type="hidden" name="hasta" value="<?=$hasta?>">
        <input type="submit" value="Alquilar Coche">
    </form>
</fieldset>
    <?php
}

?>