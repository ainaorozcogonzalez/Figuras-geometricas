<?php
// INICIAMOS LA SESIÓN
session_start();

// COMPROBAMOS SI SE HA ENVIADO EL FORMULARIO DESDE INDEX
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // OBTENEMOS EL TIPO DE FIGURA Y LO GUARDAMOS EN LA SESIÓN
    $tipoFigura = $_POST['tipoFigura'] ?? '';
    $_SESSION['tipoFigura'] = $tipoFigura;
} else {
    // SI NO VIENE DE POST, REDIRIGIMOS AL INDEX
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Formulario de Figura</title>
    <!-- Enlace al archivo de validaciones -->
    <script src="validaciones.js" defer></script>
</head>
<body>
    <h1>Introduce los datos para un <?= htmlspecialchars($tipoFigura) ?></h1>

    <!-- FORMULARIO PARA LOS LADOS DEPENDIENDO DE LA FIGURA SELECCIONADA -->
    <form id="figuraForm" action="resultado.php" method="POST">
        <?php if ($tipoFigura == 'Triangulo'): ?>
            <div class="contenedor-lados">
                <div class="lado">
                    <label for="lado1">Lado 1:</label>
                    <input type="text" name="lado1" id="lado1" class="input-pequeno">
                    <img src="./images/triangulo_l1.png" alt="Lado 1" class="imagen-lado">
                </div>
                <div class="lado">
                    <label for="lado2">Lado 2:</label>
                    <input type="text" name="lado2" id="lado2" class="input-pequeno">
                    <img src="./images/triangulo_l2.png" alt="Lado 2" class="imagen-lado">
                </div>
                <div class="lado">
                    <label for="lado3">Lado 3:</label>
                    <input type="text" name="lado3" id="lado3" class="input-pequeno">
                    <img src="./images/triangulo_l3.png" alt="Lado 3" class="imagen-lado">
                </div>
            </div>
        <?php elseif ($tipoFigura == 'Rectangulo'): ?>
            <div class="contenedor-lados">
                <div class="lado">
                    <label for="lado1">Lado 1:</label>
                    <input type="text" name="lado1" id="lado1" class="input-pequeno">
                    <img src="./images/rectangulo_l1.png" alt="Lado 1" class="imagen-lado">
                </div>
                <div class="lado">
                    <label for="lado2">Lado 2:</label>
                    <input type="text" name="lado2" id="lado2" class="input-pequeno">
                    <img src="./images/rectangulo_l2.png" alt="Lado 2" class="imagen-lado">
                </div>
            </div>
        <?php elseif ($tipoFigura == 'Cuadrado'): ?>
            <div class="lado">
                <label for="lado1">Lado:</label>
                <input type="text" name="lado1" id="lado1" class="input-pequeno">
                <img src="./images/cuadrado_l1.png" alt="Lado" class="imagen-lado">
            </div>
        <?php elseif ($tipoFigura == 'Circulo'): ?>
            <div class="lado">
                <label for="radio">Radio:</label>
                <input type="text" name="radio" id="radio" class="input-pequeno">
                <img src="./images/circulo_l1.png" alt="Radio" class="imagen-lado">
            </div>
        <?php endif; ?>

        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
