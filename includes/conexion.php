<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'blog-master';
    $conexion = mysqli_connect($server, $user, $pass, $db);

    mysqli_query($conexion, "SET NAMES 'utf8'");

    //  Iniciar la sesion
    if(!isset($_SESSION)){
        session_start();
    }
?>