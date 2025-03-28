<?php

/**
 * Conexion a la base de datos
 *
 * @return mysqli Conexion a la base de datos
 */
function conectarDB() : mysqli {
    $db_host        = 'yamabiko.proxy.rlwy.net';
    $db_user        = 'root';
    $db_pass        = 'yONjdJnbqgPKOphsUWUHTIDopoCfkdAI';
    $db_database    = 'many'; 
    $db_port        = '21532';

    $db = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);

    if (!$db) {
        header('Location: /error.php');
        // exit; // Evita que el demas codigo de ejecute
    }

    return $db;
}