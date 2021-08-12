<?php 
    function mostrarError($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        } 

        return $alerta;
    }

    function borrarErrores(){
        $borrado = false;
        $_SESSION['errores'] = null;
        $_SESSION['completado'] = null;
        if(isset($_SESSION['errores']) || isset($_SESSION['completado'])){
            $borrado = session_unset();
        }
        
        return $borrado;
    }

    function conseguirCategorias($conexion){
        $sql = "SELECT * FROM categorias ORDER BY id ASC;";
        $query = mysqli_query($conexion, $sql);

        $result = false;
        if($query && mysqli_num_rows($query) >= 1){
            $result = $query;
        }

        return $result;
    }

?>