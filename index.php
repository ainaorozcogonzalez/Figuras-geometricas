<?php
    // INICIAMOS LA SESIÓN
        session_start();
    // REMOVEMOS LA VARIABLE tipoFigura PARA EVITAR QUE SE PREDETERMINE UNA FIGURA
        $tipoFigura = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AÑADIMOS EL CSS DEL INDEX -->
        <link rel="stylesheet" href="./css/styles_index.css">
    <!-- AÑADIMOS EL TÍTULO DE LA PÁGINA -->
        <title>Figuras Geométricas</title>
    <!-- AÑADIMOS EL ÍCONO DE LA PÁGINA -->
        <link rel="icon" href="./images/cuadrado.png" type="image/x-icon">
    <!-- AÑADIMOS LAS VALIDACIONES JS -->
        <script src="./Js/validacion_index.js" defer></script>
</head>
<body>
    <!-- CREAMOS EL CONTENEDOR PRINCIPAL -->
        <div class="contenedor">
            <!-- AÑADIMOS EL TÍTULO -->
                <h1>Selecciona una figura geométrica</h1>
            <!-- AÑADIMOS EL FORMULARIO QUE SE ENVÍA POR POST Y SE VALIDA POR JS -->
                <form id="figuraForm" action="formulario.php" method="POST" onsubmit="return validarSeleccionFigura()">
                    <!-- CREAMOS LA CLASE FIGURA -->
                        <div class="figuras">
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL TRIÁNGULO (SIN SELECCIÓN PREDETERMINADA) -->
                                    <input type="radio" id="triangulo" name="tipoFigura" value="Triangulo">
                                <!-- CREAMOS EL LABEL DEL TRIÁNGULO -->
                                    <label for="triangulo">
                                    <!-- AÑADIMOS LA IMAGEN DEL TRIÁNGULO -->
                                        <img src="./images/triangulo.png" alt="Triángulo">
                                    <br>
                                    <!-- AÑADIMOS UN SPAN CON LA PALABRA TRIÁNGULO -->
                                        <span>Triángulo</span>
                                    </label>
                            </div>
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL RECTÁNGULO (SIN SELECCIÓN PREDETERMINADA) -->
                                    <input type="radio" id="rectangulo" name="tipoFigura" value="Rectangulo">
                                <!-- CREAMOS EL LABEL DEL RECTÁNGULO -->
                                    <label for="rectangulo">
                                        <img src="./images/rectangulo.png" alt="Rectángulo">
                                        <br>
                                        <span>Rectángulo</span>
                                    </label>
                            </div>
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL CUADRADO (SIN SELECCIÓN PREDETERMINADA) -->
                                    <input type="radio" id="cuadrado" name="tipoFigura" value="Cuadrado">
                                    <label for="cuadrado">
                                        <img src="./images/cuadrado.png" alt="Cuadrado">
                                        <br>
                                        <span>Cuadrado</span>
                                    </label>
                            </div>
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL CÍRCULO (SIN SELECCIÓN PREDETERMINADA) -->
                                    <input type="radio" id="circulo" name="tipoFigura" value="Circulo">
                                    <label for="circulo">
                                        <img src="./images/circulo.png" alt="Círculo">
                                        <br>
                                        <span>Círculo</span>
                                    </label>
                            </div>
                        </div>
                    <!-- SALTO -->
                        <br>
                    <!-- QUE SALGA EL ERROR -->
                        <div id="error-figuras"></div>
                    <!-- BOTÓN PARA CONTINUAR A formulario.php -->
                        <button type="submit">Continuar</button>
                </form>
        </div>
</body>
</html>
