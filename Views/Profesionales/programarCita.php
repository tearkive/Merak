<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/citas.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Programar</title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION["tipo"])){
			if($_SESSION["tipo"] != 1){
	            header("Location: ../Informacion/principal.php");
	            die();
	        }
		}
		include_once("../Plantillas/Navegador.php");
		include_once("../../Models/pacientes.php");
		$objPac = new Paciente();

		$fechaMin = date("Y-m-d");
		$fechaMax = date("Y-m-d",strtotime($fechaMin."+ 30 days")); 

		$pacientes = json_decode($objPac->obtenerPacientes(),true);
	?>
	<main>
		<div class="cita">
			<form action="../../Controllers/insertarCitaP.php" method="POST">
				<div class="programa-cita-header">
					<h2>Programación de citas</h2>
					<p>Selecciona la fecha y hora que mejor se adapten a las necesidades de tus pacientes,
						garantizando que reciban la atención adecuada en el momento oportuno.</p>
				</div>
				<div class="programar-cita">
					<div class="programa-cita">
						<div class="programa-cita-elem">
							<label for="paciente">Paciente: </label>
							<select name="paciente" id="paciente">
								<option value="0">Seleccione un paciente</option>
								<?php 
									foreach ($pacientes as $value) {
										echo '<option value="'.$value["idUsuario"].'">'.$value["Nombre_Paciente"].'</option>';
									}
								?>
							</select>
						</div>
						<div class="programa-cita-elem">
							<label for="fecha">Dia: </label>
							<input type="date" name="fecha" id="fecha" min="<?php echo $fechaMin;  ?>" max="<?php echo $fechaMax; ?>" required>
						</div>
						<div class="programa-cita-elem">
							<label for="hora">Hora: </label>
							<select name="hora" id="hora" required>
								<option value="0">Seleccione un horario</option>
							</select>
							
						</div>
					</div>
					<?php 
						if(isset($_SESSION["flagcita"])){
							echo '<p>Por favor, ingrese un horario</p>';
							unset($_SESSION["flagcita"]);
						}
					?>
					<?php 
						if(isset($_SESSION["flagcc"])){
							echo '<p>¡Cita programada con éxito!</p>';
							unset($_SESSION["flagcc"]);
						}
					?>
					<input type="submit" value="Programar">
				</div>
			</form>
		</div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
	<script src="../../Controllers/citas.js"></script>
</body>
</html>