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
    <title>Merak Editar</title>
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

        include_once("../../Models/citas.php");
        include_once("../Plantillas/Navegador.php");
        $objCita = new Cita();
        $infoCita = json_decode($objCita->obtenerCitabyId($_GET['idPed']),true);

        $fechaMin = date("Y-m-d");
        $fechaMax = date("Y-m-d",strtotime($fechaMin."+ 30 days")); 
        $horarios = ["10:00:00","10:40:00","11:20:00","12:00:00","12:40:00","01:20:00","04:00:00","04:40:00","05:20:00","06:00:00"]; 

        $fechas = json_decode($objCita->obtenerCitaPF($infoCita[0]["Fecha"]));
        foreach ($fechas as $value) {
            $horarios = array_filter($horarios, function($pos, $h) use ($value, $infoCita) {
                if($pos != $infoCita[0]["Hora"]) {
                    return $pos != $value->Hora;
                }else{
                    return $pos;
                }
            },ARRAY_FILTER_USE_BOTH);
        }

    ?>
    <main>
        <div class="cita">
            <form action="../../Controllers/actualizarCitaP.php" method="POST">
                <div class="programa-cita-header">
					<h2>Reprogramación de citas</h2>
                    <p>En Merak, estamos comprometidos con tu bienestar y queremos que tu experiencia
                        sea lo más flexible y cómoda posible.</p>
					<p>Elige el nuevo horario que más te convenga. </p>
				</div>
                <div class="programar-cita">
                    <?php 
                        if(isset($_SESSION["flagcita"])){
                            echo '<p>Por favor, ingresa un horario.</p>';
                            unset($_SESSION["flagcita"]);
                        }
                    ?>
                    <div class="programa-cita">
						<div class="programa-cita-elem">
                            <input type="text" name="idCita" hidden value="<?php echo $_GET['idPed']; ?>">
                            <label for="fecha">Día: </label>
                            <input type="date" name="fecha" id="fecha" min="<?php echo $fechaMin;  ?>" max="<?php echo $fechaMax; ?>" required value = "<?php echo $infoCita[0]["Fecha"]?>">
                        </div>
                        <div class="programa-cita-elem">
                            <label for="hora">Hora: </label>
                            <select name="hora" id="hora" required>
                                <option value="0">Seleccione un horario</option>
                                <?php
                                    foreach ($horarios as  $value) {
                                        if($value == $infoCita[0]["Hora"]){
                                            echo '<option value="'.$value.'" selected>'.$value.'</option>';
                                        }else{
                                            echo '<option value="'.$value.'">'.$value.'</option>';
                                        }
                                    } 
                                ?>
                            </select>
                        </div>
                    </div>
                    <?php 
                        if(isset($_SESSION["flagcc"])){
                            echo '<p>¡Cita reprogramada con éxito!</p>';
                            unset($_SESSION["flagcc"]);
                        }
                    ?>
                    <input type="submit" value="Reprogramar">
                </div>
            </form>
        </div>
    </main>
    <?php include_once("../Plantillas/Footer.html"); ?>
    <script src="../../Controllers/citas.js"></script>
</body>
</html>