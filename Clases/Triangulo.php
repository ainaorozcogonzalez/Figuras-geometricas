<?php
    // CLASE TRIANGULO QUE HEREDA DE FIGURAGEOMETRICA
    class Triangulo extends FiguraGeometrica {
        public $lado2;
        public $lado3;

        // CONSTRUCTOR
        public function __construct($lado1, $lado2, $lado3) {
            // LLAMAMOS AL CONSTRUCTOR DE LA CLASE BASE
            parent::__construct("Triangulo", $lado1);
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }

        // GETTERS Y SETTERS
        public function getLado2() {
            return $this->lado2;
        }

        public function setLado2($lado2) {
            $this->lado2 = $lado2;
        }

        public function getLado3() {
            return $this->lado3;
        }

        public function setLado3($lado3) {
            $this->lado3 = $lado3;
        }

        // CALCULO DEL AREA
        public function calcularArea() {
            $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
            return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado2));
        }

        // CALCULO DEL PERIMETRO
        public function calcularPerimetro() {
            return $this->lado1 + $this->lado2 + $this->lado3;
        }

        // METODO TOSTRING PARA LA DESCRIPCION
        public function __toString() {
            return "Tipo figura: $this->tipoFigura, Lados: $this->lado1, $this->lado2, $this->lado3";
        }

        // DESTRUCTOR
        public function __destruct() {
        }
    }
?>