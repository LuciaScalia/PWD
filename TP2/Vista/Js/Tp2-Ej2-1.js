$("#form").validate({
    rules: {
        numero: {
            required: true,
            number: true
        }
    },
    messages: {
        numero: {
            required: "Ingrese un número",
            number: "Debe ingresar un valor numérico"
        }
            
    }
});