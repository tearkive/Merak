<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/informacionMerak.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<script src="../../JavaScript/scriptInfMerak.js" defer></script>
	<title>Merak Info</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
		<div class="nosotros-img">
			<img src="../../Images/nosotros.png" alt="">
		</div>
		<div class="barra-color"></div>
		<div class="conocenos">
			<p class="titulo-negro">¡Conoce a nuestro equipo!</p>
			<div class="descripcion-box">
				<p class="descripcion">En Merak entendemos la importancia de estar en manos calificadas.
					Todos nuestros profesionales de salud cuentan con una sólida formación académica y una vasta
					experiencia en sus respectivas áreas. </p>
				<p class="descripcion">Al elegir nuestra clínica, puedes estar seguro de que serás atendido por profesionales
					que dedican su vida a mejorar la salud y el bienestar de sus pacientes. Nos enorgullece ofrecer
					un entorno seguro y profesional donde tu salud es nuestra máxima prioridad.</p>
			</div>
			<a href="https://api.whatsapp.com/send?phone=524794056723&text=Hola!%20buenas%20tardes" target="_blank"><button>Contactarse</button></a>
		</div>
		<div class="equipo">
			<div class="profesional">
				<img src="../../Images/dianaC.jpg" alt="">
				<h2 class="subtitulo-fondo-azul">Diana Corralejo</h2>
				<h3 class="profesion">Fisioterapeuta</h3>
				<p class="descripcion-profesional">
				Licenciada en fisioterapia de la Universidad Tecnología de México en el año 2019. <br> <br>
				Maestría en psicología de la Universidad Tecnología de México en el año 2021. <br> <br>
				Cuento con cuatro años de experiencia en el ámbito laboral con formación en aparatología, técnicas manuales,
				ejercicio terapéutico y otras herramientas para brindar un tratamiento óptimo. Dentro de mi formación se
				incluyen certificaciones de dosimetría de agentes físicos y vendaje neuromuscular nivel básico y medio,
				así como talleres de "Intelligence Suspension Training" y aplicación biológica.</p>
			</div>
			<div class="profesional">
				<img src="../../Images/paulina.jpg" alt="">
				<h2 class="subtitulo-fondo-azul">Paulina Loreto</h2>
				<h3 class="profesion">Quiropráctica</h3>
				<p class="descripcion-profesional">
				Licenciada en Quiropráctica. Egresada de Universidad Estatal del Valle de Toluca Plantel Amanalco.
				Generación 2016-2021 <br><br>
				Cédula Profesional: 13097472. <br><br>
				Acreditada en Técnica Activador Avanzado.<br> 
				Cursos: Cuidado de la espalda. Salud Digital. Liderazgo. Identificación de Burnout.
				</p>
			</div>
			<div class="profesional">
				<img src="../../Images/norberto.jpg" alt="">
				<h2 class="subtitulo-fondo-azul">Norberto García</h2>
				<h3 class="profesion">Quiropráctico</h3>
				<p class="descripcion-profesional">
				Licenciado en Quiropráctica. Egresado de la Universidad Estatal del Valle de Toluca Plantel Amanalco.
				Generación 2017-2022 <br><br>
				Ejerciendo el servicio social en la Clínica Integral Universitaria, acudiendo a cursos internos en
				activador neurólogico avanzado, técnica de aplicación de ventosas en barrido, fijas y sangrado y aplicación de moxa. <br><br>
				Nivel medio en la aplicación de cinta quinesiologica o tape.</p>
			</div>
		</div>
		<div class="instalaciones">
			<p class="titulo-negro">Nuestras instalaciones</p>
			<div class="slider-instalaciones">
				<div class="lista-instalaciones">
					<img src="../../Images/instalaciones.png" alt="">
					<img src="../../Images/instalacionesuno.png" alt="">
					<img src="../../Images/instalacionesdos.png" alt="">
					<img src="../../Images/instalacionestres.png" alt="">
				</div>
			</div>
			<div class="slider-scrollbar">
				<div class="scrollbar-track">
					<div class="scrollbar-thumb">

					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
</body>
</html>