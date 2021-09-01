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
            $errores['titulo'] = "El titulo no es válido";
        }
        if(empty($descripcion)){
            $errores['descripcion'] = "La descripcion no es válida";
        }
        if(empty($categoria) && !is_numeric($categoria)){
            $errores['categoria'] = "La categoria no es válido";
        }

        if(count($errores) == 0){
            echo "Hola";
            $sql = "INSERT INTO entradas VALUES (NULL, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
            $query = mysqli_query($conexion, $sql);
            header("Location: index.php");
        } else{
            $_SESSION["errores_entrada"] = $errores;
            header("Location: crear-entradas.php");
        }

    }

    

?>