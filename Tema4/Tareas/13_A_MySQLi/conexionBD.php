<?php
    define('IP', $_SERVER['SERVER_ADDR']);  // Solo si el servidor y la BBDD se encuentran en el mismo sitio.
    define('USER', 'maria');
    define('PASS', 'maria');
    define('DB', 'tienda');

    $con = new mysqli(IP, USER, PASS);

    // Verificar que la conexión se realiza correctamente
    if ($con -> connect_error) {
        echo "Error en la conexión con la Base de Datos: " . $con -> connect_error;
        exit;
    }
?>