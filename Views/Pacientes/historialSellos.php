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
			if($_SESSION["tipo"] != 2){
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

		$objSello = new Sello();
		$objRecomp = new Recompensa(); 

		$sellos = json_decode($objSello->obtenerSellosU($_SESSION['info'][0]["idUsuario"]),true);
		$cantSe = sizeof($sellos);
		$recompensas = json_decode($objRecomp->verRecompensasPUsu($_SESSION['info'][0]["idUsuario"]), true);
		$cantRe = sizeof($recompensas); 
	?>
	<main>
		<div class="programa-cita-header">
            <h2>Historial de sellos y recompensas</h2>
            <p>En Merak, no solo valoramos tu salud y bienestar, sino que también queremos recompensar tu fidelidad.</p>
            <p>¡Acumula sellos con cada visita y canjéalos por recompensas exclusivas, descuentos en tratamientos y otros beneficios!</p>
        </div>
		<div class="contenedor-sellos">
			<?php
				foreach ($sellos as $value) {
					echo '
						<div class="contenido-sellos">
							<img src="../../Images/sello-aprov.webp">
							<label>'.$value["Fecha"].'</label>
						</div>
					 ';
				}
				for ($i=0; $i < (10-$cantSe) ; $i++) { 
					echo '
						<div class="contenido-sellos">
							<img src="../../Images/sello-desaprov.png">
							<label>Sin obtener</label>
						</div>
					 ';
				}
			 ?>
			
		</div>
		<div class="programa-cita-header">
            <h3>Recompensas</h3>
        </div>
		<div class="recompensas">
			<?php 
				if($cantRe == 0){
					echo '<p>En este momento no cuenta con recompensas.</p>';
				}else{
					foreach($recompensas as $rec){
						echo '
						<div class="info-recompensa">
							<p>Beneficio</p>
							<p>Estado</p>
						</div>
						<div class="recompensas-det">
							<input value="'.$rec["Descripcion"].'" disabled>
							<input value="'.$rec["Estado"].'" disabled>
						</div>';
					}
				} 
			?>
		</div>
		<div class="recompensa-nota">
			<p>NOTA: Cada vez que asistes a una cita obtienes un sello, cuando juntas cierta cantidad de sellos obtienes fabulosas recompensas. <br>
			3 Sellos = 10% de descuento en la proxima cita. <br>
			6 Sellos = 50% de descuento en cremas. <br>
			9 Sellos = 40% de descuento en la proxima cita. </p>
		</div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>