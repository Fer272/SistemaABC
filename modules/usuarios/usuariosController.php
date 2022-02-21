<?php
include_once('../../include/Functions.php');
$usuariosClass = new UsuariosClass();
$resultado = 0;
$respuesta = array();

$crearUsuario = (isset($_POST['crear_usuario'])) ? $_POST['crear_usuario'] : "0";

if($crearUsuario == 1){
    $rol = (isset($_POST['rol'])) ? $_POST['rol'] : "0";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0"; 
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0"; 
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0"; 
    $contrasena = (isset($_POST['contrasena'])) ? $_POST['contrasena'] : "0";
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "0";  
    
    $resultado = $usuariosClass->crear_usuario($rol, $nombre, $email, $usuario, $contrasena, $telefono);

    $respuesta['resultado'] = $resultado;
    echo json_encode($respuesta);
}
