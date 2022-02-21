<?php
include_once(RAIZ_APLICACION."/Functions.php");

    class ProductosClass{

        //Funcion para obtener el listado de proveedores   
        function lista_productos(){  
            //Instancias de conexión
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT a.idproducto, b.nombre as Proveedor, c.nombre as Categoria, a.SKU, a.nombre, a.presentacion, a.volumen, a.unidades_caja, a.precio_unitario, a.stock, a.imagen FROM abc_proyecto2.producto a
            inner JOIN abc_proyecto2.proveedor b ON a.idproveedor = b.idproveedor
            inner JOIN abc_proyecto2.categoria c ON a.idcategoria = c.idcategoria;";
            $resultado = mysqli_query($conexion, $sql);
            $conexionClass->desconectar($conexion);
            return $resultado;
        }
    }
?>