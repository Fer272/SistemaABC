<?php
session_start();
if (!$_SESSION['id_usuario']){
    header("location: index.php");
}

include 'template/header.php';
include 'template/navbar.php';
?>

        <!-- INICIAL EL CONTENIDO DINAMICO DEL SITIO -->
        <div class="container-fluid">
            <div class="row">
                <main>
                    <div class="container" id="contenedorPrincipal">
                        <!-- AQUI VA EL CONTENIDO DINAMICO -->
                    </div>
                </main>
            </div>
        </div>

<?php
include 'template/footer.php';
?>