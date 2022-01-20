<?php
session_start();
function comprobar_sesion(){

    if(!isset($_SESSION["usuario"])){
        header("Location: login.php?redirigido=true");
    }
    
}

