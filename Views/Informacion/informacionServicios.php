<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/informacionMerak.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title>Merak Servicios</title>
</head>
<body>
	<?php
		session_start();
		include_once("../Plantillas/Navegador.php"); 
	?>
	<main>
		<div class="nosotros-img">
			<img src="../../Images/servicios.png" alt="">
		</div>
		<div class="conocenos">
			<p class="titulo-negro">¡Solicita tu primer visita!</p>
			<div class="descripcion-box">
				<p class="descripcion">En Merak, creemos que tu salud y bienestar merecen la mejor atención posible.
				No esperes más para tomar el control de tu bienestar. Haz tu primera cita con nosotros
				y comienza tu viaje hacia una vida más saludable y feliz.</p>
				<p class="descripcion">
				En Merak, tu bienestar es nuestra prioridad. <br>¡Reserva ahora y descubre la diferencia 
				que puede hacer un equipo comprometido con tu salud!
				</p>
			</div>
			<a href="../Pacientes/programarCita.php"><button>Reserva tu cita ahora</button></a>
		</div>
		<div class="equipo">
			<p class="titulo-negro">¿Qué es la Quiropráctica?</p>
			<div class="descripcion-quiro">
				<div class="quiropractica">
					<p>La quiropráctica es una profesión de salud que se enfoca en el diagnóstico, tratamiento
						y prevención de trastornos del sistema musculoesquelético, especialmente aquellos
						relacionados con la columna vertebral. </p>
						<p> Los quiroprácticos utilizan técnicas manuales, como ajustes y manipulaciones, para
							corregir desalineaciones vertebrales y mejorar la función del sistema nervioso. </p> 
						<p>Este enfoque no invasivo y sin medicamentos ayuda a aliviar
						el dolor, mejorar la movilidad y promover la capacidad del cuerpo para sanarse de manera natural.
						La quiropráctica es conocida por tratar afecciones como dolores de espalda, cuello, dolores
						de cabeza y lesiones relacionadas con el deporte.</p>
				</div>
				<img src="../../Images/quiro.png" alt="">
			</div>
		</div>
		<div >
			<p class="titulo-negro">¿Qué es la Fisioterapia?</p>
			<div class="descripcion-fisio">
				<img src="../../Images/fisio.png" alt="">
				<div class="fisioterapia">
					<p>La fisioterapia es una disciplina de la salud que se centra en la evaluación, diagnóstico, 
						tratamiento y prevención de alteraciones del movimiento y funcionalidad del cuerpo humano. </p>
						<p> Utiliza técnicas terapéuticas basadas en el ejercicio, la manipulación manual, el calor,
							el frío, la electricidad y otros métodos físicos para aliviar el dolor, mejorar la movilidad,
							 y restaurar la función física.</p> 
						<p>La fisioterapia es fundamental en la rehabilitación de lesiones, enfermedades crónicas y
							postoperatorias, ayudando a los pacientes a recuperar su independencia y calidad de vida.</p>
				</div>
			</div>
		</div>
		<div class="equipo">
			<p class="titulo-negro">Nuestros tratamientos</p>
			<p class="tratamientos-frase">¡Encuentra todo lo que necesitas en mano de nuestros profesionales de la salud!</p>
		</div>
		<div class="tratamientos">
			<p class="subtitulo-negro">Especialistas en:</p>
			<div class="tratamientos-cont">
				<div class="tratamientos-contenedor-box">
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Dolor de cuello y espalda</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Ciática</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Dolor en articulaciones: hombros, manos, codos, rodillas</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Desgaste de cartilago</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Pinzamientos nerviosos</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Parálisis facial</p> </div>
				</div>
				<div class="tratamientos-contenedor-box">
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Síndrome de latigazo</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Espolón calcáneo</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Esguinces</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Problemas postulares</p> </div>
					<div class="tratamientos-contenedor"> <i class="far fa-check-circle"></i> <p>Estrés y dolor de cabeza</p> </div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once("../Plantillas/Footer.html"); ?>
	<script src="https://kit.fontawesome.com/5c701f8379.js" crossorigin="anonymous"></script>
</body>
</html>