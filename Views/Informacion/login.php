<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Merak Login</title>
</head>
<body>
	<main>
		<form action="../../Controllers/login.php" method="POST">
			<div class="container-form">
				<div class="informacion">
					<div class="info-childs">
						<img class="logo" src="../../Images/logo_merak_horizontal_inverted.png">
						<h2>¡Bienvenido!</h2>
						<p>Para pedir cita y disfrutar de los beneficios que ofrece Merak únete a nosotros.</p>
						<a href="registro.php"><button type="button" class="">Registrarse</button></a>
					</div>
				</div>
				<div class="form-informacion">
					<div class="form-inf-childs">
						<h2>Inicia sesión</h2>
						<div class="formulario">
							<label for="email">
								<i class="bx bx-envelope"></i>
								<input type="email" placeholder="Correo electrónico" name="email" id="email">
							</label>
							<label for="pass">
								<i class="bx bx-lock-alt"></i>
								<input type="password" placeholder="Contraseña" name="pass" id="pass">
								<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
							</label>
							<?php 
								session_start();
								if (isset($_SESSION["flaglogin"])) {
									echo '<p>correo y/o contraseña incorrectos</p>';
									unset($_SESSION["flaglogin"]);	
								}
							?>
						</div>
						<div class="iniciar">
							<input type="submit" value="Iniciar sesion">
						</div>
						<a class ="contraseña-olvidada" href="cambiarPass.php">¿Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
		</form>
	</main>
	<script src="../../Controllers/password.js"></script>
</body>
</html>