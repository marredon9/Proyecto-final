<?php

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

		<div class="form-container">
			<form method="post" action="<?=srv("registrarUsuario")?>" class="w-100">
				<h5 class="text-center mb-4"><b>Registrarse</b></h5>

				<div class="mb-2">
					<label class="form-label">Nombre</label>
					<input type="text" name="nombre" class="form-control email-input" required>
				</div>

				<div class="row">
					<div class="col-md-6 mb-2">
						<label class="form-label">Apellido 1</label>
						<input type="text" name="apellido1" class="form-control email-input" required>
					</div>
					<div class="col-md-6 mb-2">
						<label class="form-label">Apellido 2</label>
						<input type="text" name="apellido2" class="form-control email-input">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 mb-2">
						<label class="form-label">Teléfono</label>
						<input type="text" name="telefono" class="form-control email-input" maxlength="9"
							pattern="[0-9]{9}">
					</div>
					<div class="col-md-6 mb-2">
						<label class="form-label">DNI</label>
						<input type="text" name="dni" class="form-control email-input" maxlength="9"
							pattern="[0-9]{8}[A-Za-z]" required>
					</div>
				</div>

				<div class="mb-2">
					<label class="form-label">Correo electrónico</label>
					<input type="email" name="email" class="form-control email-input" required>
				</div>

				<div class="row">
					<div class="col-md-6 mb-3">
						<label class="form-label">Contraseña</label>
						<input type="password" name="contraseña" class="form-control password-input" required>
					</div>
					<div class="col-md-6 mb-3">
						<label class="form-label">Repetir contraseña</label>
						<input type="password" name="repetirContraseña" class="form-control password-input" required>
					</div>
				</div>

				<div class="text-center">
					<button type="submit" class="btn-custom">Crear cuenta</button>
				</div>
			</form>

			<div class="register-text mt-3">
				<strong>¿Ya tienes cuenta?</strong>
				<a href="IniciarSesion.php">Inicia sesión</a>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<?= footer() ?>
</body>

</html>