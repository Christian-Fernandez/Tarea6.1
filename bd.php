<?php

function comprobar_usuario($nombre,$clave){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT id, nombre FROM usuarios WHERE nombre='$nombre' and password='$clave'");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = mysqli_fetch_array($query, MYSQLI_ASSOC);
            return $datos["id"];
        }

    }else{
        echo "error";
    }

}

function cargar_mejores(){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores WHERE puntos > 12 or rebotes > 6 or asistencias > 5");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}

function cargar_mejores_bases(){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores WHERE posicion='base' and asistencias>8");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}

function cargar_mejores_Escoltas_Aleros(){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores WHERE posicion='escolta' and puntos>15 or posicion='alero' and puntos>15");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}

function cargar_Jugadores(){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores ORDER BY posicion ASC");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}


function cargar_posicion(){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT DISTINCT posicion FROM jugadores");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}

function cargar_Jugador($id){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores WHERE id='$id'");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);
            }
            return $datos;
        }

    }else{
        echo "error";
    }

}


function cargar_mejores_Alapivots_Pivots(){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores WHERE posicion='ala pivot' and rebotes>7 or posicion='pivot' and rebotes>7");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}

function actualizar_Jugador($id,$nombre,$posicion,$partidos,$puntos,$rebotes,$asistencias){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"UPDATE jugadores SET nombre='$nombre',posicion='$posicion',partidos='$partidos',puntos='$puntos',rebotes='$rebotes',asistencias='$asistencias' where id='$id'");

        if($query == FALSE){
            echo "error";
        }else{

        }

    }else{
        echo "error";
    }

}

function actualizar_Jugador_Acta($nombre,$puntos,$rebotes,$asistencias){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"UPDATE jugadores SET puntos='$puntos',rebotes='$rebotes',asistencias='$asistencias' where nombre='$nombre'");

        if($query == FALSE){
            echo "error";
        }else{

        }

    }else{
        echo "error";
    }

}

function select_Jugador_Acta($nombre){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT puntos,rebotes,asistencias from jugadores where nombre='$nombre'");

        if($query == FALSE){
            echo "error";
        }else{

            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;

        }

    }else{
        echo "error";
    }

}


function eliminar_Jugador($id){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"DELETE FROM jugadores where id='$id'");

        if($query == FALSE){
            echo "error";
        }else{

            echo "Correcto";
        }

    }else{
        echo "error";
    }

}

function filtrar_Jugadores($filtrado){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"SELECT * FROM jugadores ORDER BY $filtrado DESC");

        if($query == FALSE){
            echo "error";
        }else{
            $datos = array();
            while ($registro = mysqli_fetch_assoc($query)){
                array_push($datos,$registro);

            }

            return $datos;
        }

    }else{
        echo "error";
    }

}

function añadir_Jugador($nombre,$posicion,$partidos,$puntos,$rebotes,$asistencias){

    $base = mysqli_connect("127.0.0.1","root","","baloncesto");

    if($base){

        $query = mysqli_query($base,"INSERT INTO jugadores (nombre,posicion,partidos,puntos,rebotes,asistencias) VALUES ('$nombre','$posicion','$partidos','$puntos','$rebotes','$asistencias')");

        if($query == FALSE){
            echo "error";
        }else{

        }

    }else{
        echo "error";
    }

}

