<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css"/>
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php">Categoria 1</a></li>
                    <li><a href="index.php">Categoria 2</a></li>
                    <li><a href="index.php">Categoria 3</a></li>
                    <li><a href="index.php">Categoria 4</a></li>
                    <li><a href="index.php">Sobre mi</a></li>
                    <li><a href="index.php">Contacto</a></li>
                </ul>
            </nav>
            <!-- Limpiar flotados -->
            <div class="clearfix"></div>
        </header>

        <div id="contenedor">
            <!-- SIDEBAR -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
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
                    <form action="registro.php" method="POST">
                        <label for="name">Nombre</label>
                        <input type="text" name="name"/>

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos"/>
                        
                        <label for="email">Email</label>
                        <input type="email" name="email"/>

                        <label for="pass">Contraseña</label>
                        <input type="password" name="pass"/>

                        <input type="submit" value="Registrar"/>
                    </form>
                </div>
            </aside>
    
            <!-- CONTENIDO PRINCIPAL -->
            <div id="principal">
                <h1>Ultimas entradas</h1>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nisl elit. Nam lobortis nibh mauris, et tempor metus auctor a. Phasellus non porta nisi, sit amet tempus ligula. Donec tincidunt volutpat est egestas tristique. Integer quis erat bibendum ligula ultricies sagittis vitae sed nunc. Donec sit amet vulputate nulla. Nullam mattis varius justo, sed fermentum elit placerat eget. Nunc ornare risus ut pellentesque fermentum. Curabitur id bibendum est. Praesent et tortor in quam porttitor vehicula. Aliquam eleifend condimentum ullamcorper.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nisl elit. Nam lobortis nibh mauris, et tempor metus auctor a. Phasellus non porta nisi, sit amet tempus ligula. Donec tincidunt volutpat est egestas tristique. Integer quis erat bibendum ligula ultricies sagittis vitae sed nunc. Donec sit amet vulputate nulla. Nullam mattis varius justo, sed fermentum elit placerat eget. Nunc ornare risus ut pellentesque fermentum. Curabitur id bibendum est. Praesent et tortor in quam porttitor vehicula. Aliquam eleifend condimentum ullamcorper.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nisl elit. Nam lobortis nibh mauris, et tempor metus auctor a. Phasellus non porta nisi, sit amet tempus ligula. Donec tincidunt volutpat est egestas tristique. Integer quis erat bibendum ligula ultricies sagittis vitae sed nunc. Donec sit amet vulputate nulla. Nullam mattis varius justo, sed fermentum elit placerat eget. Nunc ornare risus ut pellentesque fermentum. Curabitur id bibendum est. Praesent et tortor in quam porttitor vehicula. Aliquam eleifend condimentum ullamcorper.
                        </p>
                    </a>
                </article>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a nisl elit. Nam lobortis nibh mauris, et tempor metus auctor a. Phasellus non porta nisi, sit amet tempus ligula. Donec tincidunt volutpat est egestas tristique. Integer quis erat bibendum ligula ultricies sagittis vitae sed nunc. Donec sit amet vulputate nulla. Nullam mattis varius justo, sed fermentum elit placerat eget. Nunc ornare risus ut pellentesque fermentum. Curabitur id bibendum est. Praesent et tortor in quam porttitor vehicula. Aliquam eleifend condimentum ullamcorper.
                        </p>
                    </a>
                </article>
                <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
            </div>
            
            <div class="clearfix"></div>
            <!-- FIN PRINCIPAL -->
        </div> 
        
        <!-- PIE DE PAGINA -->
        <footer id="pie">
            <p>Desarrollado por Edson Navarro &copy; 2021</p>
        </footer>

    </body>
</html>