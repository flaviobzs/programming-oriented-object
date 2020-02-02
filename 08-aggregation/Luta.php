<?php
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        private function getDesafiado(){
            return $this->desafiado;
        }
        private function getDesafiante(){
            return $this->desafiante;
        }
        private function getRounds(){
            return $this->rounds;
        }
        private function getAprovada(){
            return $this->aprovada;
        }

        private function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        private function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        private function setRounds($rounds){
            $this->rounds = $rounds;
        }
        private function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }

        public function marcarLuta(Lutador $l1, Lutador $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function lutar(){
            if($this->getAprovada()){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                
                switch($vencedor){
                    case 0://Empatar
                        echo "<p><strong>EMPATOU!!!</strong></p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    case 1: //Desafiado ganhou
                        echo "<p><strong>".$this->desafiado->getNome()."</strong> venceu! </p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;
                    case 2: //Desafiante ganhou
                        echo "<p><strong>".$this->desafiante->getNome()."</strong> venceu! </p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                    break;
                }
            }else{
                echo "<p>-> Luta não pode acontecer! <-</p>";
            }
        }
    }
?>