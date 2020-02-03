<?php
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero{

        public function __construct($p, $i,$m, $cp){
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
            $this->setCorPelo($cp);
        }

        public function emitirSom(){
            echo "<p>:::.Latindo.::::</p>";
        }
        public function enterraOsso(){
            echo "<p>Osso enterrado.</p>";
        }
        public function abanaRabo(){
            echo "<p>Abanou o rabo.</p>";
        }
    }
?>