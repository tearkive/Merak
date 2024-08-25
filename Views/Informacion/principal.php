<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/principal.css">
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
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
		<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="../../Images/uno.png" class="d-block w-100" alt="imagen">
			</div>
			<div class="carousel-item">
				<img src="../../Images/dos.png" class="d-block w-100" alt="imgen">
			</div>
			<div class="carousel-item">
				<img src="../../Images/tres.png" class="d-block w-100" alt="imagen">
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
		<div class="barra-color-primer"></div>
		<div class="reserva-cita">
			<p class="titulo-empresa-negro">Merak: Quiroprática y Fisoterapia</p>
			<p class="descripcion">
				El tiempo no cura lesiones, la quiropráctica y la fisioterapia SÍ.<br>
				Ofrecemos rehabilitación en lesiones traumáticas, nerviosas, degenerativas y deportivas.
			</p>
			<a href="../Pacientes/programarCita.php"><button>Reserva tu cita ahora</button></a>
		</div>
		<div class="barra-color-bottom"></div>
		<div class="nuestros-tratamientos">
			<p class="titulo-fondo-azul">Nuestros servicios</p>
			<p class="descripcion-fondo-azul">
		    En Merak, nos dedicamos a ofrecer servicios de salud de alta calidad para ayudarte a mejorar
			tu bienestar físico y aliviar el dolor. <br> Nuestro equipo de profesionales está altamente capacitado
			para proporcionarte una atención personalizada y efectiva.</p>
			<div class="servicios-box">
				<div class="servicios">
					<h3>Quiropráctica</h3>
					<div class="img-desc-servicio">
						<img  src="../../Images/quiropractica.png" alt="" />
						<p>
						Nuestros quiroprácticos se especializan en el diagnóstico y tratamiento de trastornos del sistema nervioso,
						especialmente de la columna vertebral.</p>
					</div>
				</div>
				<div class="servicios">
					<h3>Fisioterapia</h3>
					<div class="img-desc-servicio">
						<img src="../../Images/fisioterapia.png" alt="" />
						<p>
						Nuestros fisioterapeutas utilizan técnicas avanzadas para tratar una amplia variedad de afecciones
						musculoesqueléticas con el fin de ayudarte a recuperar tu movilidad y funcionalidad.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="barra-color"></div>
		<div class="conocenos">
			<p class="subtitulo-negro">La tranquilidad de ser atendido por profesionales de la salud</p>
			<p class="descripcion">¡En Merak estamos altamente capacitados y certificados! <br>
			Con títulos universitarios, cédulas profesionales y certificaciones adicionales,
				garantizamos atención de primera calidad.</p>
			<div class="imagenes-cert">
				<img src="../../Images/uniteclogo.png" alt="">
				<img src="../../Images/unevtlogo.png" alt="">
			</div>
			<p class="descripcion">Confía en nosotros para tu bienestar, sabiendo que estás en manos expertas.</p>
			
		</div>
		<div class="barra-color-bottom"></div>
		<div class="testimonios">
			<p class="titulo-fondo-azul">¿Qué opinan nuestros pacientes?</p>
		</div>
		<div class="testimonios-contenedor-box">
			<div class="testimonios-contenedor">
				<div class="testimonios-header">
					<p>Maria Alamilla</p>
					<div class="estrellas">
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
					</div>
				</div>
				<div class="testimonios-descripcion">
					<p>Atención súper especializada. <br> Desde la primer sesión comencé a ver y a
					sentir cambios. <br> Sin duda alguna los recomiendo.</p>
				</div>
			</div>
			<div class="testimonios-contenedor">
				<div class="testimonios-header">
					<p>Montserrat Loreto</p>
					<div class="estrellas">
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
					</div>
				</div>
				<div class="testimonios-descripcion">
					<p>Tienen un excelente servicio, son super amables y atienden muy bien a sus pacientes. <br> 10/10</p>
				</div>
			</div>
		</div>
		<div class="testimonios-contenedor-box">
			<div class="testimonios-contenedor">
				<div class="testimonios-header">
					<p>Ana García</p>
					<div class="estrellas">
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
					</div>
				</div>
				<div class="testimonios-descripcion">
					<p>Excelente clínica, todo el personal muy amable, cuentan con el material apto para las consultas.</p>
				</div>
			</div>
			<div class="testimonios-contenedor">
				<div class="testimonios-header">
					<p>Maricela Ramírez</p>
					<div class="estrellas">
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
						<i class="fas fa-star" aria-hidden="true"></i>
					</div>
				</div>
				<div class="testimonios-descripcion">
					<p>Les recomiendo mucho el lugar, van a sentir un gran alivio cuando salgan.</p>
				</div>
			</div>
		</div>
		<div class="barra-color"></div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/5c701f8379.js" crossorigin="anonymous"></script>
</body>
</html>