<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/historialSellos.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/citas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Principal</title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION["tipo"])){
			if($_SESSION["tipo"] != 1){
	            header("Location: ../Informacion/principal.php");
	            die();
	        }
		}else{
			header("Location: ../Informacion/login.php");
	        die();
		}

		include_once("../Plantillas/Navegador.php");
		include_once("../../Models/sellos.php");
		include_once("../../Models/recompensas.php");
		include_once("../../Models/pacientes.php");

		$objSello = new Sello();
		$objRecomp = new Recompensa();
		$objPac = new Paciente();

		$pacientes = json_decode($objPac->obtenerPacientes(),true);
	?>
	<main>
		<div class="programa-cita-header">
            <h2>Historial de sellos y recompensas</h2>
            <p>En Merak, no solo valoramos tu salud y bienestar, sino que también queremos recompensar tu fidelidad.</p>
            <p>¡Acumula sellos con cada visita y canjéalos por recompensas exclusivas, descuentos en tratamientos y otros beneficios!</p>
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
			</div>
		</div>
			
		<div class="programa-cita-header">
            <h3>Sellos</h3>
        </div>
		<div class="contenedor-sellos" id="contenedor-sellos">
			<p>No hay sellos por mostrar</p>
		</div>
		<div class="programa-cita-header">
            <h3>Recompensas</h3>
        </div>
		<div class="recompensas" id="recompensas">
			<p>No hay recompensas por mostrar</p>
		</div>
		<div class="recompensa-nota">
			<p>NOTA: Cada vez que asistes a una cita obtienes un sello, cuando juntas cierta cantidad de sellos obtienes fabulosas recompensas. <br>
			3 Sellos = 10% de descuento en la proxima cita. <br>
			6 Sellos = 50% de descuento en cremas. <br>
			9 Sellos = 40% de descuento en la proxima cita. </p>
		</div>
		
	</main>
	<script type="text/javascript" src="../../Controllers/historialSellos.js"></script>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>