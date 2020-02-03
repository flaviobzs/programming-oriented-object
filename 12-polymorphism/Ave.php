<?php
    require_once 'Animal.php';
    class Ave extends Animal{
        private $corPena;

        public function getCorPena(){
            return $this->corPena;
        }
        public function setCorPena($cp){
            $this->corPena = $cp;
        }

        public function fazerNinho(){
            echo "<p>:::::NINHO::::::</p>";
        }

        public function locomover(){
            echo "<p>:::.VOANDO.:::</p>";
        }
        public function alimentar(){
            echo "<p>:::.COMENDO FRUTAS.:::</p>";
        }
        public function emitirSom(){
            echo "<p>:::.CANTO DE AVE.:::</p>";
        }
    }
?>