<?php
    session_start();
    if (!$_SESSION['id_usuario']){
        header("location: ../../index.php");
    }
    include_once('../../include/Functions.php');
    $proveedoresClass = new ProveedoresClass();
    $resultado = array();
    $resultado = $proveedoresClass->lista_proveedores();
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">LISTADO DE PROVEEDORES</h1>
</div>

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success me-md-2" id="btnNuevoProveedor" name="btnNuevoProveedor" data-bs-toggle="modal" data-bs-target="#modalNuevoP">Nuevo Proveedor</button>
    </div>
    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">CODIGO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ESTADO</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>

            <?php
                while($fila = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                <th><?php echo $fila['idproveedor']?></th>
                <td><?php echo $fila['codigo']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['direccion']?></td>
                <td><?php echo $fila['telefono']?></td>
                <td><?php echo $fila['email']?></td>
                <td><?php echo $fila['estado']?></td>
                <td><div>
                        <button type="button" class="btn btn-warning me-md-2" id="btnEditarProveedor" onclick="cargarProveedor(<?php echo $fila['idproveedor'];?>);" name="btnEditarProveedor" data-bs-toggle="modal" data-bs-target="#modalEditarP">Editar</button>
                    </div>
                </td>
                <td><div>
                        <button type="button" class="btn btn-danger me-md-2" id="btnEliminarProveedor" onclick="eliminarProveedor(<?php echo $fila['idproveedor'];?>);" name="btnEliminarProveedor">Eliminar</button>
                    </div>
                </td>
                </tr>
            <?php
               }
            ?>  
            </tbody>
         </table>
    </div>
</div>

<!-- MODAL PARA AGREGAR PROVEEDORES -->
<!-- Modal -->
<div class="modal fade" id="modalNuevoP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="codigoP" placeholder="Aqui va tu codigo">
                <label for="codigoP">Codigo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombreP" placeholder="Aqui va tu nombre">
                <label for="nombreP">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="direccionP" placeholder="Aqui va tu direccion">
                <label for="direccionP">Direccion</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefonoP" placeholder="Aqui va tu telefono">
                <label for="telefonoP">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="emailP" placeholder="Aqui va tu correo electronico">
                <label for="emailP">Correo Electronico</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnAgregarProveedor">Agregar Proveedor</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PARA EDITAR PROVEEDORES -->
<!-- Modal -->
<div class="modal fade" id="modalEditarP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="idPE" placeholder="Aqui va tu ID" disabled>
                <label for="idPE">ID</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="codigoPE" placeholder="Aqui va tu codigo">
                <label for="codigoPE">Codigo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombrePE" placeholder="Aqui va tu nombre">
                <label for="nombrePE">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="direccionPE" placeholder="Aqui va tu direccion">
                <label for="direccionPE">Direccion</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="telefonoPE" placeholder="Aqui va tu telefono">
                <label for="telefonoPE">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="emailPE" placeholder="Aqui va tu correo electronico">
                <label for="emailPE">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="estadoPE" placeholder="Aqui va tu estado">
                <label for="estadoPE">Estado</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="btnConfirmEditarProveedor">Editar Proveedor</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script src="js/moduloProveedor.js"></script>