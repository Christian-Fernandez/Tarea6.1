<?php
require_once 'sesiones.php';

?>
    <header>
        <p>Usuario: <?php echo $_SESSION["correo"]; ?></p>
        <nav>
            <ul>
                <li><a class="menu" href="menu.php">Menú</a></li>
                <li><a class="mejores" href="mejores.php">Mejores Jugadores</a></li>
                <li><a class="mejores_posiciones" href="mejores_posiciones.php">Mejores Posiciones</a></li>
                <li><a class="jugadores" href="jugadores.php">Lista Jugadores</a></li>
                <li><a class="estadisticas" href="ver_estadisticas.php">Estadísticas</a></li>
                <li><a class="anadir" href="nueva_ficha.php">Añadir Jugador</a></li>
                <li><a class="acta" href="subir_acta.php">Subir Acta</a></li>
                <li><a class="logout" href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
