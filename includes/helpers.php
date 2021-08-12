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

?>