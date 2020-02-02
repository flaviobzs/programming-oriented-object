<?php
    class Aluno extends Pessoa{
        private $matr;
        private $curso;

        public function __construct($n,$i,$s,$c){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setMatr(true);
            $this->setCurso($c);
        }

        public function getMatr(){
            return $this->matr;
        }
        public function getCurso(){
            return $this->curso;
        }

        public function setMatr($m){
            $this->matr = $m;
        }
        public function setCurso($c){
            $this->curso = $c;
        }

        public function cancelarMatr(){
            $this->setMatr(false);
        }

        public function descAluno(){
            echo "<table>";
            echo "<tr>
                <th>Nome</th> 
                <th>Idade</th>  
                <th>Sexo</th>
                <th>Matriculado</th>
                <th>Curso</th>  
            <tr>";
            echo "<tr>
                <td>".($this->getNome())."</td>
                <td>".($this->getIdade())."</td>
                <td>".($this->getSexo())."</td>
                <td>".($this->getMatr()?"SIM":"NÃO")."</td>
                <td>".($this->getCurso())."</td>
            </tr>";
            echo "</table><br>";
        }
    }
?>