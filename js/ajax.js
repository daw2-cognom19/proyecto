$(document).ready(function() {
    llamarContacto();
    detectPage();
    $("#login").click(logIn); 
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

function detectPage() {
    $.ajax({
        url: "rest/transeuntes.php",
        type: "POST",
        beforeSend: function(){
        },
        success: function(response) {
        }
    });
}

function logIn(){
    var username = $("#username").val();
    var password = $("#password").val();

    if(username.length == "" || password.length == ""){
        $("#message").html("Por favor llena los campos").fadeIn();
        $("#message").addClass("error");
        return false;
    }
    else{
        var dataString = 'username='+username+'&password='+password;
        $.ajax({
          type : 'POST',
          url  : 'rest/login.php',
          data : dataString,
          success : function(data){
              console.log(data);
           }
          });
    }
}