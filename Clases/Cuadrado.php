<?php
    // CLASE CUADRADO QUE HEREDA DE FIGURAGEOMETRICA
        class Cuadrado extends FiguraGeometrica {

            // CONSTRUCTOR
                public function __construct($lado) {
                    parent::__construct("Cuadrado", $lado);
                }

            // CALCULO DEL AREA
                public function calcularArea() {
                    return $this->lado1 * $this->lado1;
                }

            // CALCULO DEL PERIMETRO
                public function calcularPerimetro() {
                    return 4 * $this->lado1;
                }

            // METODO TOSTRING PARA LA DESCRIPCION
                public function __toString() {
                    return "Tipo de figura: $this->tipoFigura, Lado: $this->lado1";
                }

            // DESTRUCTOR
                public function __destruct() {
                }
        }
?>