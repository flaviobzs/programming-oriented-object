<?php
    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;

        public function __construct($n, $i, $s, $m, $c){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setMatricula($m);
            $this->setCurso($c);
            $this->setBolsa(false);
        }
        
        public function getBolsa(){
            return $this->bolsa;
        }
        
        public function setBolsa($b){
            $this->bolsa = $b;
        }

        public function renovarBolsa(){
                $this->setBolsa(true);
                echo "<p>A bolsa foi renovada</p>";
        }

        public function pagarMensalidade(){ //Sobrepondo método
            echo "<p>{$this->getNome()} é bolsista: Então paga com desconto.</p>";          
        }
        
    }
?>