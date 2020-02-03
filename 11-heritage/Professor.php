<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function __construct($n, $i, $s, $e, $sl){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setEspecialidade($e);
            $this->setSalario($sl);
        }

        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function getSalario(){
            return $this->salario;
        }

        public function setEspecialidade($e){
            $this->especialidade = $e;
        }
        public function setSalario($s){
            $this->salario = $s;
        }

        public function receberAumento($aumento){
            $this->setSalario($this->getSalario() + $aumento);
            echo "O salário atual de {$this->getNome()} é R$ {$this->getSalario()}</p>";
        }
    }
?>