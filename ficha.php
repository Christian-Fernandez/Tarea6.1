<?php

require_once "bd.php";
require_once "borrar_ficha.php";
require_once "actualizar_ficha.php";
require_once "sesiones.php";

comprobar_sesion();


if(isset($_GET["borrar"])){

    borrarJugador($_GET["borrar"]);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8">
    <title>Ficha</title>
    <style>

        *{
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 13px;
        }

        h1{
            font-size:25px
        }

        h2{
            font-size: 19px;
            text-align: center;
        }

        body {
            margin: auto auto;
        }

        label{
            font-size: 15px;
        }

        header p {
            float: left;
            padding: 10px 0 0 15px;
            text-decoration: none;
            font-size: large;
            font-size: 20px;
            font-weight: bold;
        }

        header {
            height: 80px;
            border: black 1px solid;
        }

        header nav {
            float: right;
            margin: 0 0;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            padding-right: 20px;
        }

        nav li {
            display: inline-block;
            line-height: 80px;

        }

        header a {
            display: inline-block;
            color: black;
            border: 1px black solid;
            border-radius: 5px;
            text-decoration: none;
            padding: 10px 20px;
            line-height: normal;
            font-size: 20px;
            font-weight: bold;

        }

        .back-end {
            background: #4285F4;
            color: white;
        }

        .backEnd-pedidos{
            background: #4285F4;
            color: white;
        }

        header li a:hover {
            background: #5691f1;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            padding-right: 20px;
        }

        nav li {
            display: inline-block;
            line-height: 80px;

        }

        .administracion li a:hover {
            background: #5691f1;
        }

        nav a {
            display: inline-block;
            color: black;
            border: 1px black solid;
            border-radius: 5px;
            text-decoration: none;
            padding: 10px 20px;
            line-height: normal;
            font-size: 20px;
            font-weight: bold;
            margin: 0 auto;

        }

        form {

            margin: 0 auto;
            width: 450px;
            border: 1px solid #E1E1E1;
            border-radius: 10px;
            padding: 15px;
            background-color: white;
            text-align: center;

        }


        input[type="password"], input[type="text"], input[type="email"] {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;

        }

        input[type="password"], input[type="text"], input[type="email"],input[type="number"],select {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;

        }

        textarea,select{

            border: black 2px solid;
            border-radius: 5px;
            resize: none;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            outline: none;
            background: #4285F4;
            width: 50%;
            border: 0;
            border-radius: 5px;
            padding: 12px 20px;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            margin-left: 2px;
            text-decoration: none;



        }

        form a {
            outline: none;
            background: #f63333;
            width: 42%;
            border: 0;
            border-radius: 5px;
            padding: 12px 20px;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 20px;
            margin-top: 20px;
            margin-right: 2px;
            text-decoration: none;


        }

        form div {
            display: flex;
        }

        input[type="submit"]:hover {
            background: #5691f1;

        }

        form a:hover {
            background: #ef4444;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        label {
            display: block;
            padding-bottom 0.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;
            margin: 45px;
            width:70%;
            border-collapse: collapse;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 50px;

        }

        th {
            font-size: 13px;
            font-weight: normal;
            padding: 15px;
            background: #b9c9fe;
            border-top: 4px solid #aabcfe;
            border-bottom: 1px solid #fff;
            color: black;
            border-collapse: collapse

        }

        td {
            padding: 18px;
            background: #e8edff;
            border-bottom: 1px solid #fff;
            color: black;
            border-collapse: collapse

        }

        h1 {
            text-align: center;
        }

        table a {
            text-decoration: none;
            color: blue;
        }


        tr:hover td {
            background: #d0dafd;
            color: #339;
        }
    </style>
</head>
<body>
<?php
require 'cabecera.php';

function comprobarDatos(){
    if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["posicion"]) && isset($_POST["partidos"])&& isset($_POST["puntos"])&& isset($_POST["rebotes"])&& isset($_POST["asistencias"])) {
        return true;
    } else {
        return false;
    }
}

if (comprobarDatos()) {
    actualizarJugador($_POST["id"],$_POST["nombre"], $_POST["posicion"],$_POST["partidos"],$_POST["puntos"],$_POST["rebotes"],$_POST["asistencias"]);
}

if(isset($_GET["editar"])){

    $estadisticas = cargar_Jugador($_GET["editar"]);
    $posicion = cargar_posicion();

    if ($estadisticas) {
        foreach ($estadisticas as $est) {
            $id2=$est["id"];
            echo "<h1>Actualizar Jugador: ${est["nombre"]}</h1><form action = 'ficha.php?id=$id2'  method = 'POST'>
                            <label for='nombre'>Nombre:</label>     
                            <input type='text' id='nombre' name='nombre' value='${est["nombre"]}' required>
                            <label for='posicion'>Posición:</label>
                              <select name='posicion' id='posicion'>
                                <option value='base'>Base</option>
                                <option value='escolta'>Escolta</option> 
                                <option value='alero'>Alero</option> 
                                <option value='pivot'>Pivot</option> 
                                <option value='ala pivot'>Ala Pivot</option>  
                            </select>
                            <label for='partidos'>Partidos:</label>     
                            <input type='number' step='any' id='partidos' name='partidos' min='0' value='${est["partidos"]}' required>
                            <label for='puntos'>Puntos:</label>     
                            <input type='number' step='any'id='puntos' name='puntos' min='0' value='${est["puntos"]}'  required>
                            <label for='rebotes'>Rebotes:</label>     
                            <input type='number' step='any' id='rebotes' name='rebotes' min='0' value='${est["rebotes"]}'  required>
                            <label for='asistencias'>Asistencias:</label>     
                            <input type='number' step='any' id='asistencias' name='asistencias' min='0' value='${est["asistencias"]}'  required>
                            
                            <input type='hidden' name='id' value='${est["id"]}'>
                           <div> <a href='ficha.php?id=$id2'>Cancelar</a> <input type='submit' value='Editar'></div>
                        </form>";

        }
    }

}else{

    if (isset($_GET["id"])){
        $id = $_GET["id"] ;

        $mejores = cargar_Jugador($id);

        if($mejores) {

            foreach ($mejores as $jugador) {

                $nom = $jugador["nombre"];
                $pos = $jugador["posicion"];
                $par = $jugador["partidos"];
                $pun = $jugador["puntos"];
                $reb = $jugador["rebotes"];
                $asis = $jugador["asistencias"];

                echo "<h2>Estadisticas de $nom</h2>";
                echo "<table>";
                echo "<tr><th>Nombre</th><th>Posición</th><th>Partidos</th><th>Puntos</th><th>Rebotes</th><th>Asistencias</th><th></th><th></th></tr>";

                echo "<tr><td>$nom</td><td>$pos</td><td>$par</td><td>$pun</td><td>$reb</td><td>$asis</td><td><a href='ficha.php?editar=$id'>Editar</a></td><td><a href='ficha.php?borrar=$id'>Borrar</a></td></tr>";
            }
            echo '</table>';
        }else{
            echo "<h2>No existe este Jugador</h2>";

        }
    }else{
        echo "<h2>No existe este Jugador</h2>";
    }



}




?>

</body>
</html>

