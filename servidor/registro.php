<?php
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    
    require_once 'conexion.php';
    $conexion = conexion();

     echo $sql = "INSERT INTO t_usuarios (nombre,
                                    apellido,
                                    usuario,
                                    pasword)
            VALUES ('$nombre','$apellidos','$usuario','$password')";

    $respuesta = mysqli_query($conexion,$sql);
    mysqli_close($conexion);

    if($respuesta){
        //header("location../index.php");
    }else{
        echo 'no se puedo';

    }

?>