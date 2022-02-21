<?php
include_once(RAIZ_APLICACION."/Functions.php");

    class UsuariosClass{
        //Funcion para crear un nuevo usuario   
        function crear_usuario($rol, $nombre, $email, $usuario, $contrasena, $telefono){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "INSERT INTO abc_proyecto2.usuario(idrol, usuario, nombre, telefono, email, contrasena, estado) VALUES ($rol,'$usuario','$nombre','$telefono','$email','$contrasena','A');";
            $resultado = mysqli_query($conexion, $sql);

            if($resultado){
                $conexionClass->desconectar($conexion);
                return 1;
            }
            else{
                $conexionClass->desconectar($conexion);
                return 0;
            }
        }

        //Funcion para crear un nuevo usuario   
        function registrar_usuario($nombre, $email, $usuario, $contrasena, $telefono){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "INSERT INTO abc_proyecto2.usuario(idrol, usuario, nombre, telefono, email, contrasena, estado) VALUES (2,'$usuario','$nombre','$telefono','$email','$contrasena','A');";
            $resultado = mysqli_query($conexion, $sql);

            if($resultado){
                $conexionClass->desconectar($conexion);
                return 1;
            }
            else{
                $conexionClass->desconectar($conexion);
                return 0;
            }
        }

        //Funcion para obtener el listado de usuarios    
        function lista_usuarios(){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT a.idusuario, b.nombre as rol, a.usuario, a.nombre, a.telefono, a.email, a.contrasena, a.estado FROM abc_proyecto2.usuario a, abc_proyecto2.rol b WHERE a.idrol = b.idrol;";
            $resultado = mysqli_query($conexion, $sql);
            $conexionClass->desconectar($conexion);
            return $resultado;
        }

        //Funcion para obtener el listado de roles   
        function lista_roles(){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT idrol, nombre FROM abc_proyecto2.rol;";
            $resultado = mysqli_query($conexion, $sql);
            $conexionClass->desconectar($conexion);
            return $resultado;
        }
    }

?>