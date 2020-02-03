<?php
    require_once 'Aluno.php';
    class Tecnico extends Aluno{
        private $registroProfissional;

        public function __construct($n, $i, $s, $m, $c, $rp){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setMatricula($m);
            $this->setCurso($c);
            $this->setRegisProf($rp);
        }

        public function getRegisProf(){
            return $this->registroProfissional;
        }
        
        public function setRegisProf($rp){
            $this->registroProfissional = $rp;
        }

        public function praticar(){
            echo "<p>{$this->getNome()}, está praticando!</p>";
        }
    }
?>