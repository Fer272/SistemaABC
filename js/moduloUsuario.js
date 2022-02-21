$('#btnAgregarUsuario').on("click", function(){
    
    var rol = $('#rolU').val();
    var nombre = $('#nombreU').val();
    var email = $('#emailU').val();
    var usuario = $('#usuarioU').val();
    var contrasena = $('#contrasenaU').val();
    var telefono = $('#telefonoU').val();

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
    if (usuario == ""){
        alert('El campo usuario es obligatorio');
        //Detiene la ejecución del programa
        return false;
    }
    
    if (contrasena == ""){
        alert('El campo contraseña es obligatorio');
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
        data: "crear_usuario=1&rol="+rol+"&nombre="+nombre+"&email="+email+"&usuario="+usuario+"&contrasena="+contrasena+"&telefono="+telefono,
        url: 'modules/usuarios/usuariosController.php',
        dataType: 'json',
        success: function(data){
            var resultado = data.resultado;
            if(resultado === 1){
                $('#staticBackdrop').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                swal("¡USUARIO CREADO EXITOSAMENTE!", "Presione para continuar", "success");
                cargarContenido('modules/usuarios/listadoUsuarios.php');
            }
            else{
                alert('No se pudo crear el usuario');
            }
        }
    });
});
