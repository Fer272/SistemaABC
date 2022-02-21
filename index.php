<?php 

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ABC LOGIN</title>
        <!--CSS DE BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link href="CSS/estiloIndex.css" rel="stylesheet" type="text/css">
    </head>
    <body id="containerIndex">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" id="containerLogin">
            <br>
            <form id="formlogin" class="form" action="modules/login/loginController.php" method="post">
                <div class="mb-3">
                    <label for="usuarioLogin" class="form-label" id="usuarioLoginLabel">Usuario</label>
                    <input type="text" class="form-control" id="usuarioLogin" name="usuarioLogin">
                </div>
                <div class="mb-3">
                    <label for="contrasenaLogin" class="form-label" id="contrasenaLoginLabel">Contraseña</label>
                    <input type="password" class="form-control" id="contrasenaLogin" name="contrasenaLogin">
                </div>
                <button type="submit" class="btn btn-primary" id="btnEntrar">Entrar</button>
                <p class="mt-4 mb-3 text-muted">¿No tienes una cuenta? <a href="registro.php"> Haz click aquí.</a></p>
            </form>
            <br>
        </div>
    </body>
    <footer id="footer">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="abcfooter">
            <span class="text-muted">ABC</span>
        </div>
        <span class="text-muted">©2022 COMPAÑIA ABC</span>
    </footer>
</html>