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
	<title>Validar Correo</title>
</head>
<body>
	<form action="../../Controllers/insertarPaciente.php" method="POST">
		<div class="codigo-container">
			<div class="form-inf-childs">
				<p>Se envió un código a su correo electrónico para verificar que es el dueño del mismo, <br>
				por favor copie el código en el siguiente campo:</p>
				<div class="formulario">
					<label for="codigo">
						<input type="text" placeholder="Código" name="codigo" id="codigo" required>
						
					</label>
					<?php 
							session_start();
							if (isset($_SESSION['flag'])) {
								echo '<p>El código no es válido</p>
						<a href="../../Controllers/correo.php">Reenviar codigo</a>';
								unset($_SESSION['flag']);	
							}
					?>
				</div>
				<input type="submit" value="Registrar">
			</div>
		</div>
		
	</form>
</body>
</html>