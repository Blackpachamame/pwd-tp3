//EJERCICIO 3 - TP1
$(document).ready(function () {
    $('#eje3').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de usuario'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: 'Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' La edad es obligatoria'
                    }
                }
            },
            direccion: {
                message: 'Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Se requiere una dirección'
                    }
                }
            }
        },

    });
});

//EJERCICIO 4 - TP1
$(document).ready(function () {
    $('#eje4').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de usuario'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: 'Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' La edad es obligatoria'
                    }
                }
            },
            direccion: {
                message: 'Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Se requiere una dirección'
                    }
                }
            }
        },

    });
});

//EJERCICIO 5 - TP1
$(document).ready(function () {
    $('#eje5').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de usuario'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: 'Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' La edad es obligatoria'
                    }
                }
            },
            direccion: {
                message: 'Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Se requiere una dirección'
                    }
                }
            },
            estudio: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una opción'
                    }
                }
            },
            sexo: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una opción'
                    }
                }
            }
        },

    });
});

//EJERCICIO 6 - TP1
$(document).ready(function () {
    $('#eje6').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de usuario'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: 'Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' La edad es obligatoria'
                    }
                }
            },
            direccion: {
                message: 'Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Se requiere una dirección'
                    }
                }
            },
            estudios: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una opción'
                    }
                }
            },
            sexo: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una opción'
                    }
                }
            }
        },

    });
});

//EJERCICIO 3 - TP2
$(document).ready(function () {
    $('#tp2ej3').bootstrapValidator({
        message: 'Este valor no es valido',

        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: ' El nombre de usuario es requerido'
                    },
                    stringLength: {
                        min: 4,
                        message: ' Debe superar los 4 caracteres'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: ' Completar campo <br>'
                    },
                    regexp: {
                        regexp: /(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]/,
                        message: ' Debe contener letras y números <br>'
                    },
                    stringLength: {
                        min: 8,
                        message: ' Debe tener mínimo 8 caracteres <br>'
                    },
                    different: {
                        field: 'username',
                        message: ' La contraseña no debe ser igual al nombre del usuario'
                    }
                }
            },
        }
    });
});

//EJERCICIO 4 - TP2
$(document).ready(function () {
    $('#eje4tp2').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            titulo: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere un título'
                    }
                }
            },
            actores: {
                validators: {
                    notEmpty: {
                        message: ' Ingresar actores'
                    }
                }
            },
            director: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere el director'
                    }
                }
            },
            guion: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere un guión'
                    }
                }
            },
            produccion: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de producción'
                    }
                }
            },
            year: {
                validators: {
                    notEmpty: {
                        message: ' Año obligatorio'
                    }
                }
            },
            nacion: {
                validators: {
                    notEmpty: {
                        message: ' La nacionalidad es obligatoria'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            minutos: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere duración'
                    }
                }
            },
            edad: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una opción'
                    }
                }
            },
            sinopsis: {
                validators: {
                    notEmpty: {
                        message: ' Debe añadir una descripción'
                    }
                }
            }
        },
    });
});

//EJERCICIO 1 - TP3
$(document).ready(function () {
    $('#tp3eje1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            archivo: {
                validators: {
                    notEmpty: {
                        message: ' Envie un archivo'
                    },
                    file: {
                        maxSize: 1024 * 1024 * 2,
                        extension: 'doc, pdf',
                        type: 'application/pdf, application/msword',
                        message: ' Solo pdf o doc'
                    }
                }
            }
        },
    });
});

//EJERCICIO 2 - TP3
$(document).ready(function () {
    $('#tp3eje2').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            archivo: {
                validators: {
                    notEmpty: {
                        message: ' envie un archivo'
                    },
                    file: {
                        maxSize: 1024 * 1024 * 2,
                        extension: 'txt',
                        type: 'txt',
                        message: ' Solo txt'
                    }
                }
            }
        },
    });
});

//EJERCICIO 3 - TP3
$(document).ready(function () {
    $('#tp3eje3').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            titulo: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere un título'
                    }
                }
            },
            actores: {
                validators: {
                    notEmpty: {
                        message: ' Ingresar actores'
                    }
                }
            },
            director: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere el director'
                    }
                }
            },
            imagen: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una imagen'
                    },
                    file: {
                        maxSize: 683 * 1024,
                        message: ' Excede el tamaño máximo'
                    }
                },
                custom: {
                    fileheight: function ($el) {
                        if ($el[0].files[0].height / ($el[0].files[0].width) > 1.5) {
                            return "Debe ser una relación de aspecto de 2/3"
                        }
                    }
                }
            },
            guion: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere un guión'
                    }
                }
            },
            produccion: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de producción'
                    }
                }
            },
            year: {
                validators: {
                    notEmpty: {
                        message: ' Año obligatorio'
                    }
                }
            },
            nacion: {
                validators: {
                    notEmpty: {
                        message: ' La nacionalidad es obligatoria'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            minutos: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere duración'
                    }
                }
            },
            edad: {
                validators: {
                    notEmpty: {
                        message: ' Se requiere seleccionar una opción'
                    }
                }
            },
            sinopsis: {
                validators: {
                    notEmpty: {
                        message: ' Debe añadir una descripción'
                    }
                }
            }
        },
    });
});

//EJERCICIO 2 - TP4
$(document).ready(function () {
    $('#tp4_eje2').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: ' Debe ser con este formato: LLL NNN.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 4 - TP4
$(document).ready(function () {
    $('#tp4_eje4').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Se requiere el nombre de usuario'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            Apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            NroDni: {
                message: 'Dni no valido',
                validators: {
                    notEmpty: {
                        message: ' El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: ' Debe ingresar 8 dígitos.'
                    }
                }
            },
            Domicilio: {
                message: 'Domicilio invalido',
                validators: {
                    notEmpty: {
                        message: ' Se requiere un domicilio'
                    }
                }
            },
            fechaNac: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una fecha'
                    }
                }
            },
            Telefono: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese nro de teléfono'
                    }
                }
            }
        },
    });
});

//EJERCICIO 5 - TP4
$(document).ready(function () {
    $('#tp4_eje5').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Patente: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: ' Formato: LLL NNN.'
                    }
                }
            },
            Marca: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una marca'
                    }
                }
            },
            Duenio: {
                message: 'Dni no valido',
                validators: {
                    notEmpty: {
                        message: ' El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: ' Debe ingresar 8 dígitos.'
                    }
                }
            },
            Modelo: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese un modelo'
                    }
                }
            }
        },
    });
});

//EJERCICIO 6 - TP4
$(document).ready(function () {
    $('#tp4_eje6').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: ' Formato: LLL NNN.'
                    }
                }
            },
            Duenio: {
                message: 'Dni no valido',
                validators: {
                    notEmpty: {
                        message: ' El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: ' Debe ingresar 8 dígitos.'
                    }
                }
            },
            Dnicambio: {
                message: 'Dni no valido',
                validators: {
                    notEmpty: {
                        message: ' El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: ' Debe ingresar 8 dígitos.'
                    },
                    different: {
                        field: 'Duenio',
                        message: ' Debe ser distinto al dni del dueño'
                    }
                }
            }
        },
    });
});

//EJERCICIO 7 - TP4
$(document).ready(function () {
    $('#tp4_eje7').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            NroDni: {
                validators: {
                    notEmpty: {
                        message: ' El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: ' Debe ingresar 8 dígitos.'
                    }
                }
            }
        },
    });
});