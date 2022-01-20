<?php

require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();

if(isset($_POST["estadistica"])){
    if($_POST["estadistica"]=="partidos"){
        header("Location: cant_partidos.php");
    }
    if($_POST["estadistica"]=="puntos"){
        header("Location: cant_puntos.php");
    }
    if($_POST["estadistica"]=="rebotes"){
        header("Location: cant_rebotes.php");
    }
    if($_POST["estadistica"]=="asistencias"){
        header("Location: cant_asistencias.php");
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Estadisticas</title>
    <style>

        *{
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 13px;
        }

        h1{
            font-size:25px
        }

        header li a:hover {
            background: #5691f1;
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
        ul{
            margin: 0;
            padding: 0;
            list-style: none;
            padding-right: 20px;
        }
        li{

            line-height: 80px;

        }

        .ul li a {
            display:block;
            color: black;
            border: 1px black solid;
            border-radius: 5px;
            text-decoration:none;
            padding:60px 20px;
            line-height:normal;
            font-size:20px;
            font-weight:bold;
            width: 50%;
            margin: 10px auto;
            text-align: center;


        }
        .estadisticas{
            background: #4285F4;
            color: white;
        }

        .ul li a:hover {
            background: #5691f1;
        }
        h1 {
            text-align: center;
        }

        form {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 450px;
            border: 1px solid #E1E1E1;
            border-radius: 10px;
            padding: 15px;
            transform: translate(-50%, -50%);
            background-color: white;
            text-align: center;

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


        label {
            display: block;
            padding-bottom 0.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }



    </style>
</head>
<body>
<?php require_once 'cabecera.php';?>

<form action = "ver_estadisticas.php" method = "POST">
    <label for="estadistica">Ver Estadísticas</label>
    <select name="estadistica" id="estadistica">
        <option value="partidos">Partidos</option>
        <option value="puntos">Puntos</option>
        <option value="rebotes">Rebotes</option>
        <option value="asistencias">Asistencias</option>
    </select>

    <input type="submit" value="Filtrar">

</form>

</body>
</html>


