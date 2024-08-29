var reglas = {
    required: true,
    number: true
}
var mensajes = {
required: "Dato requerido",
number: "Ingrese un valor numérico"
}

$("#formOperacion").validate({
rules: {
    num1: reglas,
    num2: reglas
},
messages: {
    num1: mensajes,
    num2: mensajes
}
}); 