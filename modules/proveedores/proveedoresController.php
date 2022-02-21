<?php
include_once('../../include/Functions.php');
$proveedoresClass = new ProveedoresClass();
$resultado = 0;
$respuesta = array();

$crearProveedor = (isset($_POST['crear_proveedor'])) ? $_POST['crear_proveedor'] : "0";
$eliminarProveedor = (isset($_POST['eliminar_proveedor'])) ? $_POST['eliminar_proveedor'] : "0";
$cargarProveedor = (isset($_POST['cargar_proveedor'])) ? $_POST['cargar_proveedor'] : "0";
$editarProveedor = (isset($_POST['editar_proveedor'])) ? $_POST['editar_proveedor'] : "0";

if($crearProveedor == 1){
    $codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : "0";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0"; 
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0"; 
    $direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "0"; 
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "0";  
   
    
    $resultado = $proveedoresClass->crear_proveedor($codigo, $nombre, $direccion, $telefono, $email);

    $respuesta['resultado'] = $resultado;
    echo json_encode($respuesta);
}

if($eliminarProveedor == 1){
    $idproveedor = (isset($_POST['idproveedor'])) ? $_POST['idproveedor'] : "0";

    $resultado = $proveedoresClass->eliminar_proveedor($idproveedor);

    $respuesta['resultado'] = $resultado;
    echo json_encode($respuesta);
}

if($cargarProveedor == 1){
    $idproveedor = (isset($_POST['idproveedor'])) ? $_POST['idproveedor'] : "0";

    $resultado = $proveedoresClass->cargar_proveedor($idproveedor);

    $data = array();

        if($fila = mysqli_fetch_array($resultado)){
            $data['idproveedor'] = $fila['idproveedor'];
            $data['codigo'] = $fila['codigo'];
            $data['nombre'] = $fila['nombre'];
            $data['direccion'] = $fila['direccion'];
            $data['telefono'] = $fila['telefono'];
            $data['email'] = $fila['email'];
            $data['estado'] = $fila['estado'];
            
            echo json_encode($data);
        }
        else{
            $data['resultado'] = 'error';
        }
}

if($editarProveedor ==1){
    $idproveedor = (isset($_POST['idproveedor'])) ? $_POST['idproveedor'] : "0";
    $codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : "0";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
    $direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "0";
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "0";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0";
    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : "0";
    
    

    $resultado = $proveedoresClass->editar_proveedor($idproveedor, $codigo, $nombre, $direccion, $telefono, $email, $estado);
    $newdata['resultado'] = $resultado;
    echo json_encode($newdata);
}