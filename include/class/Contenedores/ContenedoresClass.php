<?php
include_once(RAIZ_APLICACION."/Functions.php");

    class ContenedoresClass{

        //Funcion para obtener el listado de proveedores   
        function lista_contenedores(){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT a.idcontenedor, b.num_comprobante as Factura, b.total as MontoVenta, a.fecha_tentativa, a.fecha_real, a.lugar_arrivo, a.aeropuerto_destino FROM abc_proyecto2.contenedor a, abc_proyecto2.venta b WHERE a.idcontenedor = b.idcontenedor;";
            $resultado = mysqli_query($conexion, $sql);
            $conexionClass->desconectar($conexion);
            return $resultado;
        }
    }
?>