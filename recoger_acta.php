<?php

require_once "bd.php";

if(isset($_POST["formulario"])){
    mkdir("./acta", 0700);
    $archivo = $_FILES["archivo"]["name"];
    $archivo_tmp = $_FILES["archivo"]["tmp_name"];
    $ruta= './acta/'.$archivo;
    $rutaCarpeta='./acta';
    move_uploaded_file($archivo_tmp, $ruta);
    $base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $file_delete =  "$base_dir\acta";

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


}