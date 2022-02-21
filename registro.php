<?php 

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ABC REGISTRO</title>
        <!--CSS DE BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/estiloIndex.css" rel="stylesheet" type="text/css">
    </head>
    <body id="containerIndex">
        <br>
        <br>
        <div class="container" id="containerLogin">
            <br>
            <form id="formlogin" class="form" action="modules/usuarios/registroController.php" method="post">
                <h1>REGISTRO</h1>
                <br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombreRegistro" name="nombreRegistro" placeholder="Aqui va tu nombre">
                    <label for="nombreRegistro">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="emailRegistro" name="emailRegistro" placeholder="Aqui va tu email">
                    <label for="emailRegistro">Correo Electrónico</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="usuarioRegistro" name="usuarioRegistro" placeholder="Aqui va tu usuario">
                    <label for="usuarioRegistro">Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="contrasenaRegistro" name="contrasenaRegistro" placeholder="Aqui va tu contrasena">
                    <label for="contrasenaRegistro">Contraseña</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="telefonoRegistro" name="telefonoRegistro" placeholder="Aqui va tu telefono">
                    <label for="telefonoRegistro">Telefono</label>
                </div>
                <br>
                <button type="submit" class="btn btn-warning" id="btnRegistro" name="btnRegistro">Registrar Usuario</button>
                <p class="mt-4 mb-3 text-muted">¿Ya tienes una cuenta?<a href="index.php"> Haz click aquí.</a></p>
                <br>
                
            </form>
        </div>
       

        <!-- JS DE BOOSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
    </body>
    <footer id="footer">
        <br>
        <br>
        <div id="abcfooter">
            <span class="text-muted">ABC</span>
        </div>
        <span class="text-muted">©2022 COMPAÑIA ABC</span>

        <!--ALERTAS SWEETALERT-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </footer>
</html>