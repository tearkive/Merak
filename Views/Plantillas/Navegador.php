<?php
	if (isset($_SESSION["tipo"])) {
		if ($_SESSION["tipo"] == 1) {
			echo '<header>
		<div class="info-merak">
			<div class="logo-container">
				<a href="../Informacion/principal.php">
					<img class="logo-principal" src="../../Images/logo_merak_horizontal.png">	
				</a>
			</div>
			<a href="https://api.whatsapp.com/send?phone=524794056723&text=Hola!%20buenas%20tardes" target="_blank">
				<div class="info-item">
					<span class="material-symbols-outlined">call</span>
					<label class="roboto-medium">479 405 6723</label>
				</div>
			</a>
			<a href="https://maps.app.goo.gl/cJsPgYAT7rMyRCBa8" target="_blank">
				<div class="info-item">
					<span class="material-symbols-outlined">location_on</span>
					<label>Av. Oceáno Atlántico #816A. Col. Santa María</label>
				</div>
			</a>
		</div>
		<div class="header-container">
			<div class="menu-container">
				<div class="btn_menu">
					<label for= "btn_menu"><span class="material-symbols-outlined">menu</span></label>
			 	</div>
			</div>
			<div class="nav-container">
				<nav class="navegador">
					<a href="../Informacion/principal.php"><li class="opciones-nav">Inicio</li></a>
					<a href="../Informacion/informacionMerak.php"><li class="opciones-nav">Nosotros</li></a>
					<a href="../Informacion/informacionServicios.php"><li class="opciones-nav">Servicios</li></a>
					<a href="../Informacion/contacto.php"><li class="opciones-nav">Contacto</li></a>
				</nav>
			</div>
			<div class="login-container">
				<div class="perfil">
					<a href="../Informacion/perfilUsuario.php">
						<div class="info-usuario">
							<span class="material-symbols-outlined">account_circle</span>
							<label class="opciones-nav">'.$_SESSION['info'][0]['Nombre'].' '.$_SESSION['info'][0]['Apellidos'].'</label>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>
	<input type="checkbox" id="btn_menu">
		<div class="container-menu">
			<div class="cont-menu">
				<nav>
				<ul><p>Merak<br><br><br></p>

					<li><label class= "list-item"><a href="../Profesionales/programarCita.php">
						<div class="list-element">
							<span class="material-symbols-outlined">calendar_month</span>
							<p>Programar cita</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../Profesionales/editarCitas.php">
						<div class="list-element">
							<span class="material-symbols-outlined">edit</span>
							<p>Editar cita</p>
						</div>	
					</a></label></li>
					<li><label class= "list-item"><a href="../Profesionales/historialCitas.php">
						<div class="list-element">
							<span class="material-symbols-outlined">history</span>
							<p>Historial citas</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../Profesionales/historialSellos.php">
						<div class="list-element">
							<span class="material-symbols-outlined">verified</span>
							<p>Sellos</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../../Controllers/cerrar.php">
						<div class="list-element">
							<span class="material-symbols-outlined">logout</span>
							<p>Cerrar sesion</p>
						</div>
					</a></label></li>
				</ul>
			</nav>
				<label class="cerrar" for= "btn_menu"><span class="material-symbols-outlined">close</span></label>
			</div>
		</div>';
		}elseif($_SESSION['tipo'] == 3){
			echo '<header>
		<div class="info-merak">
			<div class="logo-container">
				<a href="../Informacion/principal.php">
					<img class="logo-principal" src="../../Images/logo_merak_horizontal.png">	
				</a>
			</div>
			<a href="https://api.whatsapp.com/send?phone=524794056723&text=Hola!%20buenas%20tardes" target="_blank">
				<div class="info-item">
					<span class="material-symbols-outlined">call</span>
					<label class="roboto-light">479 405 6723</label>
				</div>
			</a>
			<a href="https://maps.app.goo.gl/cJsPgYAT7rMyRCBa8" target="_blank">
				<div class="info-item">
					<span class="material-symbols-outlined">location_on</span>
					<label class="roboto-light">Av. Oceáno Atlántico #816A. Col. Santa María</label>
				</div>
			</a>
		</div>
		<div class="header-container">
			<div class="menu-container">
				<div class="btn_menu">
					<label for= "btn_menu"><span class="material-symbols-outlined">menu</span></label>
			 	</div>
			</div>
			<div class="nav-container">
				<nav class="navegador">
					<a href="../Informacion/principal.php"><li class="opciones-nav">Inicio</li></a>
					<a href="../Informacion/informacionMerak.php"><li class="opciones-nav">Nosotros</li></a>
					<a href="../Informacion/informacionServicios.php"><li class="opciones-nav">Servicios</li></a>
					<a href="../Informacion/contacto.php"><li class="opciones-nav">Contacto</li></a>
				</nav>
			</div>
			<div class="login-container">
				<div class="perfil">
					<a href="../Informacion/perfilUsuario.php">
						<div class="info-usuario">
							<span class="material-symbols-outlined">account_circle</span>
							<label class="opciones-nav">'.$_SESSION['info'][0]['Nombre'].' '.$_SESSION['info'][0]['Apellidos'].'</label>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>
	<input type="checkbox" id="btn_menu">
		<div class="container-menu">
			<div class="cont-menu">
				<nav>
				<ul><p>Merak<br><br><br></p>
					<li><label class= "list-item"><a href="../Administrador/agregarProfesional.php">
						<div class="list-element">
							<span class="material-symbols-outlined">history</span>
							<p>Dar de alta a un profesional</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../Administrador/eliminarProfesional.php">
						<div class="list-element">
							<span class="material-symbols-outlined">verified</span>
							<p>Dar de baja a un profesional</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../../Controllers/cerrar.php">
						<div class="list-element">
							<span class="material-symbols-outlined">logout</span>
							<p>Cerrar sesion</p>
						</div>
					</a></label></li>
				</ul>
			</nav>
				<label class="cerrar" for= "btn_menu"><span class="material-symbols-outlined">close</span></label>
			</div>
		</div>';
		}else{
			echo '<header>
		<div class="info-merak">
			<div class="logo-container">
				<a href="../Informacion/principal.php">
					<img class="logo-principal" src="../../Images/logo_merak_horizontal.png">	
				</a>
			</div>
			<a href="https://api.whatsapp.com/send?phone=524794056723&text=Hola!%20buenas%20tardes" target="_blank">
				<div class="info-item">
					<span class="material-symbols-outlined">call</span>
					<label class="roboto-light">479 405 6723</label>
				</div>
			</a>
			<a href="https://maps.app.goo.gl/cJsPgYAT7rMyRCBa8" target="_blank">
				<div class="info-item">
					<span class="material-symbols-outlined">location_on</span>
					<label class="roboto-light">Av. Oceáno Atlántico #816A. Col. Santa María</label>
				</div>
			</a>
		</div>
		<div class="header-container">
			<div class="menu-container">
				<div class="btn_menu">
					<label for= "btn_menu"><span class="material-symbols-outlined">menu</span></label>
			 	</div>
			</div>
			<div class="nav-container">
				<nav class="navegador">
					<a href="../Informacion/principal.php"><li class="opciones-nav">Inicio</li></a>
					<a href="../Informacion/informacionMerak.php"><li class="opciones-nav">Nosotros</li></a>
					<a href="../Informacion/informacionServicios.php"><li class="opciones-nav">Servicios</li></a>
					<a href="../Informacion/contacto.php"><li class="opciones-nav">Contacto</li></a>
				</nav>
			</div>
			<div class="login-container">
				<div class="perfil">
					<a href="../Informacion/perfilUsuario.php">
						<div class="info-usuario">
							<span class="material-symbols-outlined">account_circle</span>
							<label class="opciones-nav">'.$_SESSION['info'][0]['Nombre'].' '.$_SESSION['info'][0]['Apellidos'].'</label>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>
	<input type="checkbox" id="btn_menu">
		<div class="container-menu">
			<div class="cont-menu">
				<nav>
				<ul><p>Merak<br><br><br></p>
					<li><label class= "list-item"><a href="../Pacientes/programarCita.php">
						<div class="list-element">
							<span class="material-symbols-outlined">calendar_month</span>
							<p>Programar cita</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../Pacientes/editarCitas.php">
						<div class="list-element">
							<span class="material-symbols-outlined">edit</span>
							<p>Editar cita</p>
						</div>	
					</a></label></li>
					<li><label class= "list-item"><a href="../Pacientes/historialCitas.php">
						<div class="list-element">
							<span class="material-symbols-outlined">history</span>
							<p>Historial citas</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../Pacientes/historialSellos.php">
						<div class="list-element">
							<span class="material-symbols-outlined">verified</span>
							<p>Sellos</p>
						</div>
					</a></label></li>
					<li><label class= "list-item"><a href="../../Controllers/cerrar.php">
						<div class="list-element">
							<span class="material-symbols-outlined">logout</span>
							<p>Cerrar sesion</p>
						</div>
					</a></label></li>
				</ul>
			</nav>
				<label class="cerrar" for= "btn_menu"><span class="material-symbols-outlined">close</span></label>
			</div>
		</div>';
		}
	}else{
		echo '<header>
	<div class="info-merak">
		<div class="logo-container">
			<a href="../Informacion/principal.php">
				<img class="logo-principal" src="../../Images/logo_merak_horizontal.png">	
			</a>
		</div>
		<a href="https://api.whatsapp.com/send?phone=524794056723&text=Hola!%20buenas%20tardes" target="_blank">
			<div class="info-item">
				<span class="material-symbols-outlined">call</span>
				<label class="roboto-light">479 405 6723</label>
			</div>
		</a>
		<a href="https://maps.app.goo.gl/cJsPgYAT7rMyRCBa8" target="_blank">
			<div class="info-item">
				<span class="material-symbols-outlined">location_on</span>
				<label class="roboto-light">Av. Oceáno Atlántico #816A. Santa María del Granjeno</label>
			</div>
		</a>
	</div>
	<div class="header-container">
		<div class="logo-container">
		</div>
		<div class="nav-container">
			<nav class="navegador">
				<a href="../Informacion/principal.php"><li class="opciones-nav">Inicio</li></a>
				<a href="../Informacion/informacionMerak.php"><li class="opciones-nav">Nosotros</li></a>
				<a href="../Informacion/informacionServicios.php"><li class="opciones-nav">Servicios</li></a>
				<a href="../Informacion/contacto.php"><li class="opciones-nav">Contacto</li></a>
			</nav>
		</div>
		<div class="login-container">
			<a href="login.php"><button class="btn-sesion">Iniciar sesión</button></a>
		</div>
	</div>
</header>';
	}
?>
<!---->	
<!---->
