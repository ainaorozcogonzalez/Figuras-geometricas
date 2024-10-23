// ESCUCHAR EL EVENTO 'DOMContentLoaded' PARA ASEGURARSE DE QUE EL DOM ESTÉ COMPLETAMENTE CARGADO ANTES DE EJECUTAR EL CÓDIGO.
    document.addEventListener("DOMContentLoaded", function() {
        
        // SELECCIONAMOS TODOS LOS INPUTS DE TIPO 'RADIO' QUE REPRESENTAN LAS FIGURAS GEOMÉTRICAS (TRIÁNGULO, CUADRADO, ETC.).
            const figuras = document.querySelectorAll("input[name='tipoFigura']");
        
        // OBTENEMOS LA REFERENCIA AL FORMULARIO USANDO SU ID PARA AGREGAR VALIDACIONES.
            const formulario = document.getElementById("figuraForm");

        // AGREGAMOS UN EVENTO 'SUBMIT' AL FORMULARIO PARA CAPTURAR CUANDO EL USUARIO INTENTE ENVIARLO.
            formulario.addEventListener("submit", function(event) {
                
                // VALIDAMOS SI SE HA SELECCIONADO UNA FIGURA GEOMÉTRICA ANTES DE ENVIAR EL FORMULARIO.
                // SI NO SE HA SELECCIONADO, EVITAMOS EL ENVÍO DEL FORMULARIO Y MOSTRAMOS UN MENSAJE DE ERROR.
                    if (!validarSeleccionFigura()) {
                        // EVITAMOS QUE EL FORMULARIO SE ENVÍE SI NO SE CUMPLE LA VALIDACIÓN.
                            event.preventDefault();
                        
                        // MOSTRAMOS EL MENSAJE DE ERROR INDICANDO QUE SE DEBE SELECCIONAR UNA FIGURA.
                            mostrarErrorFigura("Debe seleccionar una figura geométrica.");
                    }
            });

        // FUNCIÓN QUE SE ENCARGA DE VALIDAR SI EL USUARIO HA SELECCIONADO UNA FIGURA GEOMÉTRICA.
            function validarSeleccionFigura() {
                let figuraSeleccionada = false; // VARIABLE PARA VERIFICAR SI HAY UNA SELECCIÓN.

                // RECORREMOS TODOS LOS INPUTS DE TIPO 'RADIO' PARA COMPROBAR SI ALGUNO ESTÁ MARCADO COMO SELECCIONADO.
                    figuras.forEach(figura => {
                        // SI UNO DE LOS RADIOS ESTÁ SELECCIONADO
                            if (figura.checked) { 
                                // MARCAMOS QUE SE HA SELECCIONADO UNA FIGURA.
                                    figuraSeleccionada = true; 
                            }
                    });

                // RETORNAMOS TRUE SI ALGUNA FIGURA FUE SELECCIONADA, DE LO CONTRARIO FALSE.
                    return figuraSeleccionada;
            }

        // FUNCIÓN PARA MOSTRAR UN MENSAJE DE ERROR EN CASO DE QUE NO SE HAYA SELECCIONADO UNA FIGURA.
            function mostrarErrorFigura(mensaje) {
                // OBTENEMOS EL CONTENEDOR DONDE SE MOSTRARÁ EL MENSAJE DE ERROR.
                    const errorFiguras = document.getElementById("error-figuras");

                // ESTABLECEMOS EL TEXTO DEL MENSAJE DE ERROR.
                    errorFiguras.textContent = mensaje;

                // CAMBIAMOS EL COLOR DEL TEXTO A ROJO PARA QUE EL ERROR SEA MÁS VISIBLE.
                    errorFiguras.style.color = 'red';
            }
    });
