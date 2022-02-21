<?php
    require_once("Config.php");

    if(DEBUG == "true"){
        ini_set('display_errors', 1);
    }
    else{
        ini_set('display_errors', 0);
    }

    #CLASES DE LA CAPA DE MODELO DE BASE DE DATOS
    require_once("class/Conn/Tools.php");
    require_once("class/Login/LoginClass.php");
    require_once("class/Usuarios/UsuariosClass.php");
    require_once("class/Proveedores/ProveedoresClass.php");
    require_once("class/Productos/ProductosClass.php");
    require_once("class/Contenedores/ContenedoresClass.php");
?>