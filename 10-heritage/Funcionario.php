<?php
    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function __construct($n, $i, $s, $st){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setSetor($st);
            $this->setTrabalhando(false);        
        }
        
        public function getSetor(){
            return $this->setor;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }

        public function setSetor($s){
            $this->setor = $s;
        }
        public function setTrabalhando($t){
            $this->trabalhando = $t;
        }

        public function mudarTrabalho(){
            $this->setTrabalhando(true);
        }

        public function descFunc(){
            echo "<table>";
            echo "<tr>
                <th>Nome</th> 
                <th>Idade</th>  
                <th>Sexo</th>
                <th>Setor</th>
                <th>Trabalhando</th>  
            <tr>";
            echo "<tr>
                <td>".($this->getNome())."</td>
                <td>".($this->getIdade())."</td>
                <td>".($this->getSexo())."</td>
                <td>".($this->getSetor())."</td>
                <td>".($this->getTrabalhando()?"SIM":"NÃO")."</td>
            </tr>";
            echo "</table><br>";
        }
    }

?>