<?php
    require_once 'Animal.php';
    class Mamifero extends Animal{
        private $corPelo;

        public function getCorPelo(){
            return $this->corPelo;
        }
        public function setCorPelo($cp){
            $this->corPelo = $cp;
        }

        public function locomover(){
            echo "<p>:::.CORRENDO.:::</p>";
        }
        public function alimentar(){
            echo "<p>:::.MAMANDO.:::</p>";
        }
        public function emitirSom(){
            echo "<p>:::.SOM DE MAMÍFERO.:::</p>";
        }
    }
?>