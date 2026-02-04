<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}


if (isset($_GET['tema'])) {
    // Cambiar el modo según el parámetro GET y guardar en cookie
    $nuevo_tema = $_GET['tema'];
    setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
    // Redirigir para evitar que se vuelva a enviar el formulario
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
if (!isset($_COOKIE['theme'])) {
    setcookie('theme', 'light', time() + (30 * 24 * 60 * 60), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Obtener el tema de la cookie
$tema = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alquiza - Alquiler de Coches en Ibiza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="../sass/main-<?php echo $_COOKIE['theme'] ?>.css" /> <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>

<body>



    <?= navbarAdmin() ?>
    
        <div class="admin mt-5 mb-5 text-center">
            <h1>Gestión de vehículos</h1>
            <h3><a href="index.php">Volver atrás</a></h3>
            <h3><a href="añadirVehiculo.php">Añadir Vehículo</a></h3>
            <!-- no uso inputs porque no entran los campos en pantalla -->
            <table border="1" class="mx-auto">
                <tr>
                    <td></td>
                    <td><b>ID</b></td>
                    <td><b>Matrícula</b></td>
                    <td><b>Marca</b></td>
                    <td><b>Modelo</b></td>
                    <td><b>Tipo</b></td>
                    <td><b>Asientos</b></td>
                    <td><b>Puertas</b></td>
                    <td><b>Maletero</b></td>
                    <td><b>Modo</b></td>
                    <td><b>KM</b></td>
                    <td><b>Capacidad</b></td>
                    <td><b>Emisiones</b></td>
                    <td><b>Sucursal</b></td>
                    <td><b>Precio por dia</b></td>
                </tr>
                <?php

                //hacer consulta a base de datos
                try {
                    $stmt = $cn->prepare("SELECT v.*, s.nombre AS sucursal FROM vehiculo v INNER JOIN sucursal s ON s.id = v.id_sucursal;");
                    $stmt->execute();
                    $res = $stmt->get_result();
                    while ($r = $res->fetch_assoc()) {
                        $id = $r["id"];
                        $matricula = $r["matricula"];
                        $marca = $r["marca"];
                        $modelo = $r["modelo"];
                        $asientos = $r["asientos"];
                        $puertas = $r["puertas"];
                        $maletero = ($r["maletero"] == 1);
                        $modo = $r["modo"];
                        $km = $r["km"];
                        $capacidad = $r["capacidad"];
                        $emisiones = $r["emisiones"];
                        $sucursal = $r["sucursal"];
                        $tipo = $r["tipo"];
                        $precioDia = $r["precioDia"];
                        ?>
                        <tr>
                            <td><a href="verVehiculo.php?id=<?= $id ?>">Ver</a></td>
                            <td><?= $id ?></td>
                            <td><?= $matricula ?></td>
                            <td><?= $marca ?></td>
                            <td><?= $modelo ?></td>
                            <td><?= $tipo ?></td>
                            <td><?= $asientos ?></td>
                            <td><?= $puertas ?></td>
                            <td><?= $maletero ?></td>
                            <td><?= $modo ?></td>
                            <td><?= $km ?></td>
                            <td><?= $capacidad ?></td>
                            <td><?= $emisiones ?></td>
                            <td><?= $sucursal ?></td>
                            <td><?= $precioDia ?></td>
                        </tr>
                        <?php
                    }
                } catch (mysqli_sql_exception $e) {

                }
                ?>
            </table>
        </div>


    <?= footer() ?>

</body>

</html>