$("#formDatos").validate({
    rules: {
        nombre: {
            required: true
        },
        apellido: {
            required: true
        },
        edad: {
            required: true,
            min: 0,
            max: 120,
            number: true
        },
        direccion: {
            required: true,
            debeContener: true
        },
        estudios: {
            required: true
        },
        sexo: {
            required: true
        },
        deporte: {
            required: true
        }
    },
    messages: {
        nombre: {
            required: "Dato requerido"
        },
        apellido: {
            required: "Dato requerido"
        },
        edad: {
            required: "Dato requerido",
            min: "Ingrese una edad entre 0 y 120",
            max: "Ingrese una edad entre 0 y 120",
            number: "Debe ingresar un valor numérico"
        },
        direccion: {
            required: "Dato requerido",
            debeContener: "La direccion debe contener su altura"
        },
        estudios: {
            required: "Dato requerido"
        },
        sexo: {
            required: "Dato requerido"
        },
        deporte: {
            required: "Dato requerido"
        }
    }
});

$.validator.addMethod("debeContener", function (valor) {
    return /(?=.*\d)/.test(valor);
}, )