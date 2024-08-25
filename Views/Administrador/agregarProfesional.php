<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/administrador.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Principal</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?> 
	<main>
		<form action="../../Controllers/agregarProfesional.php" method="POST" enctype="multipart/form-data">
			<div class="alta-profesionales">
				<h2>Alta de profesionales de salud</h2>
				<p>Agrega y gestiona fácilmente a los profesionales de salud que forman parte de nuestro equipo</p>	
			</div>
			<div class="form-alta-profesionales">
				<?php 
					if(isset($_SESSION["flagrep"])){
						echo "<p>¡Profesional dado de alta con éxito!</p>";
						unset($_SESSION["flagrep"]);
					}
				?>
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
						<input type="date" name="fechan" id="fechan" required value="1990-01-01">
					</label>
					<label for="tel">
						<i class="bx bx-phone"></i>
						<input type="tel" placeholder="Teléfono" name="tel" id="tel" required>
					</label>
					<label for="correo">
						<i class="bx bx-envelope"></i>
						<input type="email" placeholder="Correo electrónico" name="correo" id="correo" required>
					</label>
				</div>
				<div class="cedula">
					<label for="cedula">Cédula:</label>
					<input type="file" name="cedula" id="cedula" required>
				</div>
				<input type="submit" value="Siguiente">
			</div>
			
		</form>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>