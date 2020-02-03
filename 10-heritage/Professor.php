<?php
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
        public function setSalario($sl){
            $this->salario = $sl;
        }

        public function receberAum($aumento){
            $this->setSalario($this->getSalario() + $aumento);
        }

        public function descProf(){
            echo "<table>";
            echo "<tr>
                <th>Nome</th> 
                <th>Idade</th>  
                <th>Sexo</th>
                <th>Especialidade</th>
                <th>Salário</th>  
            <tr>";
            echo "<tr>
                <td>".($this->getNome())."</td>
                <td>".($this->getIdade())."</td>
                <td>".($this->getSexo())."</td>
                <td>".($this->getEspecialidade())."</td>
                <td>".($this->getSalario())."</td>
            </tr>";
            echo "</table><br>";
        }
    }
?>