<?php
    

    if(isset($_POST)){
        require_once 'includes/conexion.php';
        if(!isset($_SESSION)){
            session_start();
        }
        
        //  Recoger valores
        // mysqli_escape_string($conexion, $_POST['name']);
        $nombre = isset($_POST['name'])?$_POST['name']:false;
        $apellidos = isset($_POST['apellidos'])?$_POST['apellidos']:false;
        $email = isset($_POST['email'])?$_POST['email']:false;
        $pass = isset($_POST['pass'])?$_POST['pass']:false;

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

        if(!empty($pass)){
            $pass_validado = true;
        } else{
            $pass_validado = false;
            $errores['pass'] = "La password no es válida";
        }

        $guardar_usuario = false;
        if(count($errores) == 0){
            $guardar_usuario = true;
            //  Cifrar la contraseña
            $password_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);
            // var_dump($pass);
            // var_dump($password_segura);
            // var_dump(password_verify("$pass", $password_segura));
            // die();

            // Insertar usuario en la BD
            $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
            $query = mysqli_query($conexion, $sql);

            // var_dump(mysqli_error($conexion));
            // die();

            if($query){
                $_SESSION['completado'] = "El registro se ha completado con exito";
            } else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
            }
            
        } else{
            $_SESSION['errores'] = $errores;
            
        }

    }
    header('Location: index.php');
?>