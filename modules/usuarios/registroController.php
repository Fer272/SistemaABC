<?php
    include_once("../../include/Functions.php");

    $nombre = $_POST['nombreRegistro'];
    $email = $_POST['emailRegistro'];
    $usuario = $_POST['usuarioRegistro'];
    $contrasena = $_POST['contrasenaRegistro'];
    $telefono = $_POST['telefonoRegistro'];

    if ($nombre == ""){
        echo "<script> 
        alert('ERROR: El campo NOMBRE es obligatorio');
        history.back();
        </script>";
        //Detiene la ejecución del programa
        exit(-1);
    }  
    if ($email == ""){
        echo "<script> 
        alert('ERROR: El campo CORREO ELECTRONICO es obligatorio');
        history.back();
        </script>";
        //Detiene la ejecución del programa
        exit(-1);
    }
    if ($usuario == ""){
        echo "<script> 
        alert('ERROR: El campo USUARIO es obligatorio');
        history.back();
        </script>";
        //Detiene la ejecución del programa
        exit(-1);
    }
    
    if ($contrasena == ""){
        echo "<script> 
        alert('ERROR: El campo CONTRASENA es obligatorio');
        history.back();
        </script>";
        //Detiene la ejecución del programa
        exit(-1);
    } 
    if ($telefono == ""){
        echo "<script> 
        alert('ERROR: El campo TELEFONO es obligatorio');
        history.back();
        </script>";
        //Detiene la ejecución del programa
        exit(-1);
    }

    $usuariosClass = new UsuariosClass();
    $resultado = $usuariosClass->registrar_usuario($nombre, $email, $usuario, $contrasena, $telefono);
   
    if($resultado = 1){
        echo "<script>
        alert('¡USUARIO CREADO EXITOSAMENTE!');
        history.back();
        </script>";
        exit(-1);
    }

    else{
        session_destroy();
        echo "<script>
            alert('¡ERROR, NO SE PUDO CREAR EL USUARIO!');
            history.back();
            </script>";
        exit(-1);
    }
?>