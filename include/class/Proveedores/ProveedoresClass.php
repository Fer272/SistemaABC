<?php
include_once(RAIZ_APLICACION."/Functions.php");

    class ProveedoresClass{
        //Funcion para registrar un nuevo proveedor  
        function crear_proveedor($codigo, $nombre, $direccion, $telefono, $email){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "INSERT INTO abc_proyecto2.proveedor(codigo, nombre, direccion, telefono, email, estado) VALUES ('$codigo', '$nombre', '$direccion', '$telefono', '$email', 'A');";
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

        //Funcion para obtener el listado de proveedores   
        function lista_proveedores(){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT * FROM abc_proyecto2.proveedor;";
            $resultado = mysqli_query($conexion, $sql);
            $conexionClass->desconectar($conexion);
            return $resultado;
        }

        //Funcion para eliminar un proveedor por su id   
        function eliminar_proveedor($idproveedor){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "DELETE FROM abc_proyecto2.proveedor WHERE idproveedor= $idproveedor;";
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

        //Funcion para cargar un proveedor   
        function cargar_proveedor($idproveedor){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT * FROM abc_proyecto2.proveedor WHERE idproveedor = $idproveedor;";
            $resultado = mysqli_query($conexion, $sql);

            return $resultado;
        }

        //Funcion para editar un proveedor 
        function editar_proveedor($idproveedor, $codigo, $nombre, $direccion, $telefono, $email, $estado){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "UPDATE abc_proyecto2.proveedor SET
                codigo = '$codigo', 
                nombre = '$nombre',
                direccion = '$direccion', 
                telefono = '$telefono',
                email = '$email',
                estado = '$estado' 
                WHERE idproveedor = $idproveedor;";

            $resultado = mysqli_query($conexion, $sql);

            if($resultado){
                $conexionClass -> desconectar($conexion);
                return 1;
            }
            else{
                $conexionClass -> desconectar($conexion);
                return 0;
            }
        }
    }
?>