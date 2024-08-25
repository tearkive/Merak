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
	<title>Validar Correo</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
		<form action="../../Controllers/actualizarContra.php" method="POST">
			<div class="cambiar-contraseña">
				<h2>Cambio de contraseña</h2>
				<p>Se envió un código a su correo, por favor copie el código a continuación:</p>	
			</div>
			<div class="form-cambio-cont">
				<div class="formulario">
					<label for="codigo">
						<input type="text" placeholder="Código" name="codigo" id="codigo" required>
					</label>
					<?php
						if (isset($_SESSION['flag'])) {
							echo '<p>El código no es valido.</p>
					<a href="../../Controllers/correoPass.php">Reenviar código</a>';
							unset($_SESSION['flag']);	
						}
					?>
					</div>
				<input type="submit" value="Confirmar">
			</div>
		</form>
	
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>