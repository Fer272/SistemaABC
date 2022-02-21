<?php
    ob_start();
    session_start();
    include_once("../../include/Functions.php");

    $usuario = $_POST['usuarioLogin'];
    $contrasena = $_POST['contrasenaLogin'];

    $loginClass = new LoginClass();

    $resultado = $loginClass->valida_login($usuario, $contrasena);

    if($fila = mysqli_fetch_array($resultado)){
        #IZQUIERDA VARIABLES DE SESION, DERECHA FILAS DE BASE DE DATOS
        $_SESSION['id_usuario'] = $fila['idusuario'];
        $_SESSION['nombre_usuario'] = $fila['nombre'];
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['email_usuario'] = $fila['email'];
        $_SESSION['rol_usuario'] = $fila['idrol'];
        header("location: ../../main.php");
    }

    else{
        session_destroy();
        echo "<script>
            alert('¡TUS CREDENCIALES SON INCORRECTAS!');
            history.back();
            </script>";
        exit(-1);
    }

    ob_end_flush();
?>
