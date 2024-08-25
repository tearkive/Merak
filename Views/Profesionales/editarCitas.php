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
        }
        include_once("../Plantillas/Navegador.php");
        include_once("../../Models/pacientes.php");
		$objPac = new Paciente();

		$pacientes = json_decode($objPac->obtenerPacientes(),true);
    ?>
    <main>
        <div class="programa-cita-header">
            <h2>Citas programadas</h2>
            <p>En Merak, entendemos que los planes de tus pacientes pueden cambiar. </p>
            <p>Por eso, te ofrecemos la flexibilidad de editar sus citas de manera fácil y rápida.</p>
        </div>
        <div class="cita">
            <?php 
                if(isset($_SESSION["flagcc"])){
                    echo '<p>¡Cita actualizada con éxito!</p>';
                    unset($_SESSION["flagcc"]);
                }
            ?>
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
            
            <div class="no-register" id="no-register">
                <p>No hay información para mostrar</p>
            </div>
            <div class="container-citas" id="container-citas">
                
            </div>
        </div>
    </main>
    <?php include_once("../Plantillas/Footer.html"); ?>
    <script src="../../Controllers/editCitasProf.js"></script>
</body>
</html>