<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$password = $_POST['password'];
$hasheo= hash('sha512', $password);

$query = "INSERT INTO usuarios(nombre, apellido, telefono, email, password) 
          VALUES ('$nombre', '$apellido', '$telefono', '$email', '$hasheo')";

// Verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("El email ingresado ya existe, intenta con otro diferente");
                window.location = "../registrar.php";
            </script>
        ';
        exit();
    }


$ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            window.location = "../login.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>