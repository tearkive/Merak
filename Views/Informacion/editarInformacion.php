<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/cambiarPass.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Merak Editar</title>
</head>
<body>
	<?php 
		session_start();
		include_once("../Plantillas/Navegador.php");
		$apellidos = explode(" ",$_SESSION['info'][0]["Apellidos"]);
	?>
	<main>
	<form action="../../Controllers/correoInfo.php" method="POST">
		<div class="cambiar-contraseña">
			<h2>¿Necesitas cambiar tus datos de contacto?</h2>
			<p>Para nosotros es importante estar en contacto contigo.</p>
			<p>Llena el siguiente formulario:</p>	
		</div>
		<div class="form-cambio-cont">
			<div class="formulario">
				<label for="tel">
					<i class="bx bx-phone"></i>
					<input type="tel" placeholder="Teléfono" name="tel" id="tel" required value="<?php echo $_SESSION['info'][0]["Tel"]; ?>">
				</label>
				<label for="correo">
					<i class="bx bx-envelope"></i>
					<input type="email" name="correo" id="correo" required value="<?php echo $_SESSION['info'][0]["Correo"]; ?>">
				</label>
			</div>
			<input type="submit" value="Guardar cambios">
		</div>
	</form>
	</main>	

	
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>