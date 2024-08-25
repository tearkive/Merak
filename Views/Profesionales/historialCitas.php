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
    <title>Merak Citas</title>
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
        include_once("../../Models/citas.php");
        include_once("../Plantillas/Navegador.php");
        include_once("../../Models/pacientes.php");
		$objPac = new Paciente();
        $objCita = new Cita();

        $pacientes = json_decode($objPac->obtenerPacientes(),true);
    ?>
    <main>
		<div class="programa-cita-header">
            <h2>Historial de citas</h2>
            <p>Mantén un seguimiento claro y organizado de las citas de tus pacientes.</p>
        </div>
        <div class="cita">
        	<?php 
                if(isset($_SESSION["flagcc"])){
                    echo '<p>Cita eliminada con éxito.</p>';
                    unset($_SESSION["flagcc"]);
                }
            ?>
			<div class="programar-cita">
				<div class="programa-cita-dos">
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
						<label for="fecha">Fecha: </label>
						<input type="date" name="fecha" id="fecha" value="">
					</div>
					<div class="programa-cita-elem">
						<label for="estado">Estado: </label>
						<select name="estado" id="estado">
							<option value="0">Seleccione un estado</option>
							<option value="Pendiente">Pendiente</option>
							<option value="Atendida">Atendida</option>
							<option value="Cancelada">Cancelada</option>
						</select>
					</div>
					<button id="filtrar">Filtrar</button>
					<button id="qfiltro">Quitar filtro</button>
				</div>
			</div>
            
            <div class="content-citas" id="container-citas">
                    <table>
                        <thead>
                            <tr>       
								<th>ID</th>     
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Estado</th>
                                <th>Aprobar</th>
                                <th>Cancelar</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    $citas = json_decode($objCita->obtenerTodasCitas($_SESSION['info'][0]["idUsuario"]),true);
                    foreach ($citas as $value) {
                    	if($value["Editable"] == 1){
                    		if($value["Estado"] == "Pendiente"){
                    			echo '
								<tr>
		                       		<td>'.$value["idCita"].'</td>
									<td>'.$value["Nombre_Paciente"].'</td>
		                        	<td>'.$value["Fecha"].'</td>
		                        	<td>'.$value["Hora"].'</td>
		                        	<td>'.$value["Estado"].'</td>
									<td><a href="../../Controllers/aprobarCita.php?idCita='.$value["idCita"].'"><button>Aprobar</button></a></td>
		                            <td><a href="../../Controllers/borrarCita.php?idCita='.$value["idCita"].'"><button>Cancelar</button></a></td>
								</tr>
		                        ';
                    		}else{
                    			echo '
								<tr>
		                        	<td>'.$value["idCita"].'</td>
									<td>'.$value["Nombre_Paciente"].'</td>
		                        	<td>'.$value["Fecha"].'</td>
		                        	<td>'.$value["Hora"].'</td>
		                        	<td>'.$value["Estado"].'</td>
		  							<td><button disabled>Aprobar</button></td>
		                            <td><a href="../../Controllers/borrarCita.php?idCita='.$value["idCita"].'"><button>Cancelar</button></a></td>
		                        </tr>';
                    		}
                    	}else{
                    		if($value["Estado"] == "Pendiente"){
                    			echo '
								<tr>
									<td>'.$value["idCita"].'</td>
									<td>'.$value["Nombre_Paciente"].'</td>
									<td>'.$value["Fecha"].'</td>
									<td>'.$value["Hora"].'</td>
									<td>'.$value["Estado"].'</td>
		  							<td><a href="../../Controllers/aprobarCita.php?idCita='.$value["idCita"].'"><button>Aprobar</button></a></td>
		                            <td><a href="../../Controllers/borrarCita.php?idCita='.$value["idCita"].'"><button>Cancelar</button></a></td>
		                        </tr>';
                    		}else{
                    			echo '
								<tr>
									<td>'.$value["idCita"].'</td>
									<td>'.$value["Nombre_Paciente"].'</td>
									<td>'.$value["Fecha"].'</td>
									<td>'.$value["Hora"].'</td>
									<td>'.$value["Estado"].'</td>
		  							<td><button disabled>Aprobar</button></td>
		                            <td><button disabled>Cancelar</button></td>
		                        </tr>
									';
                    		}
                    	}
                        
                    }
                ?>
				</tbody>
            </table>
        </div>
    </div>
    </main>
    <?php include_once("../Plantillas/Footer.html"); ?>
    <script src="../../Controllers/historialCitas.js"></script>
</body>
</html>