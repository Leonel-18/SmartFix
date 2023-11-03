<?php

session_start();

include 'php/conexion_be.php';

$persona= $_SESSION['usuario'];

$sql = "SELECT id, nombre, apellido, telefono, email, password FROM usuarios WHERE email = '" .$persona. "'";

$resultado = mysqli_query($conexion, $sql);

while($data = $resultado->fetch_assoc()){

    $id = $data['id'];
    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $telefono = $data['telefono'];
    $email = $data['email'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Perfil</title>
</head>
<body>



<div class="contenedor">
<form action="php/login_usuario_be.php" method="POST">
    <h1>Mis Datos</h1>

    <div class="login">
        <label for="">Nombre</label>
        <h3><?php echo $nombre ?></h3>
       
    </div>

    <div class="login">
        <label for="">Apellido</label>
        <h3><?php echo $apellido ?></h3>
    </div>

    <div class="login">
        <label for="">E-mail</label>
        <h3><?php echo $email ?></h3>
    </div>

    <div class="login">
        <label for="">Teléfono</label>
        <h3><?php echo $telefono ?></h3>
    </div>
      <button type="submit" class="boton"><a class="volver" href="index.php">Volver al Menú</a></button>
</form>
</div>


</body>
</html>