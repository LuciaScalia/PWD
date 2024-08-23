$("#formUsuario").validate({
    rules: {
        usuario: {
            required: true,
        },
        contra: {
            required: true,
            minlength: 8,
            noIgualarUser: true,
            debeContener: true,
        }
    },
    messages: {
        usuario: {
            required: "Por favor ingrese su usuario",
        },
        contra: {
            required: "Por favor ingrese su contraseña",
            minlength: "La contraseña debe tener al menos 8 caracteres",
            noIgualarUser: "La contraseña no puede sere igual al nombre de usuario",
            debeContener: "La contraseña debe contener letras y números"
        }
    },

    submitHandler: function (form) {
        form.submit();
    }
});

$.validator.addMethod("noIgualarUser", function (valor) {
    return valor !== $("#usuario").val();
}, "La contraseña no puede ser igual al nombre de usuario");
$.validator.addMethod("debeContener", function (valor) {
    return /[a-zA-Z]/.test(valor) && /\d/.test(valor);
}, "La contraseña debe contener letras y números")




















/*function validarContrasenia() {
    var restricciones = /^{8,}$/;
    var esValida;

    esValida = restricciones.test(document.getElementById('contrasenia'));
    if (!esValida) {
        document.getElementById('invalidContra').innerHTML == "La contaseña debe tener al menos 8 caracteres";
    }
}

document.getElementById('acceder').onclick = function (){
    validarContrasenia();
}*/