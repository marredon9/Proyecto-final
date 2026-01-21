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
<!--<nav class="navbar position-relative mb-3">
    <div class="container-fluid d-flex align-items-center">

        <a class="navbar-brand logo-center" href="#">
            <img src="../img/editado.png" class="logo" alt="Logo">
        </a>

        <div class="usuario-container ms-auto">
            <a href="#">
                <img src="../img/usuario.png" class="usuario-img" alt="Usuario">
            </a>
        </div>

    </div>
</nav>-->
    <!--AQUI VA EL NAVBAR-->
    <?php navbar(); ?> 


<form method="post" action="">
    <div class="container d-flex justify-content-center mt-4">
        <div class="login-card col-10 col-sm-8 col-md-5 col-lg-4">

            <h5 class="text-center mb-4"><b>Administrador</b></h5>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<!--AQUI VA EL FOOTER-->
    <?php footer(); ?>

</body>
</html>
