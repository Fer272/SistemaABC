<?php
    session_start();
    if (!$_SESSION['id_usuario']){
        header("location: ../../index.php");
    }
    include_once('../../include/functions.php');
    $productosClass = new ProductosClass();
    $resultado = array();
    $resultado = $productosClass->lista_productos();
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">LISTADO DE PRODUCTOS</h1>
</div>
<div class="container">
    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">IMG</th>
                <th scope="col">PROVEEDOR</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">SKU</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRESENTACION</th>
                <th scope="col">VOLUMEN</th>
                <th scope="col">UNIDADES CAJA</th>
                <th scope="col">PRECIO</th>
                <th scope="col">STOCK</th>
                </tr>
            </thead>
            <tbody>

            <?php
                while($fila = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                <th><?php echo $fila['idproducto']?></th>
                <td><img src="<?php echo $fila['imagen']?>" width="60" height="60"></td>
                <td><?php echo $fila['Proveedor']?></td>
                <td><?php echo $fila['Categoria']?></td>
                <td><?php echo $fila['SKU']?></td>
                <td><?php echo $fila['nombre']?></td>
                <td><?php echo $fila['presentacion']?></td>
                <td><?php echo $fila['volumen']?></td>
                <td><?php echo $fila['unidades_caja']?></td>
                <td><?php echo $fila['precio_unitario']?></td>
                <td><?php echo $fila['stock']?></td>
                </tr>
            <?php
               }
            ?>  
            </tbody>
         </table>
    </div>
</div>