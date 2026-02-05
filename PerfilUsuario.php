
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!--
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
    -->

    <!-- BOOTSTRAP 5 --> <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    -->
    <?=headerPaginaTitulo("Perfil de Usuario")?>
</head>

<body class="bg-light">

    <div class="container mt-5">

        <!-- TÍTULO -->
        <div class="text-center mb-4">
            <h1 class="fw-bold">Perfil del Usuario</h1>
            <p class="text-muted">Información personal registrada en el sistema</p>
        </div>


            <!-- ALERTA SI NO EXISTE -->
            <div class="alert alert-danger text-center">
                ❌ No existe ningún usuario con el email:
                <b>
                    <?php echo $email; ?>
                </b>
            </div>


            <!-- TARJETA PERFIL -->
            <div class="card shadow-lg rounded-4">

                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">
                        👤
                        <?php echo $usuario["nombre"] . " " . $usuario["apellido1"]; ?>
                    </h3>
                </div>

                <div class="card-body p-4">

                    <h5 class="mb-3 text-secondary">Datos del usuario</h5>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <b>ID:</b>
                            <?php echo $usuario["id"]; ?>
                        </li>

                        <li class="list-group-item">
                            <b>Nombre completo:</b>
                            <?php echo $usuario["nombre"] . " " . $usuario["apellido1"] . " " . $usuario["apellido2"]; ?>
                        </li>

                        <li class="list-group-item">
                            <b>DNI:</b>
                            <?php echo $usuario["dni"]; ?>
                        </li>

                        <li class="list-group-item">
                            <b>Email:</b>
                            <?php echo $usuario["email"]; ?>
                        </li>

                        <li class="list-group-item">
                            <b>Fecha de nacimiento:</b>
                            <?php echo $usuario["fecha_nac"]; ?>
                        </li>

                        <li class="list-group-item">
                            <b>Administrador:</b>
                            <?php echo ($usuario["es_admin"] ? "Sí" : "No"); ?>
                        </li>

                        <li class="list-group-item">
                            <b>Cuenta desactivada:</b>
                            <?php echo ($usuario["desactivado"] ? "Sí" : "No"); ?>
                        </li>

                    </ul>

                </div>

                <!-- PIE -->
                <div class="card-footer text-center">
                    <a href="index.php" class="btn btn-outline-primary">
                        ⬅ Volver al inicio
                    </a>
                </div>

            </div>


    </div>
</body>

</html>