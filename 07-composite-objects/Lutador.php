<?php
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no,$nc,$id,$al,$pe,$vi,$de,$em){
            $this->nome = $no;
            $this->nacionalidade = $nc;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        
        private function getNome(){
            return $this->nome;
        }
        private function getNacionalidade(){
            return $this->nacionalidade;
        }
        private function getIdade(){
            return $this->idade;
        }
        private function getAltura(){
            return $this->altura;
        }
        private function getPeso(){
            return $this->peso;
        }
        private function getCategoria(){
            return $this->categoria;
        }
        private function getVitorias(){
            return $this->vitorias;
        }
        private function getDerrotas(){
            return $this->derrotas;
        }
        private function getEmpates(){
            return $this->empates;
        }

        private function setNome($no){
            $this->nome = $no;
        }
        private function setNacionalidade($nc){
            $this->nacionalidade = $nc;
        }
        private function setIdade($id){
            $this->idade = $id;
        }
        private function setAltura($al){
            $this->altura = $al;
        }
        private function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria();
        }
        private function setCategoria(){
            if($this->peso < 52.2){
                $this->categoria = "Inválido";
            }elseif($this->peso <= 70.3){
                $this->categoria = "Leve";
            }elseif($this->peso <= 83.9){
                $this->categoria = "Médio";
            }elseif($this->peso <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }
        private function setVitorias($vi){
            $this->vitorias = $vi;
        }
        private function setDerrotas($de){
            $this->derrotas = $de;
        }
        private function setEmpates($em){
            $this->empates = $em;
        }

        public function apresentar(){
            echo "<p>****************************************************************************</p>";
            echo "CHEGOU A HORA!!!<br> O lutador ". $this->getNome();
            echo " veio direto de ". $this->getNacionalidade();
            echo " tem ". $this->getIdade() ." anos e pesa ". $this->getPeso() ."Kg.";
            echo "<br> Ele tem ". $this->getVitorias() ." vitórias ";
            echo $this->getDerrotas() ." derrotas e ". $this->getEmpates() ." empates. </p>";
        }
        public function status(){
            echo "<p>------------------------------------------------------</p>";
            echo "<p><strong>". $this->getNome() ."</strong></p>";
            echo " É um peso ". $this->getCategoria();
            echo " ".$this->getVitorias()." vitórias ";
            echo $this->getDerrotas()." derrotas ";
            echo $this->getEmpates()." empates.</p>";
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }
?>