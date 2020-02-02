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
        
        function getNome(){
            return $this->nome;
        }
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function getIdade(){
            return $this->idade;
        }
        function getAltura(){
            return $this->altura;
        }
        function getPeso(){
            return $this->peso;
        }
        function getCategoria(){
            return $this->categoria;
        }
        function getVitorias(){
            return $this->vitorias;
        }
        function getDerrotas(){
            return $this->derrotas;
        }
        function getEmpates(){
            return $this->empates;
        }

        function setNome($no){
            $this->nome = $no;
        }
        function setNacionalidade($nc){
            $this->nacionalidade = $nc;
        }
        function setIdade($id){
            $this->idade = $id;
        }
        function setAltura($al){
            $this->altura = $al;
        }
        function setPeso($pe){
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
        function setVitorias($vi){
            $this->vitorias = $vi;
        }
        function setDerrotas($de){
            $this->derrotas = $de;
        }
        function setEmpates($em){
            $this->empates = $em;
        }

        public function apresentar(){
            echo "<p><hr></hr></p>";
            echo "CHEGOU A HORA!!!<br> O lutador ". $this->getNome();
            echo " veio direto de ". $this->getNacionalidade();
            echo " tem ". $this->getIdade() ." anos e pesa ". $this->getPeso() ."Kg.";
            echo "<br> Ele tem ". $this->getVitorias() ." vitórias ";
            echo $this->getDerrotas() ." derrotas e ". $this->getEmpates() ." empates. </p>";
        }
        public function status(){
            echo "<p><hr></hr></p>";
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