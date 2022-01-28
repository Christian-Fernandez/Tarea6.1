<?php

require_once "bd.php";

if(isset($_POST["formulario"])){
    $archivo = $_FILES["archivo"]["name"];
    $archivo_tmp = $_FILES["archivo"]["tmp_name"];
    $ruta= './acta/'.$archivo;
    $rutaCarpeta='./acta';
    move_uploaded_file($archivo_tmp, $ruta);

    $filas = file($ruta);
    foreach ($filas as $value) {

       $todo = explode(",", $value);
       $asistencias= explode(";", $todo[3]);


       $jugadores = select_Jugador_Acta($todo[0]);

        foreach ($jugadores as $jugador){

            $jugador_puntos=$jugador["puntos"];
            $jugador_rebotes=$jugador["rebotes"];
            $jugador_asistencias=$jugador["asistencias"];

            $puntos_true = $todo[1]+$jugador_puntos;
            $rebotes_true = $todo[2]+$jugador_rebotes;
            $asistencias_true = $asistencias[0]+$jugador_asistencias;

        }
        actualizar_Jugador_Acta($todo[0],$puntos_true,$rebotes_true,$asistencias_true);


    }
    unlink($ruta);

}
?>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Sesión cerrada</title>
    <style>

        p{
            font-size: 20px;
            text-align: center;

        }

        a {
            display:inline-block;
            color: black;
            border: 1px black solid;
            border-radius: 5px;
            text-decoration:none;
            padding:10px 20px;
            line-height:normal;
            font-size:20px;
            font-weight:bold;


        }

        div{
            margin: 20% auto;
            text-align: center;

        }

        a:hover {
            background: #5691f1;
        }

    </style>
</head>
<body>
<div>
    <p>¡Se Actualizaron los Datos Correctamente!</p>
    <a href="jugadores.php">Ir a la página de los Jugadores</a>

</div>
</body>
</html>
