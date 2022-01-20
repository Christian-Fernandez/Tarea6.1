<?php

require_once "bd.php";
function borrarJugador($get){
    eliminar_Jugador($get);
    header("Location: jugadores.php");
}
?>