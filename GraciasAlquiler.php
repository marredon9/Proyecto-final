<?php
include "include.php";
session_start();

$id = intval($_GET['id'] ?? 0);

if ($id === 0) {
    redirect("index.php");
    exit;
}

$query = "
SELECT a.*, v.matricula, v.tipo, v.motor, v.precioDia,
m.nombre AS marca,
s_rec.nombre AS sucursal_recogida,
s_dev.nombre AS sucursal_devolucion
FROM alquiler a
JOIN vehiculo v ON v.id = a.id_ve
LEFT JOIN marca m ON m.id = v.id_m
LEFT JOIN sucursal s_rec ON s_rec.id = a.id_suc_rec
LEFT JOIN sucursal s_dev ON s_dev.id = a.id_suc_dev
WHERE a.id = ?
";

$stmt = $cn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$r = $stmt->get_result()->fetch_assoc();

if (!$r) {
    echo "Alquiler no encontrado";
    exit;
}

$dias = null;
$precioTotal = null;

if ($r['desde'] && $r['hasta']) {

    $stmt = $cn->prepare("SELECT ABS(DATEDIFF(?, ?) - 1) AS dias");
    $stmt->bind_param("ss", $r['desde'], $r['hasta']);
    $stmt->execute();

    $dias = intval($stmt->get_result()->fetch_assoc()['dias']);
    $precioTotal = $dias * $r['precioDia'];
}
?>
<h1>Gracias por su alquiler</h1>
<p>Detalles del alquiler:</p>
<ul>
    <li>Matrícula: <?= $r['matricula'] ?></li>
    <li>Tipo: <?= $r['tipo'] ?></li>
    <li>Motor: <?= $r['motor'] ?></li>
    <li>Marca: <?= $r['marca'] ?></li>
    <li>Sucursal de recogida: <?= $r['sucursal_recogida'] ?></li>
    <li>Sucursal de devolución: <?= $r['sucursal_devolucion'] ?></li>
    <li>Desde: <?= $r['desde'] ?></li>
    <li>Hasta: <?= $r['hasta'] ?></li>
    <?php if ($dias !== null && $precioTotal !== null): ?>
        <li>Días de alquiler: <?= $dias ?></li>
        <li>Precio total: <?= $precioTotal ?> €</li>
    <?php endif; ?>
    <li>Método de pago: <?= $r['metodo_pago'] ?></li>
    <li>Fianza: <?= $r['fianza'] ?> €</li>
</ul>
<p>Por favor, recuerde devolver el vehículo en la sucursal correspondiente en la fecha acordada.</p>
<p>¡Gracias por confiar en nosotros!</p>