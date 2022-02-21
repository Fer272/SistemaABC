$('#btnAgregarProveedor').on("click", function(){
    
    var codigo = $('#codigoP').val();
    var nombre = $('#nombreP').val();
    var direccion = $('#direccionP').val();
    var telefono = $('#telefonoP').val();
    var email = $('#emailP').val();

    if (nombre == ""){
        alert('El campo nombre es obligatorio');
        //Detiene la ejecución del programa
        return false;
    }  
    if (email == ""){
        alert('El campo correo electronico es obligatorio');
        //Detiene la ejecución del programa
        return false;
    }
    if (codigo == ""){
        alert('El campo codigo es obligatorio');
        //Detiene la ejecución del programa
        return false;
    }
    
    if (direccion == ""){
        alert('El campo direccion es obligatorio');
        //Detiene la ejecución del programa
        return false;
    } 
    if (telefono == ""){
        alert('El campo telefono es obligatorio');
        //Detiene la ejecución del programa
        return false;
    }    
    
    $.ajax({
        type: 'POST',
        data: "crear_proveedor=1&codigo="+codigo+"&nombre="+nombre+"&email="+email+"&direccion="+direccion+"&telefono="+telefono,
        url: 'modules/proveedores/proveedoresController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                $('#modalNuevoP').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                swal("¡PROVEEDOR CREADO EXITOSAMENTE!", "Presione para continuar", "success");
                cargarContenido('modules/proveedores/listadoProveedores.php');
            }
            else{
                alert('No se pudo crear el proveedor');
            }
        }
    });
});

function eliminarProveedor(idproveedor){
    $.ajax({
        type: 'POST',
        data: "eliminar_proveedor=1&idproveedor="+idproveedor,
        url: 'modules/proveedores/proveedoresController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                swal("¡PROVEEDOR ELIMINADO EXITOSAMENTE!", "Presione para continuar", "error");
                cargarContenido('modules/proveedores/listadoProveedores.php');
            }
            else{
                alert('No se pudo eliminar a la persona');
            }
        }
    });    
}

function cargarProveedor(idproveedor) {
    $.ajax({
        type: "POST",
        data: "cargar_proveedor=1&idproveedor="+idproveedor,
        url: 'modules/proveedores/proveedoresController.php',
        dataType: "json",
        success: function (datos) {
              $('#idPE').val(datos['idproveedor']);
              $('#codigoPE').val(datos['codigo']);
              $('#nombrePE').val(datos['nombre']);
              $('#direccionPE').val(datos['direccion']);
              $('#telefonoPE').val(datos['telefono']);
              $('#emailPE').val(datos['email']);  
              $('#estadoPE').val(datos['estado']); 
        },
    });
}

$("#btnConfirmEditarProveedor").on("click", function () {

    var idproveedor = $("#idPE").val();
    var codigo = $("#codigoPE").val();
    var nombre = $("#nombrePE").val();
    var direccion = $("#direccionPE").val();
    var telefono = $("#telefonoPE").val();
    var email = $("#emailPE").val();
    var estado = $("#estadoPE").val();
   
    
  
    if (
      idproveedor == "" ||
      nombre == "" ||
      codigo == "" ||
      direccion == "" ||
      telefono == "" ||
      email == "" ||
      estado == ""
    ) 
    {
      alert("Todos los campos son obligatorios");
      return false;
    }
  
    $.ajax({
      type: "POST",
      data:"editar_proveedor=1&idproveedor="+idproveedor+"&nombre="+nombre+"&codigo="+codigo+"&direccion="+direccion+"&telefono="+telefono+"&email="+email+"&estado="+estado, 
      url: 'modules/proveedores/proveedoresController.php',
      dataType: "json",
      success: function (newdata) {
        var nuevoresultado = newdata.resultado;
        if (nuevoresultado === 1) {
          $("#modalEditarP").modal("hide");
          $("body").removeClass("modal-open");
          $(".modal-backdrop").remove();
          swal("¡PROVEEDOR EDITADO EXITOSAMENTE!", "Presione para continuar", "warning");
          cargarContenido('modules/proveedores/listadoProveedores.php');
        } else {
          alert("No se pudo editar el proveedor");
        }
      },
    });
  });

