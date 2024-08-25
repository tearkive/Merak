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
    ?>
    <main>
        <div class="programa-cita-header">
            <h2>Historial de citas</h2>
            <p>Mantén un seguimiento claro y organizado de tus citas.</p>
            <p>Te recordamos que tienes hasta 24 horas previas a tu cita para cancelarla.</p>
        </div>
        <div class="cita">
            <div class="container-citas">
                <?php 
                    if(isset($_SESSION["flagcc"])){
                        echo '<p>cita eliminada con exito</p>';
                        unset($_SESSION["flagcc"]);
                    }
                ?>
                <div class="content-citas">
                    <table class="cancel-table">
                        <thead>
                            <tr>            
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Estado</th>
                                <th>Cancelar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $citas = json_decode($objCita->obtenerCitasPUsu($_SESSION['info'][0]["idUsuario"]),true);
                                foreach ($citas as $value) {
                                    if($value["Editable"] == 1){
                                        echo '
                                    <tr>
                                        <td>'.$value["Nombre_Paciente"].'</td>
                                        <td>'.$value["Fecha"].'</td>
                                        <td>'.$value["Hora"].'</td>
                                        <td>'.$value["Estado"].'</td>
                                        <td><a href="../../Controllers/borrarCita.php?idCita='.$value["idCita"].'"><button>Cancelar</button></a></td>
                                    </tr>
                                    ';
                                    }else{
                                        echo '
                                    <tr>
                                        <td>'.$value["Nombre_Paciente"].'</td>
                                        <td>'.$value["Fecha"].'</td>
                                        <td>'.$value["Hora"].'</td>
                                        <td>'.$value["Estado"].'</td>
                                        <td><label>No es posible <br> cancelar la cita</label></td>
                                    </tr>
                                    ';
                                    }
                                    
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("../Plantillas/Footer.html"); ?>
    <script src="../../Controllers/citasEditables.js"></script>
</body>
</html>