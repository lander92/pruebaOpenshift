
//arrancar carrousel
$( document ).ready(function() {
	$('.carousel').carousel({
		interval: 4000
	});
	
	$(document).ready(function(){
		$("li a").hover(function(){
			$(this).css("background-color","red");
		},function(){
		 $(this).css("background-color","#222222");
		});
	});
});



$(document).ready(function() {
    $('#formulario').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            dni: {
                message: 'El Dni no es valido',
                validators: {
                    notEmpty: {
                        message: 'Dni Obligatorio'
                    },
                    stringLength: {
                        min: 9,
                        max: 9,
                        message: 'El dni tiene que tener 9 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'El dni solo puede contener numeros y letra'
                    }
                }
            },
            nombre: {
                message: 'El Nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Nombre Obligatorio'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'El dni solo puede contener letras'
                    }
                }
            },
            apellidos: {
                message: 'El Apellido no es valido',
                validators: {
                    notEmpty: {
                        message: 'Apellido Obligatorio'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'El dni solo puede contener letras'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password Obligatorio'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Minimo 6 caracteres'
                    }
                }
            },
            localidad: {
                message: 'La localidad no es valida',
                validators: {
                    notEmpty: {
                        message: 'Localidad Obligatoria'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'El dni solo puede contener letras'
                    }
                }
            },
            telefono: {
                message: 'El telefono no es valido',
                validators: {
                    notEmpty: {
                        message: 'Telefono Obligatorio'
                    },
                    stringLength: {
                        min: 9,
                        max: 9,
                        message: 'El telefono tiene que tener 9 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'El telefono solo puede contener numeros'
                    }
                }
            },
            dni_paciente: {
                message: 'El Dni no es valido',
                validators: {
                    notEmpty: {
                        message: 'Dni Obligatorio'
                    },
                    stringLength: {
                        min: 9,
                        max: 9,
                        message: 'El dni tiene que tener 9 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'El dni solo puede contener numeros y letra'
                    }
                }
            },
            tipoPersona: {
                validators: {
                    notEmpty: {
                        message: 'Se requiere tipo de persona'
                    }
                }
            }
        }
    });
});

$(document).ready(function(){
	$("a:contains('Darse de baja')").on("click",function(){
		var baja=confirm ("¿Desea cancelar la subscripcion?");
		if(baja){
			location.href = "baja2.php";
		}
	});
});
