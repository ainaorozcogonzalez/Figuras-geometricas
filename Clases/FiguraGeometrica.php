<?php

    // CLASE PARA TODAS LAS FIGURAS GEOMÉTICAS
        class FiguraGeometrica {
            public $tipofigura;
            public $lado1;

            // CONSTRUCTOR PARA INICIALIZAR LOS ATRIBUTOS
                public function __construct($tipofigura, $lado1) {
                    $this->tipofigura = $tipofigura;
                    $this->lado1 = $lado1;
                }

            // GETERS Y SETTERS
                public function getTipofigura() {
                    return $this->tipofigura;
                }

                public function setTipofigura($tipofigura) {
                    $this->tipofigura = $tipofigura;
                }

                public function getLado1() {
                    return $this->lado1;
                }

                public function setLado1($lado1) {
                    $this->lado1 = $lado1;
                }

            // METODO PARA CALCULAR EL AREA
                public function calcularArea() {
                    echo "Este método debe ser sobreescrito por las subclases";
                }

            // DESTRUCTOR
                public function __destruct() {

                }
        }
?>