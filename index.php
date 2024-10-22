<?php
    // INICIAMOS LA SESSION 
        session_start();
    // SETEAMOS LA VARIABLE tipoFigura COMO VACIA SI NO ESTA SETEADA
        $tipoFigura = isset($_SESSION['tipoFigura']) ? $_SESSION['tipoFigura'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AÑADIMOS EL CSS DEL INDEX -->
        <link rel="stylesheet" href="./css/styles_index.css">
    <!-- AÑADIMOS EL TITULO DE LA PAGINA -->
        <title>Figuras Geométricas</title>
    <!-- AÑADIMOS EL ICONO DE LA PAGINA -->
        <link rel="icon" href="./images/cuadrado.png" type="image/x-icon">
    <!-- AÑADIMOS LAS VALIDACIONES JS -->
        <script src="validaciones.js" defer></script>
</head>
<body>
    <!-- CREAMOS EL CONTENEDOR PRINCIPAL -->
        <div class="contenedor">
            <!-- AÑADIMOS EL TITULO -->
                <h1>Selecciona una figura geométrica</h1>
            <!-- AÑADIMOS EL FORMULARIO QUE SE ENVIA POR POST Y SE VALIDO POR JS-->
                <form action="formulario.php" method="POST" onsubmit="return validarSeleccionFigura()">
                    <!-- CREAMOS LA CLASE FIGURA -->
                        <div class="figuras">
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL TRIANGULO -->
                                    <input type="radio" id="triangulo" name="tipoFigura" value="Triangulo" <?= $tipoFigura == 'Triangulo' ? 'checked' : '' ?>>
                                <!-- CREAMOS EL LABEL DEL TRIANGULO -->
                                    <label for="triangulo">
                                        <!-- AÑADIMOS LA IMAGEN DEL TRIANGULO -->
                                            <img src="./images/triangulo.png" alt="Triángulo">
                                        <!-- AÑADIMOS UN SALTO -->
                                            <br>
                                        <!-- AÑADIMOS UN SPAN CON LA PALABRA TRIANGULO -->
                                            <span>Triángulo</span>
                                    </label>
                            </div>
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL RECTANGULO -->
                                    <input type="radio" id="rectangulo" name="tipoFigura" value="Rectangulo" <?= $tipoFigura == 'Rectangulo' ? 'checked' : '' ?>>
                                <!-- CREAMOS EL LABEL DEL RECTANGULO -->
                                    <label for="rectangulo">
                                        <!-- AÑADIMOS LA IMAGEN DEL RECTANGULO -->
                                            <img src="./images/rectangulo.png" alt="Rectángulo">
                                        <!-- AÑADIMOS UN SALTO -->
                                            <br>
                                        <!-- AÑADIMOS UN SPAN CON LA PALABRA RECTANGULO -->
                                            <span>Rectángulo</span>
                                    </label>
                            </div>
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL CUADRADO -->
                                    <input type="radio" id="cuadrado" name="tipoFigura" value="Cuadrado" <?= $tipoFigura == 'Cuadrado' ? 'checked' : '' ?>>
                                <!-- CREAMOS EL LABEL DEL CUADRADO -->
                                    <label for="cuadrado">
                                        <!-- AÑADIMOS LA IMAGEN DEL CUADRADO -->
                                            <img src="./images/cuadrado.png" alt="Cuadrado">
                                        <!-- AÑADIMOS UN SALTO -->
                                            <br>
                                        <!-- AÑADIMOS UN SPAN CON LA PALABRA CUADRADO -->
                                            <span>Cuadrado</span>
                                    </label>
                            </div>
                            <div class="figura">
                                <!-- CREAMOS EL INPUT DEL CIRCULO -->
                                    <input type="radio" id="circulo" name="tipoFigura" value="Circulo" <?= $tipoFigura == 'Circulo' ? 'checked' : '' ?>>
                                <!-- CREAMOS EL LABEL DEL CIRCULO -->
                                    <label for="circulo">
                                        <!-- AÑADIMOS LA IMAGEN DEL CRICULO -->
                                            <img src="./images/circulo.png" alt="Círculo">
                                        <!-- AÑADIMOS UN SALTO -->
                                            <br>
                                        <!-- AÑADIMOS UN SPAN CON LA PALABRA CIRCULO -->
                                        <span>Círculo</span>
                                </label>
                            </div>
                        </div>
                    <!-- SALTO -->
                        <br>
                    <!-- BOTON PARA CONTUNUAR A FORMULARIO.PHP -->
                        <button type="submit">Continuar</button>
                </form>
        </div>
</body>
</html>
