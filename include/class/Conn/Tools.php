<?php
class Tools
{
    function conectar(){
        $conexion = mysqli_connect(SERVER, USER, PASS, DB);

        if($conexion){
            
        }

        else{
            echo 'Error en la conexión de la base de datos: <br>'.mysqli_connect_error();
        }

        mysqli_query($conexion, "SET NAMES 'utf8'");
        mysqli_set_charset($conexion, "utf8");
        return $conexion;
    }

    function desconectar($conexion){
        $close = mysqli_close($conexion);

        if($close){

        }
        else{
            echo 'Ha sucedido un error inesperado en la desconexión de la base de datos<br>';
        }

        return $close;
    }
}
?>