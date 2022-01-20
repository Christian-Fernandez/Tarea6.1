<?php

require_once "bd.php";
require_once "sesiones.php";

comprobar_sesion();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8">
    <title>Mejores Jugadores</title>
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
        }

        body{
            margin: auto auto;
        }
        header p {
            float: left;
            padding: 10px 0 0 15px;
            text-decoration: none;
            font-size: large;
            font-size:20px;
            font-weight:bold;
        }
        header{
            height: 80px;
            border: black 1px solid;
        }
        header nav{
            float: right;
            margin: 0 0;
        }
        nav ul{
            margin: 0;
            padding: 0;
            list-style: none;
            padding-right: 20px;
        }
        nav li{
            display: inline-block;
            line-height: 80px;

        }

        header a {
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


        header li a:hover {
            background: #5691f1;
        }


        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;
            margin: 45px;
            width: 70%;
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

        h2{
            text-align: center;
        }

        div ul{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        div li{
            display: inline-block;
            line-height: 80px;

        }

        .confirmacion a {

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

        .mejores{
            background: #4285F4;
            color: white;
        }
    </style>
</head>
<body>
<?php
require 'cabecera.php';


$mejores = cargar_mejores();

    echo "<h2>Mejores Jugadores</h2>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Posición</th><th>Partidos</th><th>Puntos</th><th>Rebotes</th><th>Asistencias</th></tr>";
    foreach ($mejores as $jugador){
        $nom = $jugador["nombre"];
        $pos = $jugador["posicion"];
        $par = $jugador["partidos"];
        $pun = $jugador["puntos"];
        $reb = $jugador["rebotes"];
        $asis = $jugador["asistencias"];

        echo "<tr><td>$nom</td><td>$pos</td><td>$par</td><td>$pun</td><td>$reb</td><td>$asis</td></tr>";
    }
    echo '</table>';

?>

</body>
</html>

