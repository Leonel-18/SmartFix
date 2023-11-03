<?php
    
    session_start();
    
    include 'conexion_be.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hasheo= hash('sha512', $password);

    $validacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and password='$hasheo'");




    if(mysqli_num_rows($validacion) > 0){
        $_SESSION['usuario'] = $email;
        header("location: ../index.php");
        exit;

    }else{
        echo '
        <script>
            window.location = "../login.php";
        </script>
        ';
    }
?>