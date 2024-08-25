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
	<title>Merak Registro</title>
</head>
<body>
	<form action="../../Controllers/correo.php" method="POST">
		<?php
			session_start();
			if (isset($_SESSION['arrgloinfo'])) {
				echo '
		<div class="container-form">
			<div class="informacion">
				<div class="info-childs">
					<img class="logo" src="../../Images/logo_merak_horizontal_inverted.png">
					<h2>¡Bienvenido!</h2>
					<p>Si ya tienes cuenta y deseas seguir disfrutando de los beneficios que ofrece Merak, por favor inicia sesión con tus datos.</p>
					<a href="login.php"><button type="button" class="">Iniciar sesión</button></a>
				</div>
			</div>
			<div class="form-informacion">
				<div class="form-inf-childs">
					<h2>Crear una cuenta</h2>
					<div class="formulario">
						<label for="nombre">
							<i class="bx bx-user"></i>
							<input type="text" placeholder="Nombre" name="nombre" id="nombre" required value="'.$_SESSION['arrgloinfo']['nombre'].'">
						</label>
						<label for="apellidop">
							<i class="bx bx-user"></i>
							<input type="text" placeholder="Apellido paterno" name="apellidop" id="apellidop" required value="'.$_SESSION['arrgloinfo']['apellidop'].'">
						</label>
						<label for="apellidom">
							<i class="bx bx-user"></i>
							<input type="text" placeholder="Apellido materno" name="apellidom" id="apellidom" required value="'.$_SESSION['arrgloinfo']['apellidom'].'">
						</label>
						<label for="fechan">
							<i class="bx bx-calendar"></i>
							<input type="date" placeholder="Fecha de nacimiento" name="fechan" id="fechan" required value="'.$_SESSION['arrgloinfo']["fechan"].'">
						</label>
						<label for="tel">
							<i class="bx bx-phone"></i>
							<input type="tel" placeholder="Teléfono" name="tel" id="tel" required value="'.$_SESSION['arrgloinfo']['telefono'].'">
						</label>
						<label for="correo">
							<i class="bx bx-envelope"></i>
							<input type="email" placeholder="Correo electrónico" name="correo" id="correo" required value="'.$_SESSION['arrgloinfo']['correo'].'">
						</label>
						<label for="pass">
							<i class="bx bx-lock-alt" ></i>
							<input type="password" placeholder="Contraseña" name="pass" id="pass" required>
							<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
						</label>
						<div class="aux">
							<label for="passconf">
								<i class="bx bx-lock-alt" ></i>
								<input type="password" placerholder="Confirmar contraseña" name="passconf" id="passconf" required>
								<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
							</label>
						</div>
					</div>
					<p>Las contraseñas no coinciden</p>
					<input type="submit" value="Siguiente">
				</div>
			</div>	
		</div>';
			}else{
				echo '
		<div class="container-form">
			<div class="informacion">
				<div class="info-childs">
					<img class="logo" src="../../Images/logo_merak_horizontal_inverted.png">
					<h2>¡Bienvenido!</h2>
					<p>Si ya tienes cuenta y deseas seguir disfrutando de los beneficios que ofrece Merak, por favor inicia sesión con tus datos.</p>
					<a href="login.php"><button type="button" class="">Iniciar sesión</button></a>
				</div>
			</div>
			<div class="form-informacion">
				<div class="form-inf-childs">
					<h2>Crear una cuenta</h2>
					<div class="formulario">
						<label for="nombre">
							<i class="bx bx-user"></i>
							<input type="text" placeholder="Nombre" name="nombre" id="nombre" required>
						</label>
						<label for="apellidop">
							<i class="bx bx-user"></i>
							<input type="text" placeholder="Apellido paterno" name="apellidop" id="apellidop" required>
						</label>
						<label for="apellidom">
							<i class="bx bx-user"></i>
							<input type="text" placeholder="Apellido materno" name="apellidom" id="apellidom" required>
						</label>
						<label for="fechan">
							<i class="bx bx-calendar"></i>
							<input type="date" placeholder="Fecha de nacimiento" name="fechan" id="fechan" required value="1990-01-01">
						</label>
						<label for="tel">
							<i class="bx bx-phone"></i>
							<input type="tel" placeholder="Teléfono" name="tel" id="tel" required>
						</label>
					';
		if(isset($_SESSION["flagrep"])){
			echo "<p>El correo usado ya está registrado</p>";
			unset($_SESSION["flagrep"]);
		}
		echo '
						<label for="correo">
							<i class="bx bx-envelope"></i>
							<input type="email" placeholder="Correo electrónico" name="correo" id="correo" required>
						</label>
						<label for="pass">
							<i class="bx bx-lock-alt" ></i>
							<input type="password" placeholder="Contraseña" name="pass" id="pass" required>
							<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
						</label>
						<div class="aux">
							<label for="passconf">
								<i class="bx bx-lock-alt" ></i>
								<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
								<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
							</label>
						</div>
					</div>
					<input type="submit" value="Siguiente">
				</div>
			</div>	
		</div>';}
		 ?>

		 
	</form>
	<script src="../../Controllers/password.js"></script>
</body>
</html>