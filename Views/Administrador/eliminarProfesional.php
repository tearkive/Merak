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
		include_once("../../Models/profesionales.php");

		$objProf = new Profesional();
		$profesionales = json_decode($objProf->verProfesionales(),true);
	?>
	<main>
		<form action="../../Controllers/eliminarProfesional.php" method="POST">
			<div class="alta-profesionales">
				<h2>Baja de profesionales de salud</h2>
				<p>Gestiona fácilmente a los profesionales de salud que forman parte de nuestro equipo</p>	
			</div>
			<div class="form-alta-profesionales">
				<?php 
					if (isset($_SESSION['flagepro'])) {
						echo '<p>Profesional eliminado con éxito</p>';
						unset($_SESSION['flagepro']);
					}
				?>
				<select name="profesional" id="profesional" required>
					<option value="0">Seleccione un profesional</option>
					<?php 
						foreach ($profesionales as $value) {
							echo '<option value="'.$value["idUsuario"].'">'.$value["Nombre_Profesional"].'</option>';
						}
					?>
				</select>
				<input type="submit" value="Eliminar">
			</div>
			
		</form>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>