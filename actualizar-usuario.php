<?php
    

    if(isset($_POST)){
        require_once 'includes/conexion.php';
        
        //  Recoger valores
        // mysqli_escape_string($conexion, $_POST['name']);
        $nombre = isset($_POST['name'])?trim($_POST['name']):false;
        $apellidos = isset($_POST['apellidos'])?trim($_POST['apellidos']):false;
        $email = isset($_POST['email'])?trim($_POST['email']):false;

        //  Array de errores
        $errores = array();

        //  Validar los datos 
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombre_validado = true;
        } else{
            $nombre_validado = false;
            $errores['name'] = "El nombre no es válido";
        }

        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
            $apellidos_validado = true;
        } else{
            $apellidos_validado = false;
            $errores['apellidos'] = "El apellido no es válido";
        }

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        } else{
            $email_validado = false;
            $errores['email'] = "El email no es válido";
        }


        $guardar_usuario = false;
        if(count($errores) == 0){
            $usuario = $_SESSION['usuario']['id'];
            $guardar_usuario = true;

            //  Comprobar si el email ya existe
            $sql = "SELECT id, email FROM usuarios WHERE email = '$email';";
            $isset_email = mysqli_query($conexion, $sql);
            $isset_user = mysqli_fetch_assoc($isset_email);
            if($isset_user['id'] == $usuario || empty($isset_user)){
                // Actualizar usuario en la BD
            
                $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '$email' WHERE id = $usuario";
                $query = mysqli_query($conexion, $sql);

                // var_dump(mysqli_error($conexion));
                // die();

                if($query){
                    $_SESSION['usuario']['nombre'] = $nombre;
                    $_SESSION['usuario']['apellidos'] = $apellidos;
                    $_SESSION['usuario']['email'] = $email;
                    $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
                } else{
                    $_SESSION['errores']['general'] = "Fallo al actualizar tus datos";
                }
                } else{
                    $_SESSION['errores']['general'] = "Ese correo ya está siendo utilizado";
                }
            
            
        } else{
            $_SESSION['errores'] = $errores;
            
        }

    }
    header('Location: mis-datos.php');
?>