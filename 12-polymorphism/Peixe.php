<?php
    require_once 'Animal.php';
    class Peixe extends Animal{
        private $corEscama;
        
        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($ce){
            $this->corEscama = $ce;
        }

        public function soltarBolha(){
            echo "<p>::::::BOLHAS::::::</p>";
        }

        public function locomover(){
            echo "<p>:::.NADANDO.:::</p>";
        }
        public function alimentar(){
            echo "<p>:::.COMENDO SUBSTÂNCIAS.:::</p>";
        }
        public function emitirSom(){
            echo "<p>:::.PEIXE NÃO FAZ SOM.:::</p>";
        }
    }
?>