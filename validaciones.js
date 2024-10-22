document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("figuraForm");

    form.addEventListener("submit", function(event) {
        // Prevenir el envío del formulario si hay errores
        if (!validarFormulario()) {
            event.preventDefault();  // Cancelar el envío del formulario
        }
    });

    function validarFormulario() {
        let esValido = true;
        let inputs = document.querySelectorAll("input[type='text']");

        inputs.forEach(function(input) {
            let valor = input.value.trim();

            // Validamos que el campo no esté vacío
            if (valor === "") {
                alert(`El campo ${input.name} no puede estar vacío.`);
                input.focus();
                esValido = false;
                return false;  // Salimos del bucle si hay un error
            }

            // Validamos que el valor ingresado sea un número mayor que 0
            let numero = parseFloat(valor);
            if (isNaN(numero) || numero <= 0) {
                alert(`El campo ${input.name} debe ser un número mayor que 0.`);
                input.focus();
                esValido = false;
                return false;  // Salimos del bucle si hay un error
            }
        });

        return esValido;
    }
});
