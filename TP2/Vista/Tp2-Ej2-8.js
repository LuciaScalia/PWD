$("#formEntrada").validate({
    rules: {
        esEstudiante: {
            required: true
        },
        edad: {
            required: true,
            number: true,
            min: 0,
            max: 120
        }
    },
    messages: {
        esEstudiante: {
            required: "Dato requerido"
        },
        edad: {
            required: "Dato requerido",
            number: "Ingrese un valor numérico",
            min: "Ingrese una edad entre 0 y 120",
            max: "Ingrese una edad entre 0 y 120"
        }
    }
});