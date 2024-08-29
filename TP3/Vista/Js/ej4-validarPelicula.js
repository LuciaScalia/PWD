$("#formPelicula").validate({
    rules: {
        anio: {
            required: true,
            minlength: 4,
            maxlength: 4,
            digits: true,
        },
        duracion: {
            required: true,
            maxlength: 3,
            digits: true,
        },
        titulo: {
            required: true
        },
        actores: {
            required: true
        },
        guion: {
            required: true
        },
        produccion: {
            required: true
        },
        nacionalidad: {
            required: true
        },
        genero: {
            required: true
        },
        restriccionEdad: {
            required: true
        },
        sinopsis: {
            required: true
        },
        archivo: {
            required: true,
            extension: "image/jpeg"
        }
    },

    messages: {
        anio: {
            required: "Dato requerido",
            minlength: "Ingrese 4 dígitos",
            maxlength: "Ingrese 4 dígitos",
            digits: "Debe ingresar números"
        },
        duracion: {
            required: "Dato requerido",
            maxlength: "Ingrese hasta 3 dígitos",
            digits: "Debe ingresar números"
        },
        titulo: {
            required: "Dato requerido"
        },
        actores: {
            required: "Dato requerido"
        },
        director: {
            required: "Dato requerido"
        },
        guion: {
            required: "Dato requerido"
        },
        produccion: {
            required: "Dato requerido"
        },
        nacionalidad: {
            required: "Dato requerido"
        },
        genero: {
            required: "Dato requerido"
        },
        restriccionEdad: {
            required: "Dato requerido"
        },
        sinopsis: {
            required: "Dato requerido"
        },
        archivo: {
            required: "Requerido",
            extension: "El archivo debe ser de tipo jpg"
        }
    }
});