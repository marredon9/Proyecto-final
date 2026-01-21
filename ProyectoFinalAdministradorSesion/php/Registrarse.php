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

    <form method="post" action="" id="registroForm">
        <div class="container d-flex justify-content-center mt-4">
    <div class="login-card col-12 col-sm-10 col-md-7 col-lg-6">

            <h5 class="text-center mb-4"><b>Registrarse</b></h5>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido 1</label>
                    <input type="text" name="apellido1" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido 2</label>
                    <input type="text" name="apellido2" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" maxlength="16" pattern="[0-9]{9}"
                        placeholder="612345678" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input type="text" name="dni" class="form-control" maxlength="9" pattern="[0-9]{8}[A-Za-z]"
                        placeholder="12345678A" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" required>
                </div>


                <div class="mb-4">
                    <label class="form-label">Repetir Contraseña</label>
                    <input type="password" id="password2" class="form-control" required>
                    <div id="error-password" class="text-danger mt-2 d-none">
                        Las contraseñas no coinciden
                    </div>
                </div>

                <div class="text-end">
                    <input type="submit" class="btn btn-custom" value="Entrar">
                </div>

            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../javaScript/script.js"></script>

    <!--AQUI VA EL FOOTER-->
    <?php footer(); ?>
  
</body>

</html>