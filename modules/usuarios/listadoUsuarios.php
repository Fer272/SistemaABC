<?php
    session_start();
    if (!$_SESSION['id_usuario']){
        header("location: ../../index.php");
    }
    include_once('../../include/functions.php');
    $usuariosClass = new UsuariosClass();
    $resultado = array();
    $resultadoRol = array();
    $resultado = $usuariosClass->lista_usuarios();
    $resultadoRol = $usuariosClass->lista_roles();
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">LISTADO DE USUARIOS</h1>
</div>

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info me-md-2" id="btnNuevoUsuario" name="btnNuevoUsuario" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo Usuario</button>
    </div>
    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">ROL</th>
                <th scope="col">USUARIO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CONTRASENA</th>
                <th scope="col">ESTADO</th>
                </tr>
            </thead>
            <tbody>

            <?php
                while($fila = mysqli_fetch_array($resultado)){
            ?>

                <tr>
                <th><?php echo $fila['idusuario']?></th>
                <td><?php echo $fila['rol']?></td>
                <td><?php echo $fila['usuario']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['telefono']?></td>
                <td><?php echo $fila['email']?></td>
                <td><?php echo $fila['contrasena']?></td>
                <td><?php echo $fila['estado']?></td>
                </tr>
            <?php
               }
            ?>  
            </tbody>
         </table>
    </div>
</div>

<!-- MODAL PARA AGREGAR USUARIOS -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
            <div class="form-floating mb-3">
                <select class="form-select" id="rolU" aria-label="Roles de usuarios">
                    <?php while($filaRol = mysqli_fetch_array($resultadoRol)){?>
                    <option value="<?php echo $filaRol['idrol'];?>"><?php echo $filaRol['nombre'];?></option>
                    <?php }?>
                </select>
                <label for="rolU">Rol</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombreU" placeholder="Aqui va tu nombre">
                <label for="nombreU">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usuarioU" placeholder="Aqui va tu usuario">
                <label for="usuarioU">Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefonoU" placeholder="Aqui va tu telefono">
                <label for="telefonoU">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="emailU" placeholder="Aqui va tu correo electronico">
                <label for="emailU">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contrasenaU" placeholder="Aqui va tu contrasena">
                <label for="contrasenaU">Contrasena</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnAgregarUsuario">Agregar Usuario</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script src="js/moduloUsuario.js"></script>