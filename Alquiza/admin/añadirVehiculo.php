<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

// Iniciar sesión o verificar si hay una cookie de tema

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

    <form action="<?= srv("admin/añadirVehiculo") ?>" method="post">
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
                <td>Tipo: </td>
                <td>
                    <select name="tipo">
                        <!--
                    <option value="COCHE">Coche</option>
                    <option value="MOTO">Moto</option>
                    <option value="FURGONETA">Furgoneta</option>
                    -->
                        <?php
                        for ($i = 0; $i < sizeof(DB_TIPOS); $i++) {
                            $v = DB_TIPOS[$i];
                            ?>
                            <option value="<?= $v ?>"><?= $v ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Precio por dia: </td>
                <td><input type="text" name="precioDia"></td>
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
                        <!--
                    <option value="AUTOMATICO">Automático</option>
                    <option value="MANUAL">Manual</option>
                    -->
                        <?php
                        for ($i = 0; $i < sizeof(DB_MODOS); $i++) {
                            $v = DB_MODOS[$i];
                            ?>
                            <option value="<?= $v ?>"><?= $v ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <!--
        <tr>
            <td>Kilometraje: </td>
            <td><input type="number" name="km" required></td>
        </tr>
        -->
            <tr>
                <td>Capacidad: </td>
                <td><input type="number" name="capacidad" required></td>
            </tr>
            <tr>
                <td>Emisiones: </td>
                <td>
                    <select name="emisiones">
                        <!--
                    <option value="NINGUNO">Ninguno</option>
                    <option value="0">0</option>
                    <option value="ECO">ECO</option>
                    <option value="C">C</option>
                    <option value="B">B</option>
                    -->
                        <?php
                        for ($i = 0; $i < sizeof(DB_TIPOS); $i++) {
                            $v = DB_TIPOS[$i];
                            ?>
                            <option value="<?= $v ?>"><?= $v ?></option>
                            <?php
                        }
                        ?>
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
                                <option value="<?= $id ?>"><?= $nombre ?></option>
                                <?php
                            }
                        } catch (mysqli_sql_exception $e) {

                        }

                        ?>
            <tr>
                <td>Precio por dia: </td>
                <td><input type="number" name="precioDia" required></td>
            </tr>
            </select>
            </td>
            </tr>
            <tr>
                <td><input type="reset" value="Vaciar campos"></td>
                <td><input type="submit" value="Guardar Coche"></td>
            </tr>
        </table>
    </form>
    </section>
    <?= footer() ?>
</body>

</html>