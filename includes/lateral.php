<!-- SIDEBAR -->

<aside id="sidebar">

    <?php if(isset($_SESSION['usuario'])): ?>
    <div id="usuario-logueado" class="bloque">
        <h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
        <!-- Botones -->
        <a class="boton boton_verde" href="crear-entradas.php">Crear entradas</a>
        <a class="boton" href="crear-categoria.php">Crear categoria</a>
        <a class="boton boton_naranja" href="cerrar.php">Mis datos</a>
        <a class="boton boton_rojo" href="cerrar.php">Cerrar sesion</a>
    </div>
    <?php endif; ?>


    <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <?php if(isset($_SESSION['error_login'])): ?>
            <div class="alerta alerta-error">
            <?=$_SESSION['error_login'];?>
            </div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email"/>

            <label for="pass">Contraseña</label>
            <input type="password" name="pass"/>

            <input type="submit" value="Entrar"/>
        </form>
    </div>

    <div id="register" class="bloque">
        <h3>Registrate</h3>
        <!-- Mostrar errores -->
        <?php if(isset($_SESSION['completado'])):?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?=$_SESSION['errores']['general']?>
            </div>
        <?php endif; ?>
        <form action="registro.php" method="POST">
            <label for="name">Nombre</label>
            <input type="text" name="name"/>
            <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'name'):'';?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'apellidos'):'';?>
            
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'email'):'';?>

            <label for="pass">Contraseña</label>
            <input type="password" name="pass"/>
            <?php echo isset($_SESSION['errores'])?mostrarError($_SESSION['errores'], 'pass'):'';?>

            <input type="submit" value="Registrar" name="submit"/>
        </form>
        <?php borrarErrores();?>
    </div>
    <?php endif; ?>
</aside>