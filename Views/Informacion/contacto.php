<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/principal.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Contacto</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
	<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="../../Images/contactodos.png" class="d-block w-100" alt="imagen">
			</div>
			<div class="carousel-item">
				<img src="../../Images/contactouno.png" class="d-block w-100" alt="imgen">
			</div>
			<div class="carousel-item">
				<img src="../../Images/contactotres.png" class="d-block w-100" alt="imagen">
			</div>
			<div class="carousel-item">
				<img src="../../Images/contactocuatro.png" class="d-block w-100" alt="imagen">
			</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="barra-color"></div>
		<div class="reserva-cita">
			<p class="subtitulo-negro">¡Agenda tu primer cita!</p>
			<p class="descripcion">Nos encantaría ayudarte. Háblanos sobre tus preocupaciones o programa tu primera
				cita para brindarte una evaluación personalizada.</p>
			<a href="https://api.whatsapp.com/send?phone=524794056723&text=Hola!%20buenas%20tardes" target="_blank"><button>Agendar cita</button></a>
		</div>
		<div class="barra-color-bottom"></div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>