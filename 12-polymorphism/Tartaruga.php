<?php
    require_once 'Reptil.php';
    class Tartaruga extends Reptil{
        public function __construct($p, $i, $m, $ce){
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
            $this->setCorEscama($ce);            
        }

        public function locomover(){
            echo "<p>Se movendo lentamente....</p>";
        }
    }
?>