<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/perfilUsuario.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Perfil</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
		<div class="info-mod-usuario">
			<div class="datos">
				<h2>Datos de usuario</h2>
			<?php 
				if(isset($_SESSION["flagupdate"])){
					echo '<p>¡Actualización de datos exitosa!</p>';
				}
				unset($_SESSION["flagupdate"]);
			?>
			</div>
			<div class="datos-noeditables-cont">
				<div class="datos-noeditables">
					<label for="nombre">Nombre</label>
					<p id="nombre"><?php echo $_SESSION['info'][0]["Nombre"]; ?></p>
				</div>
				<div class="datos-noeditables">
					<label for="apellidos">Apellidos</label>
					<p id="apellidos"><?php echo $_SESSION['info'][0]["Apellidos"]; ?></p>
				</div>
				<div class="datos-noeditables">
					<label for="fechan">Fecha de nacimiento</label>
					<p id="fechan"><?php echo $_SESSION['info'][0]["Fecha_Nacimiento"]; ?></p>
				</div>
			</div>
			<div class="datos-sub">
				<h2>Datos de contacto <a href="editarInformacion.php"><span class="material-symbols-outlined">edit</span></a></h2>
			</div>
			<div class="datos-editables-cont">
				<div class="datos-editables">	
					<label for="tel">Telefono</label>
					<p id="tel"><?php echo $_SESSION['info'][0]["Tel"]; ?></p>
				</div>
				<div class="datos-editables">
					<label for="correo">Correo</label>
					<p id="correo"><?php echo $_SESSION['info'][0]["Correo"]; ?></p>
				</div>
			</div>
			<div class="cambiar-cont">
				<a href="cambiarPass.php"><button>Cambiar contraseña</button></a>
			</div>
		</div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>