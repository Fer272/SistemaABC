<?php
    include_once(RAIZ_APLICACION."/Functions.php");

    class LoginClass{
        /**
         * Función para validar las credenciales de un usuario
         */

         function valida_login($usuario, $contrasena){

             $conexionClass = new Tools();
             $conexion = $conexionClass->conectar();

             $sql = "SELECT * from abc_proyecto2.usuario where usuario = '$usuario' and contrasena = '$contrasena'";
             $resultado = mysqli_query($conexion, $sql);
             $conexionClass->desconectar($conexion);
             return $resultado;
         }

         /**
         * Función para cerrar sesión
         */

         function cerrar_sesion(){
             session_start();
             session_destroy();
             header("location: ../../index.php");
             exit;
         }
    }
?>