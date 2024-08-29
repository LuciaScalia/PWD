var reglas = {
    required: true,
    min: 0,
    max: 6,
    number: true
}
var mensajes = {
    required: "Ingrese una hora",
    min: "Ingrese un número del 0 a 6",
    max: "Límite de horas de 0 a 6",
    number: "Ingrese un valor numérico"
}

$("#formHorarios").validate({
    rules: {
        lunes: reglas,
        martes: reglas,
        miercoles: reglas,
        jueves: reglas,
        viernes: reglas,
    },
    messages: {
        lunes: mensajes,
        martes: mensajes,
        miercoles: mensajes,
        jueves: mensajes,
        viernes: mensajes,
    }
});