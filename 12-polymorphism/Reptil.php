<?php
    require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;

        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($ce){
            $this->corEscama = $ce;
        }

        public function locomover(){
            echo "<p>:::.RASTEJANDO.:::</p>";
        }
        public function alimentar(){
            echo "<p>:::.COMENDO COMIDA DE RÉPTIL.:::</p>";
        }
        public function emitirSom(){
            echo "<p>:::.SOM DE RÉPTIL.:::</p>";
        }
        
    }
?>