<?php 
	session_start();
	if (isset($_SESSION["info"])) {
		$part1 = '<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
			<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
			<link rel="stylesheet" type="text/css" href="../../CSS/cambiarPass.css">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
			<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
			<title>Merak Cambio Contraseña</title>
		</head>
		<body>';
		if(isset($_SESSION["flague"])){
			unset($_SESSION["flague"]);
			$part2 = '
			<form action="../../Controllers/correoPassword.php" method="POST">
				<div class="cambiar-contraseña">
					<h2>¿Olvidaste tu contraseña?</h2>
					<p>¡No te preocupes! Llena el siguiente formulario:</p>	
				</div>
				<div class="form-cambio-cont">
					<div class="formulario">
						<label for="correo">
							<i class="bx bx-envelope"></i>
							<input type="email" placeholder="Correo electrónico" name="correo" id="correo" value="'.$_SESSION['info'][0]["Correo"].'" disabled>
						</label>
						<label for="pass">
							<i class="bx bx-lock-alt"></i>
							<input type="password" placeholder="Contraseña nueva" name="pass" id="pass" required>
							<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
						</label>
						<div class="aux">
							<label for="passconf">
								<i class="bx bx-lock-alt"></i>
								<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
								<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
							</label>
						</div>
					</div>
					<p>El correo electrónico ingresado no es válido</p>
					<input type="submit" value="Guardar cambios">
				</div>
			</form>'
			;

		}elseif(isset($_SESSION["flagdifpass"])) {
			unset($_SESSION["flagdifpass"]);
			$part2 = '
			<form action="../../Controllers/correoPassword.php" method="POST">
				<div class="cambiar-contraseña">
					<h2>¿Olvidaste tu contraseña?</h2>
					<p>¡No te preocupes! Llena el siguiente formulario:</p>	
				</div>
				<div class="form-cambio-cont">
					<div class="formulario">
						<label for="correo">
							<i class="bx bx-envelope"></i>
							<input type="email" placeholder="Correo electrónico" name="correo" id="correo" value="'.$_SESSION['info'][0]["Correo"].'" disabled>
						</label>
						<label for="pass">
							<i class="bx bx-lock-alt"></i>
							<input type="password" placeholder="Contraseña nueva" name="pass" id="pass" required>
							<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
						</label>
						<div class="aux">
							<label for="passconf">
								<i class="bx bx-lock-alt"></i>
								<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
								<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
							</label>
						</div>
					</div>
					<p>Las contraseñas no coinciden</p>
					<input type="submit" value="Guardar cambios">
				</div>
			</form>';
		}else{
			$part2 = '
			<form action="../../Controllers/correoPassword.php" method="POST">
				<div class="cambiar-contraseña">
					<h2>¿Olvidaste tu contraseña?</h2>
					<p>¡No te preocupes! Llena el siguiente formulario:</p>	
				</div>
				<div class="form-cambio-cont">
					<div class="formulario">
						<label for="correo">
							<i class="bx bx-envelope"></i>
							<input type="email" placeholder="Correo electrónico" name="correo" id="correo" value="'.$_SESSION['info'][0]["Correo"].'" disabled>
						</label>
						<label for="pass">
							<i class="bx bx-lock-alt"></i>
							<input type="password" placeholder="Nueva contraseña" name="pass" id="pass" required>
							<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
						</label>
						<div class="aux">
							<label for="passconf">
								<i class="bx bx-lock-alt"></i>
								<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
								<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
							</label>
						</div>
					</div>
					<input type="submit" value="Guardar cambios">
				</div>
			</form>';
		}
		

		$part3 = '</body>
		</html>';

		echo $part1;
		include_once("../Plantillas/Navegador.php");
		echo $part2;
		include_once("../Plantillas/Footer.html");
		echo $part3;
	}else{
		$part1 = '<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
			<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
			<link rel="stylesheet" type="text/css" href="../../CSS/cambiarPass.css">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
			<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
			<title>Merak Cambio Contraseña</title>
		</head>
		<body>';

		if(isset($_SESSION["flague"])){
			unset($_SESSION["flague"]);
			$part2 = '
	<form action="../../Controllers/correoPassword.php" method="POST">
		<div class="cambiar-contraseña">
			<h2>¿Olvidaste tu contraseña?</h2>
			<p>¡No te preocupes! Llena el siguiente formulario:</p>	
		</div>
		<div class="form-cambio-cont">
			<div class="formulario">
				<label for="correo">
					<i class="bx bx-envelope"></i>
					<input type="email" placeholder="Correo electrónico" name="correo" id="correo" required>
				</label>
				<label for="pass">
					<i class="bx bx-lock-alt"></i>
					<input type="password" placeholder="Contraseña nueva" name="pass" id="pass" required>
					<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
				</label>
				<div class="aux">
					<label for="passconf">
						<i class="bx bx-lock-alt"></i>
						<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
						<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
					</label>
				</div>
			</div>
			<p>El correo no es valido</p>
			<input type="submit" value="Guardar cambios">
		</div>
	</form>';

		}elseif(isset($_SESSION["flagdifpass"])) {
			unset($_SESSION["flagdifpass"]);
			$part2 = '
	<form action="../../Controllers/correoPassword.php" method="POST">
		<div class="cambiar-contraseña">
			<h2>¿Olvidaste tu contraseña?</h2>
			<p>¡No te preocupes! Llena el siguiente formulario:</p>	
		</div>
		<div class="form-cambio-cont">
			<div class="formulario">
				<label for="correo">
					<i class="bx bx-envelope"></i>
					<input type="email" placeholder="Correo electrónico" name="correo" id="correo" required>
				</label>
				<label for="pass">
					<i class="bx bx-lock-alt"></i>
					<input type="password" placeholder="Contraseña nueva" name="pass" id="pass" required>
					<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
				</label>
				<div class="aux">
					<label for="passconf">
						<i class="bx bx-lock-alt"></i>
						<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
						<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
					</label>
				</div>
			</div>
			<p>Las contraseñas no coinciden</p>
			<input type="submit" value="Guardar cambios">
		</div>
	</form>';
		}else{
		$part2 = '
	<form action="../../Controllers/correoPassword.php" method="POST">
		<div class="cambiar-contraseña">
			<h2>¿Olvidaste tu contraseña?</h2>
			<p>¡No te preocupes! Llena el siguiente formulario:</p>	
		</div>
		<div class="form-cambio-cont">
			<div class="formulario">
				<label for="correo">
					<i class="bx bx-envelope"></i>
					<input type="email" placeholder="Correo electrónico" name="correo" id="correo" required>
				</label>
				<label for="pass">
					<i class="bx bx-lock-alt"></i>
					<input type="password" placeholder="Contraseña nueva" name="pass" id="pass" required>
					<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
				</label>
				<div class="aux">
					<label for="passconf">
						<i class="bx bx-lock-alt"></i>
						<input type="password" placeholder="Confirmar contraseña" name="passconf" id="passconf" required>
						<img class="icono-ojo" src="../../Images/show-alt-regular-24.png">
					</label>
				</div>
			</div>
			<input type="submit" value="Guardar cambios">
		</div>
	</form>';
		}

		$part3 = '
		<script src="../../Controllers/password.js"></script>
		</body>
		</html>';

		echo $part1;
		include_once("../Plantillas/Navegador.php");
		echo $part2;
		include_once("../Plantillas/Footer.html");
		echo $part3;
	}
?>
