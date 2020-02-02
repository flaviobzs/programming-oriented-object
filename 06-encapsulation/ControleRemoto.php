<?php
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador{ //A classe está implementando a interface
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }

        private function setVolume($v){
            $this->volume = $v;
        }
        private function setLigado($l){
            $this->ligado = $l;
        }
        private function setTocando($t){
            $this->tocando = $t;
        }

        //sobrescrevendo Métodos
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p>Ligado: ". ($this->getLigado()?"SIM":"NÃO")."</p>";
            echo "<p>Tocando: ". ($this->getTocando()?"SIM":"NÃO")."</p>";
            echo "<p>Volume: ". ($this->getVolume())."</p>";
            for ($i=0; $i <= $this->getVolume(); $i+=10){
                echo "| ";
            }
            echo "<br/>";     
        }
        public function fecharMenu(){
            echo "<p>Fechando o menu...</p>";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if($this->getLigado() && $this->getTocando(false)){
                $this->setTocando();
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }
?>