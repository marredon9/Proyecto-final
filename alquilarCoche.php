<?php
include "include.php";
session_start();
$sesion = obtenerSesion();

$idCoche = intval($_GET["id"] ?? 0);
$desde = $_GET["desde"] ?? "";
$hasta = $_GET["hasta"] ?? "";
if ($idCoche == 0 || $desde == "" || $hasta == "") {
    redirect("buscar.php");
}

$query = "
SELECT sub.*, s.nombre AS sucursal FROM (
	SELECT 
		v.*,
		COUNT(a.id) AS total_alquileres,
        ABS(DATEDIFF(?, ?) - 1) AS diasRecuento,
        ABS(DATEDIFF(?, ?) - 1) * v.precioDia AS preciototal
	FROM vehiculo v
	LEFT JOIN alquiler a
		ON a.id_ve = v.id
		AND ((a.desde <= ? AND ? <= a.hasta) OR (a.desde <= ? AND ? <= a.hasta))
	GROUP BY v.id, v.matricula, v.marca, v.modelo
	ORDER BY total_alquileres DESC
) sub INNER JOIN sucursal s ON sub.id_sucursal = s.id
WHERE sub.id = ?;
";

$disponible = true;

try {

    $stmt = $cn->prepare($query);
    $stmt->bind_param("ssssssssd", $desde, $hasta, $desde, $hasta, $desde, $desde, $hasta, $hasta, $idCoche);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    if ($r["total_alquileres"] > 0) { //si el coche ya tiene alquileres
        $disponible = false;
    }
} catch (mysqli_sql_exception $e) {
    redirect("buscar.php");
}
?>

<ul>
    <li>Coche: <?=$r["marca"]?> <?=$r["modelo"]?></li>
    <li>Asientos: <?=$r["asientos"]?></li>
    <li>Puertas: <?=$r["puertas"]?></li>
    <li>Maletero: <?=$r["maletero"] == 1 ? "Si" : "No"?></li>
    <li>Modo: <?=$r["modo"]?></li>
    <li>Kilómetros: <?=$r["km"]?></li>
    <li>Precio: <?=$r["preciototal"]?> (<?=$r["precioDia"]?>€ x <?=$r["diasRecuento"]?> dias)</li>
    <li>Desde: <?=$desde?></li>
    <li>Hasta: <?=$hasta?></li>
    <form action="<?=srv("alquilarCoche")?>" method="post">
        <li>
            Sucursal de recogida:
            <select disabled>
                <option><?=$r["sucursal"]?></option>
            </select>
        </li>
        <li>
            Sucursal de devolución:
            <select name="idSucursalDev">
                <?php
try {
    $stmt = $cn->prepare("SELECT * FROM sucursal;");
    $stmt->execute();
    $res = $stmt->get_result();
    while ($i = $res->fetch_assoc()) {
        ?>
                <option value="<?=$i["id"]?>"><?=$i["nombre"]?></option>
        <?php
    }
} catch (mysqli_sql_exception $e) {
    echo $e;
}
                ?>
            </select>
        </li>
        <!--<li>Alquileres: <?=$r["total_alquileres"]?></li>-->
        <?php
if ($disponible) {
    ?>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="desde" value="<?=$desde?>">
        <input type="hidden" name="hasta" value="<?=$hasta?>">
        <input type="hidden" name="idSucursalRec" value="<?=$r["sucursal"]?>">
        <input type="submit" value="Alquilar Coche">
    </form>
    <?php
} else {
    ?>
    </form>
    <form>
        <input type="submit" disabled value="No disponible">
    </form>
    <?php
}
    ?>
</ul>