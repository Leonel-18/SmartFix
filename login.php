<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <header>
    <nav>
        <h1 class="nombre">SmartFix</h1>
    </nav>
    </header>

    <div class="contenedor">

        <form action="php/login_usuario_be.php" method="POST">
            <h1>Iniciar Sesión</h1>
            <div class="login">
                <input type="email" placeholder="E-mail" name="email" autocomplete="off"></input>
                <i class="fa-regular fa-user" style="color: #ffffff;"></i>     
            </div>

            <div class="login">
                <input type="password" placeholder="Contraseña" name="password"></input>
                <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
            </div>

                <button type="submit" class="boton">Iniciar Sesion</button>
    
            <div class="nuevaC"> 
                <p>¿No tienes cuenta?<a href="registrar.php">Regístrate</a></p>
            </div>  
        </form>
    </div>


    <script src="https://kit.fontawesome.com/c63695aaa6.js" crossorigin="anonymous"></script>

</body>
</html>