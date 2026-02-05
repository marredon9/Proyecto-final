<?php
include "include.php";
session_start();
$sesion = obtenerSesion();

if ($sesion == "") {
    redirect("iniciarSesion.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $desde = $_POST["desde"] ?? "";
    $hasta = $_POST["hasta"] ?? "";
    $idCoche = intval($_POST["id"] ?? 0);
    $idSucursalRec = intval($_POST["idSucursalRec"] ?? 0);
    $idSucursalDev = intval($_POST["idSucursalDev"] ?? 0);

    if ($desde == "" || $hasta == "" || $idCoche == 0 || $idSucursalRec == 0 || $idSucursalDev == 0) {
        redirect("buscar.php");
    }

    try {
        $query = "SELECT precioDia FROM vehiculo WHERE id = ?";
        $stmt = $cn->prepare($query);
        $stmt->bind_param("i", $idCoche);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($row = $res->fetch_assoc()) {
            $precioDia = $row['precioDia'];

            $date1 = new DateTime($desde);
            $date2 = new DateTime($hasta);
            $diff = $date1->diff($date2);
            $dias = $diff->days + 1;

            $precioTotal = $precioDia * $dias;

            $fianza = 300.00;
            $metodo_pago = "Tarjeta";
            $id_us = $sesion->getId();
            $devuelto = 0;

            $insertQuery = "INSERT INTO alquiler (id_us, id_ve, fianza, metodo_pago, id_suc_rec, id_suc_dev, devuelto, desde, hasta, precio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmtInsert = $cn->prepare($insertQuery);
            $stmtInsert->bind_param("iidssiissi", $id_us, $idCoche, $fianza, $metodo_pago, $idSucursalRec, $idSucursalDev, $devuelto, $desde, $hasta, $precioTotal);

            if ($stmtInsert->execute()) {
                redirect("GraciasAlquiler.php");
            } else {
                echo "Error al realizar el alquiler.";
            }
        } else {
            redirect("buscar.php");
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    redirect("buscar.php");
}
