<?php
    if(isset($_POST)){
        //  Conexion
        require_once 'includes/conexion.php';

        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;

        //  Array de errores
        $errores = array();

        //  Validar los datos 
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombre_validado = true;
        } else{
            $nombre_validado = false;
            $errores['name'] = "El nombre no es válido";
        }

        if(count($errores) == 0){
            $sql = "INSERT INTO categorias VALUES (NULL, '$nombre');";
            $query = mysqli_query($conexion, $sql);
        }

    }

    header("Location: index.php");

?>