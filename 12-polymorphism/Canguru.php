<?php
    require_once 'Mamifero.php';
    class Canguru extends Mamifero{
        
        public function Canguru($p, $i,$m, $cp){
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
            $this->setCorPelo($cp);
        }

        public function usarBolsa(){
            echo "<p>Usando a bolsa.</p>";
        }
        public function locomover(){
            echo "<p>:::.SALTANDO.:::</p>";
        }
    }
?>