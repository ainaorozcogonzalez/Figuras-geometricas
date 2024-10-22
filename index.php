<?php
session_start();
$tipoFigura = isset($_SESSION['tipoFigura']) ? $_SESSION['tipoFigura'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Figuras Geométricas</title>
    <!-- Enlace al archivo de validaciones -->
    <script src="validaciones.js" defer></script>
</head>
<body>
    <h1>Selecciona una figura geométrica</h1>
    <form action="formulario.php" method="POST" onsubmit="return validarSeleccionFigura()">
        <div class="figuras">
            <div class="figura">
                <input type="radio" id="triangulo" name="tipoFigura" value="Triangulo" <?= $tipoFigura == 'Triangulo' ? 'checked' : '' ?>>
                <label for="triangulo">
                    <img src="./images/triangulo.png" alt="Triángulo">
                    <br>
                    <span>Triángulo</span>
                </label>
            </div>
            <div class="figura">
                <input type="radio" id="rectangulo" name="tipoFigura" value="Rectangulo" <?= $tipoFigura == 'Rectangulo' ? 'checked' : '' ?>>
                <label for="rectangulo">
                    <img src="./images/rectangulo.png" alt="Rectángulo">
                    <br>
                    <span>Rectángulo</span>
                </label>
            </div>
            <div class="figura">
                <input type="radio" id="cuadrado" name="tipoFigura" value="Cuadrado" <?= $tipoFigura == 'Cuadrado' ? 'checked' : '' ?>>
                <label for="cuadrado">
                    <img src="./images/cuadrado.png" alt="Cuadrado">
                    <br>
                    <span>Cuadrado</span>
                </label>
            </div>
            <div class="figura">
                <input type="radio" id="circulo" name="tipoFigura" value="Circulo" <?= $tipoFigura == 'Circulo' ? 'checked' : '' ?>>
                <label for="circulo">
                    <img src="./images/circulo.png" alt="Círculo">
                    <br>
                    <span>Círculo</span>
                </label>
            </div>
        </div>
        <br>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>
