<?php
    // INICIAMOS LA SESSION
        session_start();
    // VERIFICAMOS SI LA SESSION ESTA INICIADA Y SI EL tipoFigura ESTA DEFINIDO
        if (!isset($_SESSION['tipoFigura'])) {
            // SI NO HAY SESSION LO ENVIAMOS A INDEX.PHP
                header('Location: index.php');
            // CERRAMOS EL BUCLE
                exit;
        }

    // OBTENEMOS LOS DATOS DE SESIÓN Y POST
        $tipoFigura = $_SESSION['tipoFigura'];
        $lado1 = isset($_POST['lado1']) ? $_POST['lado1'] : null;
        $lado2 = isset($_POST['lado2']) ? $_POST['lado2'] : null;
        $lado3 = isset($_POST['lado3']) ? $_POST['lado3'] : null;
        $radio = isset($_POST['radio']) ? $_POST['radio'] : null;

    // PRIMERO INCLUIMOS LA CLASE PADRE
        require './Clases/FiguraGeometrica.php';

    // INCLUIMOS LAS CLASES DEPENDIENDO DE LA FIGURA SELECCIONADA
        switch ($tipoFigura) {
            case 'Triangulo':
                require './Clases/Triangulo.php';
                $triangulo = new Triangulo($lado1, $lado2, $lado3);
                $area = $triangulo->calcularArea();
                $perimetro = $triangulo->calcularPerimetro();
                break;
            case 'Rectangulo':
                require './Clases/Rectangulo.php';
                $rectangulo = new Rectangulo($lado1, $lado2);
                $area = $rectangulo->calcularArea();
                $perimetro = $rectangulo->calcularPerimetro();
                break;
            case 'Cuadrado':
                require './Clases/Cuadrado.php';
                $cuadrado = new Cuadrado($lado1);
                $area = $cuadrado->calcularArea();
                $perimetro = $cuadrado->calcularPerimetro();
                break;
            case 'Circulo':
                require './Clases/Circulo.php';
                $circulo = new Circulo($radio);
                $area = $circulo->calcularArea();
                $perimetro = $circulo->calcularPerimetro();
                break;
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AÑADIMOS EL TITULO -->
        <title>Figuras Geométricas</title>
    <!-- AÑADIMOS EL ICONO -->
        <link rel="icon" href="./images/cuadrado.png" type="image/x-icon">
    <!-- AÑADIMOS EL CSS DEL RESULTADO -->
        <link rel="stylesheet" href="./css/styles_resultado.css">
</head>
<body>
    <!-- AÑADIMOS EL CONTENEDOR DEL RESULTADO -->
        <div class="resultado-contenedor">
            <!-- AÑADIMOS EL TITULO -->
                <h1>Resultado para el <?= htmlspecialchars($tipoFigura) ?></h1>
            <!-- AÑADIMOS LOS DATOS -->
                <p><strong>Área:</strong> <?= $area ?> </p>
                <p><strong>Perímetro:</strong> <?= $perimetro ?> </p>
            <br>
            <!-- PONEMOS EL BOTON PARA CERRAR LA SESSION Y VOLVER AL INICIO -->
                <a href="cerrar_sesion.php" class="btn-volver">Volver al inicio</a>
        </div>
</body>
</html>
