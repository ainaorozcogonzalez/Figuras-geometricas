<?php
session_start();
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
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="resultado-contenedor">
        <h1>Resultado para el <?= htmlspecialchars($tipoFigura) ?></h1>
        <p><strong>Área:</strong> <?= $area ?> </p>
        <p><strong>Perímetro:</strong> <?= $perimetro ?> </p>
        <br>
        <a href="cerrar_sesion.php" class="btn-volver">Volver al inicio</a>
    </div>
</body>
</html>
