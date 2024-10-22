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
    <!-- AÑADIMOS EL CSS DEL FORMULARIO -->
        <link rel="stylesheet" href="./css/styles_formulario.css">
    <!-- AÑADIMOS EL TITULO -->
        <title>Figuras Geométricas</title>
    <!-- AÑADIMOS LA IMAGEN DEL ICONO -->
        <link rel="icon" href="./images/cuadrado.png" type="image/x-icon">
    <!-- AÑADIMOS LAS VALIDACIONES JS -->
        <script src="validaciones.js" defer></script>
     <!-- PONEMOS LA LIBRERIA DEL SWEETALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- INICIAMOS EL FORMULARIO QUE VA A IR A RESULTADO.PHP -->
        <form id="figuraForm" action="resultado.php" method="POST">
            <!-- AÑADIMOS EL TITULO -->
                <h1>Introduce los datos para un <?= htmlspecialchars($tipoFigura) ?></h1>
            <!-- SALTO -->
                <br>
            <!-- CREAMOS UN FORMULARIO PARA QUE MIRE QUE HA SELECCIONADO EL USUARIO -->
                <!-- SI HA SELECCIONADO EL TRIANGULO ENTRA POR AQUI -->
                    <?php if ($tipoFigura == 'Triangulo'): ?>
                        <!-- CONTENEDOR DE LOS LADOS -->
                            <div class="contenedor-lados">
                                <!-- ESTABLECEMOS LA CLASE LADO -->
                                    <div class="lado">
                                        <!-- AÑADIMOS EL TEXTO DEL LADO 1 -->
                                            <label for="lado1">Lado 1:</label>
                                        <!-- AÑADIMOS EL INPUT PARA QUE EL USUARIO PUEDA ESCRIBIR -->
                                            <input type="text" name="lado1" id="lado1" class="input-pequeno">
                                        <!-- PONEMOS EL SPAN POR SI HAY ALGUN ERROR -->
                                            <span class="error-message" id="error-lado1"></span>
                                        <!-- AÑADIMOS LA IMAGEN DEL LADO -->
                                            <img src="./images/triangulo_l1.png" alt="Lado 1" class="imagen-lado">
                                    </div>
                                    <div class="lado">
                                        <label for="lado2">Lado 2:</label>
                                        <input type="text" name="lado2" id="lado2" class="input-pequeno">
                                        <span class="error-message" id="error-lado2"></span>
                                        <img src="./images/triangulo_l2.png" alt="Lado 2" class="imagen-lado">
                                    </div>
                                    <div class="lado">
                                        <label for="lado3">Lado 3:</label>
                                        <input type="text" name="lado3" id="lado3" class="input-pequeno">
                                        <span class="error-message" id="error-lado3"></span>
                                        <img src="./images/triangulo_l3.png" alt="Lado 3" class="imagen-lado">
                                    </div>
                            </div>
                <?php elseif ($tipoFigura == 'Rectangulo'): ?>
                    <div class="contenedor-lados">
                        <div class="lado">
                            <label for="lado1">Lado 1:</label>
                            <input type="text" name="lado1" id="lado1" class="input-pequeno">
                            <span class="error-message" id="error-lado1"></span>
                            <img src="./images/rectangulo_l1.png" alt="Lado 1" class="imagen-lado">
                        </div>
                        <div class="lado">
                            <label for="lado2">Lado 2:</label>
                            <input type="text" name="lado2" id="lado2" class="input-pequeno">
                            <span class="error-message" id="error-lado2"></span>
                            <img src="./images/rectangulo_l2.png" alt="Lado 2" class="imagen-lado">
                        </div>
                    </div>
                <?php elseif ($tipoFigura == 'Cuadrado'): ?>
                    <div class="lado">
                        <label for="lado1">Lado:</label>
                        <input type="text" name="lado1" id="lado1" class="input-pequeno">
                        <span class="error-message" id="error-lado1"></span>
                        <img src="./images/cuadrado_l1.png" alt="Lado" class="imagen-lado">
                    </div>
                <?php elseif ($tipoFigura == 'Circulo'): ?>
                    <div class="lado">
                        <label for="radio">Radio:</label>
                        <input type="text" name="radio" id="radio" class="input-pequeno">
                        <span class="error-message" id="error-radio"></span>
                        <img src="./images/circulo_l1.png" alt="Radio" class="imagen-lado">
                    </div>
                <?php endif; ?>

            <br><br>
            <!-- BOTON PARA CALCULAR EL AREA Y EL PERIMETRO -->
                <button type="submit">Calcular</button>
        </form>
</body>
</html>
