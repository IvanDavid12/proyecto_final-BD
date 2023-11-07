<?php
    DEFINE('USER', 'root');
    DEFINE('PW', '');
    DEFINE('HOST', 'localhost');
    DEFINE('BD', 'word_virtual');

    //Conexion a la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD);
    if($conexion)
    {
        echo 'Se ha conectado al sevidor MySQL. BD lista para usar.<br>';
    }
    else
    {
        echo 'No se pudo conectar al servidor MySQL<br>';
    }
?>