//EJERCICIO 3
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
                        message: 'Solo son validas letras'
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
                        message: 'Solo son validas letras'
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

//EJERCICIO 4
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
                        message: 'Solo son validas letras'
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
                        message: 'Solo son validas letras'
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

//EJERCICIO 5
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
                        message: 'Solo son validas letras'
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
                        message: 'Solo son validas letras'
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

//EJERCICIO 6
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
                        message: 'Solo son validas letras'
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
                        message: 'Solo son validas letras'
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
                        message: 'Solo son validas letras'
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