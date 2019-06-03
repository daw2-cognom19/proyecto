$(document).ready(function() {
    llamarContacto();
    logIn();
    detectPage();
});

function llamarContacto() {
    $('#contact_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                        stringLength: {
                        min: 3,
                        message: 'Por favor introduce tu nombre'
                    },
                        notEmpty: {
                        message: 'Por favor introduce tu nombre'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu email'
                    },
                    emailAddress: {
                        message: 'Por favor introduce un email veridico'
                    }
                }
            },
            textarea: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Por favor introduce mas de 10 caracteres pero sin superar 200'
                    },
                    notEmpty: {
                        message: 'Por favor introduce una descripcion'
                    }
                    }
                }
            }
        }).on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow")
                $('#contact_form').data('bootstrapValidator').resetForm();
            e.preventDefault();
            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');
            $.post('rest/contacto.php',$form.serialize(), function(result) {
            }, 'json');
        });    
}

function logIn() {
    $('#login').click(function(){
        var user = $('#user').val();
        var pass = $('#pass').val();
        if (!!user && !!pass) {
            $.ajax({
                url: "login.php",
                method: "POST",
                data:{
                    user:user,
                    pass:pass
                },
                cache: "false",
                beforeSend: function() {
                    $("#result").html("Conectando...");
                },
                success:function(data) {
                    $('#login').val("Login");
                    if (data=="1") {
                        $(location).attr('href','index.php');
                    } 
                    else {
                        $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
                    }
                }
            });
        }
    });    
}

function detectPage() {
    alert('j');
    $.ajax({
        url: "rest/transeuntes.php",
        type: "POST",
        beforeSend: function(){
            console.log('enviando datos');
        },
        success: function(response) {
            console.log(response);
        }
    });
}