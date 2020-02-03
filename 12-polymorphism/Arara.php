<?php
    require_once 'Ave.php';
    class Arara extends Ave{
        public function __construct($p, $i, $m, $cp){
            $this->setPeso($p);
            $this->setIdade($i);
            $this->setMembros($m);
            $this->setCorPena($cp);            
        }
    }
?>