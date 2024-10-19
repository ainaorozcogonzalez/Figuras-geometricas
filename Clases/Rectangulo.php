<?php
    // CLASE RECTANGULO QUE HEREDA DE FIGURAGEOMETRICA
    class Rectangulo extends FiguraGeometrica {
        public $lado2;

        
        // CONSTRUCTOR
        public function __construct($lado1, $lado2) {
            // LLAMAMOS AL CONSTRUCTOR DE LA CLASE BASE
            parent::__construct("Rectangulo", $lado1);
            $this->lado2 = $lado2;
        }

        // GETTERS Y SETTERS
        public function getLado2() {
            return $this->lado2;
        }

        public function setLado2($lado2) {
            $this->lado2 = $lado2;
        }

        // CALCULO AREA
        public function calcularArea() {
            return $this->lado1 * $this->lado2;
        }

        // CALCULO PERIMETRO
        public function calcularPerimetro() {
            return 2 * ($this->lado1 + $this->lado2);
        }

        // METODO TOSTRING
        public function __toString() {
            return "Tipo de figura: $this->tipoFigura, Lados: $this->lado1, $this->lado2";
        }

        // DESTRUCTOR
        public function __destruct() {
        }
    }
?>