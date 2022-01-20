<?php

require_once 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8">
    <title>Menú</title>
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
            padding-right: 10px;
        }
        nav li{
            display: inline-block;

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
        .menu{
            background: #4285F4;
            color: white;
        }

        .ul li a:hover {
            background: #5691f1;
        }
        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
<?php require_once 'cabecera.php';?>



</body>
</html>