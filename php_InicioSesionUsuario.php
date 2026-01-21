<?php
include "footer.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alquiza - Iniciar sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!--AQUI VA EL NAVBAR-->
    <?php navbar(); ?>

<form method="post" action="">
    <div class="container d-flex justify-content-center mt-4">
        <div class="login-card col-10 col-sm-8 col-md-5 col-lg-4">

            <h5 class="text-center mb-4"><b>Usuario</b></h5>

            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="text-end">
                <input type="submit" class="btn btn-custom" value="Entrar">
            </div>

        </div>
    </div>
</form>

<div class="text-center mt-3">
    <small>
        ¿Aún no tienes cuenta con nosotros?
        <a href="#">Regístrate aquí</a>
    </small>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!--AQUI VA EL FOOTER-->
    <?php footer(); ?>

</body>
</html>
