<?php
    require_once 'Pessoa.php';
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function __construct($n, $i, $s, $m, $c){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setMatricula($m);
            $this->setCurso($c);
        }

        public function getMatricula(){
            return $this->matricula;
        }
        public function getCurso(){
            return $this->curso;
        }

        public function setMatricula($m){
            $this->matricula = $m;
        } 
        public function setCurso($c){
            $this->curso = $c;
        }

        public function pagarMensalidade(){
            echo "<p>Pagando a mensalidade do aluno(a) {$this->getNome()}.</p>";          
        }
    }
?>