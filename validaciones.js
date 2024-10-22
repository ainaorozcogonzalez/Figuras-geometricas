// ESCUCHAR EL EVENTO DOM CONTENT LOADED PARA ASEGURARSE DE QUE EL CONTENIDO DEL DOM ESTÉ CARGADO
    document.addEventListener("DOMContentLoaded", function() {
        // OBTENER TODOS LOS INPUTS DE TEXTO DEL FORMULARIO
            // SELECCIONAR TODOS LOS ELEMENTOS INPUT DE TIPO TEXTO
                const inputs = document.querySelectorAll("input[type='text']"); 
            // OBTENER EL FORMULARIO POR SU ID
                const formulario = document.getElementById("figuraForm"); 

        // AGREGAR EVENTOS 'BLUR' A CADA INPUT PARA VALIDAR CUANDO EL USUARIO SALGA DEL CAMPO
            inputs.forEach(input => {
                input.addEventListener("blur", function() {
                    // LLAMAR A LA FUNCIÓN DE VALIDACIÓN AL SALIR DEL CAMPO
                        validarCampo(this); 
                });
            });

        // EVENTO CUANDO EL USUARIO INTENTA ENVIAR EL FORMULARIO
            formulario.addEventListener("submit", function(event) {
                // INICIALIZAR VARIABLE PARA CONTROLAR SI HAY ERRORES
                    let hayErrores = false; 

                // VALIDAR TODOS LOS CAMPOS DE NUEVO AL ENVIAR EL FORMULARIO
                    inputs.forEach(input => {
                        // SI LA VALIDACIÓN FALLA, MARCAR QUE HAY ERRORES
                            if (!validarCampo(input)) {
                                hayErrores = true; 
                            }
                    });

                // SI HAY ALGÚN ERROR, MOSTRAR SWEETALERT Y EVITAR QUE SE ENVÍE EL FORMULARIO
                    if (hayErrores) {
                        // PREVENIR EL ENVÍO DEL FORMULARIO
                            event.preventDefault(); 
                        // MOSTRAR UN MENSAJE DE ALERTA
                            Swal.fire({ 
                                // TIPO DE ALERTA
                                    icon: 'error', 
                                // TÍTULO DE LA ALERTA
                                    title: 'ERRORES EN EL FORMULARIO', 
                                // MENSAJE DE ERROR
                                    text: 'Por favor, corrija los campos marcados antes de continuar.' 
                            });
                    }
            });

        // FUNCIÓN PARA VALIDAR INDIVIDUALMENTE CADA CAMPO
            function validarCampo(input) {
                // OBTENER EL VALOR DEL CAMPO Y QUITAR ESPACIOS INICIALES Y FINALES
                    const valor = input.value.trim(); 
                // OBTENER EL ELEMENTO DE ERROR RELACIONADO CON EL CAMPO
                    const errorElement = document.getElementById(`error-${input.id}`); 

                // LIMPIAR MENSAJE DE ERROR PREVIO
                    errorElement.textContent = ""; 

                // VALIDAR QUE EL CAMPO NO ESTÉ VACÍO
                    if (valor === "") {
                        // MOSTRAR ERROR Y RETORNAR FALSO SI ESTÁ VACÍO
                            mostrarError(input, "Este campo no puede estar vacío.", errorElement);
                            return false; 
                    }

                // VALIDAR QUE EL VALOR INGRESADO SEA UN NÚMERO MAYOR QUE 0
                    // CONVERTIR EL VALOR A UN NÚMERO DECIMAL
                        const numero = parseFloat(valor); 
                        // VERIFICAR SI NO ES UN NÚMERO O SI ES MENOR O IGUAL A 0
                            if (isNaN(numero) || numero <= 0) { 
                                // MOSTRAR ERROR Y RETORNAR FALSO SI NO ES VÁLIDO
                                    mostrarError(input, "Debe ser un número mayor que 0.", errorElement);
                                    return false; 
                            }

                // SI PASA TODAS LAS VALIDACIONES, LIMPIAR ERRORES VISUALES
                    // LIMPIAR CUALQUIER ERROR PREVIO
                        limpiarError(input); 
                    // RETORNAR VERDADERO SI NO HAY ERRORES
                        return true; 
            }

        // FUNCIÓN PARA MOSTRAR EL ERROR
            function mostrarError(input, mensaje, errorElement) {
                // AÑADIR MENSAJE DE ERROR EN TEXTO
                    errorElement.textContent = mensaje; 
                // ESTABLECER EL COLOR DEL MENSAJE DE ERROR A ROJO
                    errorElement.style.color = 'red'; 
                // AÑADIR CLASE PARA APLICAR ESTILO DE BORDE ROJO AL INPUT
                    input.classList.add("input-error"); 
            }

        // FUNCIÓN PARA LIMPIAR LOS ERRORES VISUALES DEL CAMPO SI ES VÁLIDO
            function limpiarError(input) {
                // QUITAR CLASE DE ERROR PARA EL BORDE ROJO SI EL CAMPO ES VÁLIDO
                    input.classList.remove("input-error"); 
            }
    });
