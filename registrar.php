<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/registrar.css">
</head>
<body>

    <header>
        <nav>
            <h1 class="nombre">SmartFix</h1>
        </nav>
    </header>


    <div class="contenedor">

        <form action="php/registro_usuario_be.php" method="POST">
            <h1>Registrate</h1>

            <div class="login">
                <input type="text" placeholder="Ingresa tu nombre" name="nombre"></input>
            </div>

            <div class="login">
                <input type="text" placeholder="Ingresa tu apellido" name="apellido"></input>
            </div>

            <div class="login">
                <input type="text" placeholder="Ingresa tu telefono" name="telefono"></input>
            </div>

            <div class="login">
                <input type="email" placeholder="Ingresa tu E-mail" name="email"></input>    
            </div>

            <div class="login">
                <input type="password" placeholder="Ingresa una contraseña" name="password"></input>
                <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
            </div>


                <button type="submit" class="boton">Registrarse</button>
    
        </form>
    </div>


    <script src="https://kit.fontawesome.com/c63695aaa6.js" crossorigin="anonymous"></script>
    <script src="JavaScript/registrar.js"></script>

</body>
</html>