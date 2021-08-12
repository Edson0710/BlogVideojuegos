<?php 
    //  Iniciar la sesion y la conexion a la bd
    require_once 'includes/conexion.php';

    //  Recoger datos del formulario
    if(isset($_POST)){

        if(isset($_SESSION['error_login'])){
            session_unset();
        }

        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);

        //  Consulta para comprobar credenciales LIMIT 1
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $query = mysqli_query($conexion, $sql);

        if($query && mysqli_num_rows($query) == 1){
            $usuario = mysqli_fetch_assoc($query);
            //  Comprobar la contraseña / cifrar
            $verify = password_verify($pass, $usuario['password']);
            if($verify){
                session_unset();
                //  Utilizar una sesion para datos del usuario
                $_SESSION['usuario']=$usuario;
            } else {
                //  Si algo falla enviar a una sesion con fallo
                $_SESSION['error_login'] = "Login incorrecto";
            }
        } else{
            //  Mensaje de error
            $_SESSION['error_login'] = "Login incorrecto";
        }

        
    }

    
    //  Redirigir al index
    header('Location: index.php');
?>