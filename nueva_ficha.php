<?php

require_once "bd.php";
require_once "sesiones.php";

comprobar_sesion();

function comprobarNuevosDatos(){
    if (isset($_POST["nombre"]) && isset($_POST["posicion"]) && isset($_POST["partidos"])&& isset($_POST["puntos"])&& isset($_POST["rebotes"])&& isset($_POST["asistencias"])) {
        return true;
    }
}

if(comprobarNuevosDatos()){
    añadir_Jugador($_POST["nombre"], $_POST["posicion"],$_POST["partidos"],$_POST["puntos"],$_POST["rebotes"],$_POST["asistencias"]);
}

    $posicion = cargar_posicion();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8">
    <title>Carrito de la compra</title>
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

        h1{
            text-align: center;
        }


        .anadir{
            background: #4285F4;
            color: white;
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
        input[type="submit"]:hover {
            background: #5691f1;

        }

       input[type="text"],input[type="number"],select {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;

       }

        label {
            display: block;
            padding-bottom 0.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        select{

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

    </style>
</head>
<body>
<?php

require_once 'cabecera.php';

            echo "<h1>Nuevo Jugador</h1><form action = 'nueva_ficha.php'  method = 'POST'>
                            <label for='nombre'>Nombre:</label>     
                            <input type='text' id='nombre' name='nombre' required>
                            <label for='posicion'>Posición:</label>
                             <select name='posicion' id='posicion'>
                                <option value='base'>Base</option>
                                <option value='escolta'>Escolta</option> 
                                <option value='alero'>Alero</option> 
                                <option value='pivot'>Pivot</option> 
                                <option value='ala pivot'>Ala Pivot</option>  
                            </select>
                            <label for='partidos'>Partidos:</label>     
                            <input type='number' step='any' id='partidos' name='partidos' min='0' required>
                            <label for='puntos'>Puntos:</label>     
                            <input type='number' step='any'id='puntos' name='puntos' min='0'  required>
                            <label for='rebotes'>Rebotes:</label>     
                            <input type='number' step='any' id='rebotes' name='rebotes' min='0' required>
                            <label for='asistencias'>Asistencias:</label>     
                            <input type='number' step='any' id='asistencias' name='asistencias' min='0'  required>
                            
                           <div><input type='submit' value='Añadir Jugador'></div>
                        </form>";
?>
</body>
</html>
