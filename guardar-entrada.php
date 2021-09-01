<?php
    if(isset($_POST)){
        //  Conexion
        require_once 'includes/conexion.php';

        $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion, $_POST['titulo']) : false;
        $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
        $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
        $usuario = $_SESSION['usuario']['id'];
        //  Array de errores
        $errores = array();

        //  Validar los datos 
        if(empty($titulo)){
            $errores['name'] = "El titulo no es válido";
        }
        if(empty($descripcion)){
            $errores['name'] = "La descripcion no es válido";
        }
        if(empty($categoria) && !is_numeric($categoria)){
            $errores['name'] = "La categoria no es válido";
        }

        if(count($errores) == 0){
            echo "Hola";
            $sql = "INSERT INTO entradas VALUES (NULL, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
            $query = mysqli_query($conexion, $sql);
        } else{
            $_SESSION["errores_entrada"] = $errores;
        }

    }

    header("Location: index.php");

?>