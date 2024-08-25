<?php   
    session_start();
    if (!isset($_SESSION['token'])) {
        if (!isset($_SESSION['arrgloinfo'])) {
            $arreglo["nombre"] = $_POST['nombre'];
            $arreglo["apellidop"] = $_POST["apellidop"];
            $arreglo["apellidom"] = $_POST['apellidom'];
            $arreglo["fechan"] = $_POST["fechan"];
            $arreglo["telefono"] = $_POST["tel"];
            $arreglo["correo"] = $_POST["correo"];
            $_SESSION["correo"] = $_POST["correo"];
            $arreglo["pass"] = md5($_POST["pass"]);
            $arreglo["passconf"] = md5($_POST["passconf"]);
            $_SESSION['arrgloinfo'] = $arreglo;
        }else{
            $arreglo = $_SESSION['arrgloinfo'];
        }
        if ($arreglo["pass"] != $arreglo["passconf"]) {
            header("Location: ../Views/Informacion/registro.php");
            die();
        }
    }
        $correo = $_SESSION["correo"];
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
            return $random_string;
        }
        $cod = generate_string($permitted_chars,6);
        $cod  = wordwrap($cod,70,"\r\n");
        $_SESSION['token'] = $cod;
        $mensaje ='
        <!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Correo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html {
            font-size: 62.5%;
        }
        body {
            font-size: 16px;
            word-spacing: normal;
            background-color: #939297;
        }

        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }

        .contenedor {
            text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            background-color: #939297;
        }

        .contenedor-interno {
            align-items: center;
        }

        .tabla-externa {
            width: 100%;
            border: none;
            border-spacing: 0;
        }

        .tabla-interna {
            width: 94%;
            max-width: 60rem;
            border: none;
            border-spacing: 0;
            text-align: left;
            font-family: Arial, sans-serif;
            font-size: 1.6rem;
            line-height: 2.2rem;
            color: #363636;
        }

        .parte-uno {
            text-align: center;
            padding: 3rem;
            font-size: 2.4rem;
            font-weight: bold;
            background-color: #02B5DD;
        }

        .parte-uno img {
            width: 15rem;
            height: 15rem;
        }

        .parte-dos {
            padding: 3rem;
            background-color: #FFFFFF;
        }

        .parte-dos h1 {
            text-align: center;
            margin-bottom: 1.6rem;
            text-transform: uppercase;
            font-size: 2.6rem;
            line-height: 3.2rem;
            font-weight: bold;
            letter-spacing: -0.02em;
        }

        .parte-dos p {
            text-align: justify;
        }

        .parte-tres {
            display: flex;
            text-align: center;
            justify-content: center;
            padding: 3rem;
            background-color: #FFFFFF;
        }

        .parte-tres label {
            width: 100%;
            padding: 1rem 2rem;
            border: none;
            text-align: center;
            font-size: 3rem;
            letter-spacing: .5rem;
        }

        .parte-cuatro {
            padding: 3rem;
            background-color: #FFFFFF;
        }

        .parte-cuatro p {
            text-align: justify;
        }

        .parte-cuatro p span {
            font-weight: bold;
        }

        .parte-cinco {
            padding: 3rem;
            text-align: center;
            font-size: 1.2rem;
            background-color: #26727F;
            color: #cccccc;
        }

        .enlaces {
            margin: 0 0 0.8rem 0;
        }

        .enlaces a {
            text-decoration: none;
        }

        .enlaces img {
            display: inline-block;
            color: #cccccc;
        }

        .copyright {
            font-size: 1.4rem;
            line-height: 2rem;
        }
    </style>
</head>

<body>
    <div role="article" aria-roledescription="email" lang="en" class="contenedor">
        <table role="presentation" class="tabla-externa">
            <tr>
                <td align="center" class="contnedor-interno">
                    <table role="presentation" class="tabla-interna">
                        <tr>
                            <td class="parte-uno">
                                <img src="https://scontent.fgdl1-4.fna.fbcdn.net/v/t39.30808-6/435172933_7314996588588311_1608925000551897513_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ub3kMU-vxCAQ7kNvgEQZN58&_nc_ht=scontent.fgdl1-4.fna&oh=00_AfBlLoThCnfF4lnMCp1-JPMyPD0QLV72fETL_KraEg1rqw&oe=663EBB56"
                                    alt="Logo">
                            </td>
                        </tr>
                        <tr>
                            <td class="parte-dos">
                                <h1>Código de verificación</h1>
                                <p>Se solicitó un código de verificación para verificar que usted sea el propietario del
                                    correo electrónico. Copie su código:</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="parte-tres">
                                <label  class="codigo" name="codigo" id="target1">'.$cod.'</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="parte-cuatro">
                                <p>Agradecemos su preferencia, esperamos que encuentre lo que está buscando. El
                                    equipo de <span>Merak</span> le desea un excelente día.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="parte-cinco">
                                <p class="enlaces">
                                    <a href="https://www.facebook.com/profile.php?id=61558043526517">
                                        <img src="https://assets.codepen.io/210284/facebook_1.png" width="40"
                                            height="40" alt="f"></a>
                                </p>
                                <p class="copyright">&reg; Copyright 2021 Merak - Todos los Derechos Reservados<br></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html> 
        ';
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        if(mail($correo, 'Codigo verificación Merak', $mensaje,$cabeceras)){
            header("Location: ../Views/Informacion/validarCorreo.php");
            die();
        }else{
            echo "error";
        }
     ?>