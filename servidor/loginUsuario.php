<?php
    session_start();
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']); 

    
    require_once 'conexion.php';
    $conexion = conexion();

    $sql = "SELECT * FROM t_usuarios
            WHERE usaurio = '$usuario' AND password = '$password'";
    $respuesta = mysqli_query($conexion,$sql);

    if(mysqli_num_rows($respuesta)>0){
        $_SESSION['usuario'] = $usuario;
        header("location:../inicio.php");
    }else{
        header("location:../index.php");
    }
?>