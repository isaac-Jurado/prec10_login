<?php
    function conexion(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $db = "sistemasWeb";

        $conexion = mysqli_connect($servidor,$user,$password,$db);
        return $conexion;

    
    } 
?>