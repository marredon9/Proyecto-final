<?php
// Iniciar sesión o verificar si hay una cookie de tema
include "include.php";

session_start();

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?=headerPagina()?>
</head>

<body>

    <!-- Navbar -->
    <?= navbar() ?>

    <section class="hero-section position-relative min-vh-100">
        <?=fondoVideo()?>
        <!-- Contenedor del formulario en un cuadro azul con transparencia -->
        <div class="form-container">
            <!-- Formulario de login -->
            <form method="post" action="<?=srv("iniciarSesion")?>">
                <div class="login-card">
                    <h4 class="text-center mb-3"><b>Iniciar Sesión</b></h4>
                    <div class="mb-3">
                        <label class="form-label">DNI</label>
                        <input type="text" name="dni" class="form-control password-input" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control password-input" required />
                    </div>
                    <div class="text-end">
                        <input type="submit" class="btn btn-custom" value="Entrar" />
                    </div>
                </div>
            </form>
            <!-- Texto de registro justo debajo del formulario -->
            <div class="register-text mt-2">
                <strong class="negro">¿Aún no tienes cuenta con nosotros?</strong>
                <a href="Registrarse.php">Regístrate aquí</a>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?= footer() ?>

</body>

</html>