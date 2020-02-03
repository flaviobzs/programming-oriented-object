<?php
    require_once 'Peixe.php';
    class Goldfish extends Peixe{
        public function __construct($p, $i, $m, $ce){
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
            $this->setCorEscama($ce);            
        }
    }
?>