<?php

    require_once "sesiones.php";

    comprobar_sesion();
    $_SESSION= array();
    session_destroy();
    setcookie(session_name(),123,time() - 1000);
?>

<!DOCTYPE html>
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
            <p>La sesión se cerró correctamente, hasta la próxima</p>
            <a href="login.php">Ir a la página de login</a>
        </div>
    </body>
</html>
