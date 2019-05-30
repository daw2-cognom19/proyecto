$(document).ready(function(){
    var id = $('#Hid').val();
    var nombre = $('#Hnombre').val();
    var apellido = $('#Hapellido').val();
    var sapellido = $('#Hsapellido').val();
    var dni = $('#Hdni').val();
    var telefono = $('#Htelefono').val();
    var piso = $('#Hpiso').val();
    var habitacion = $('#habitacion').val();
    var administrador = $('#Hadministrador').val();

    if(username && password){
        $('#RegistrarClienteModal').modal('toggle');    
        $('#RegistrarClienteModal').modal('show');

        $('#Nombre').val(nombre);
        $('#Apellido').val(apellido);
        $('#sApellido').val(sapellido);
        $('#DNI').val(dni);
        $('#Telefono').val(telefono);
        $('#Piso').val(piso);
        $('#Habitacion').val(habitacion);
        $('#Administrador').val(administrador);

        $('.Actualizar').removeClass('nover');
        $('.Registrar').addClass('nover');
    }
    $('#Registrar').click(registroUser);
    $('.Actualizar').click(updateUser);
});

function registroUser() {
    var nombre = $('#Nombre').val();
    var apellido = $('#Apellido').val();
    var sapellido = $('#sApellido').val();
    var dni = $('#DNI').val();
    var telefono = $('#Telefono').val();
    var piso = $('#Piso').val();
    var habitacion = $('#Habitacion').val();
    var administrador = $('#Administrador').val();
    var parametros = {
        "nombre" : nombre,
        "apellido" : apellido,
        "sapellido" : sapellido,
        "dni" : dni,
        "telefono" : telefono,
        "piso" : piso,
        "habitacion" : habitacion,
        "administrador" : administrador
    };
    $.ajax({
        type: "POST",
        url: 'actions/registrarUsuarios.php',
        data: parametros,
        success: function(response) {
            console.log(response);
            $('.Contenido').load("actions/tablaUsuarios.php");
        }
    });
}

function updateUser() {
    var id = $('#Hid').val();
    var nombre = $('#Nombre').val();
    var apellido = $('#Apellido').val();
    var sapellido = $('#sApellido').val();
    var dni = $('#DNI').val();
    var telefono = $('#Telefono').val();
    var piso = $('#Piso').val();
    var habitacion = $('#Habitacion').val();
    var administrador = $('#Administrador').val();
    var parametros = {
        "nombre" : nombre,
        "apellido" : apellido,
        "sapellido" : sapellido,
        "dni" : dni,
        "telefono" : telefono,
        "piso" : piso,
        "habitacion" : habitacion,
        "administrador" : administrador
    };
    $.ajax({
        type: 'POST',
        url: 'actions/actualizarUsuarios.php',
        data: parametros,
        success: function(res) {
            if (res == "1" || res != "1") {
                $('.Contenido').load("actions/tablaUsuarios.php");
            }
        }
    });
}      

