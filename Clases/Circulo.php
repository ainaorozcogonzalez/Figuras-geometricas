<?php
    // CLASE CIRCULO QUE HEREDA DE FIGURAGEOMETRICA
        class Circulo extends Figurageometrica {

            // CONSTRUCTOR
                public function __construct($lado1) {
                    parent::__construct("Circulo", $lado1);
                }

            // METODO PARA CALCULAR EL AREA DEL CIRCULO
                public function calcularArea() {
                    return pi() * pow($this->lado1, 2);
                }

            // METODO PARA CALCULAR EL PERIMETRO DEL CIRCULO
                public function calcularPerimetro() {
                    return 2 * pi() * $this->lado1;
                }

            // METODO TOSTRING PARA LA DESCRIPCION
                public function __toString() {
                    return "Tipo de figura; $this->tipoFigura, Radio: $this->lado1";
                }

            // DESTRUCTOR
                public function __destruct() {
                }
        }
        
?>