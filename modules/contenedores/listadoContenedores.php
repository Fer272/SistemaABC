<?php
    session_start();
    if (!$_SESSION['id_usuario']){
        header("location: ../../index.php");
    }
    include_once('../../include/functions.php');
    $contenedoresClass = new ContenedoresClass();
    $resultado = array();
    $resultado = $contenedoresClass->lista_contenedores();
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">LISTADO DE CONTENEDORES</h1>
</div>
<div class="container">
    <div class="table-responsive">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">FACTURA</th>
                <th scope="col">MONTO VENTA</th>
                <th scope="col">FECHA TENTATIVA</th>
                <th scope="col">FECHA REAL</th>
                <th scope="col">LUGAR ARRIVO</th>
                <th scope="col">AEROPUERTO DESTINO</th>
                
                <th scope="col">PRODUCTOS</th>
                <th scope="col">NO. PRODUCTOS</th>
                </tr>
            </thead>
            <tbody>

            <?php
                while($fila = mysqli_fetch_array($resultado)){
            ?>
                <tr>
                <th><?php echo $fila['idcontenedor']?></th>
                <td><?php echo $fila['Factura']?></td>
                <td><?php echo $fila['MontoVenta']?></td>
                <td><?php echo $fila['fecha_tentativa']?></td>
                <td><?php echo $fila['fecha_real']?></td>
                <td><?php echo $fila['lugar_arrivo']?></td>
                <td><?php echo $fila['aeropuerto_destino']?></td>
                <td></td>
                <td></td>
                </tr>
            <?php
               }
            ?>  
            </tbody>
         </table>
    </div>
</div>